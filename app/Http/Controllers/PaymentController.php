<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Payment;
use PayPal\Api\Payer;
use PayPal\Api\PaymentExecution;
use Session;
use App\Assignment;
use App\WriterLevel;
use App\Finance;
use Auth;
use App\User;
class PaymentController extends Controller
{
    public function __construct()
    {
    /** PayPal api context **/
            $paypal_conf = \Config::get('paypal');
            $this->_api_context = new ApiContext(new OAuthTokenCredential(
                $paypal_conf['client_id'],
                $paypal_conf['secret'])
            );
            $this->_api_context->setConfig($paypal_conf['settings']);
    }
    public function payWithpaypal(Request $request)
    {
        if ($request->type == 1) {
            $assignment = Assignment::findOrFail($request->get('id'));
            $price = $assignment->price + 10;
            $name = $assignment->name;

        }else {
            $writer = WriterLevel::findOrFail($request->get('id'));
            $price = $writer->price;
            $name = $writer->name;
        }

        $finance = new Finance();
        $finance->user_id = auth()->user()->id;
        $finance->amount = $price;
        $finance->status = 0;
        $finance->type = $request->type;
        $finance->itemid = $request->id;
        $finance->note = "";
        $finance->save();
        
        Session::put('finance_payment_id', $finance->id);
       

        $payer = new Payer();
                $payer->setPaymentMethod('paypal');
        $item_1 = new Item();
        $item_1->setName($name) /** item name **/
                    ->setCurrency('USD')
                    ->setQuantity(1)
                    ->setPrice($price); /** unit price **/
        $item_list = new ItemList();
                $item_list->setItems(array($item_1));
        $amount = new Amount();
                $amount->setCurrency('USD')
                    ->setTotal($price);
        $transaction = new Transaction();
                $transaction->setAmount($amount)
                    ->setItemList($item_list)
                    ->setDescription('Pay for '.$name);
        $redirect_urls = new RedirectUrls();
                $redirect_urls->setReturnUrl(route('status')) /** Specify return URL **/
                    ->setCancelUrl(route('status'));
        $payment = new Payment();
                $payment->setIntent('Sale')
                    ->setPayer($payer)
                    ->setRedirectUrls($redirect_urls)
                    ->setTransactions(array($transaction));
                /** dd($payment->create($this->_api_context));exit; **/
                try {
        $payment->create($this->_api_context);
        } catch (\PayPal\Exception\PPConnectionException $ex) {
        if (\Config::get('app.debug')) {
        \Session::put('error', 'Connection timeout');
                        return redirect()->route('paywithpaypal');
        } else {
        \Session::put('error', 'Some error occur, sorry for inconvenient');
                        return redirect()->route('paywithpaypal');
        }
        }
        foreach ($payment->getLinks() as $link) {
        if ($link->getRel() == 'approval_url') {
        $redirect_url = $link->getHref();
                        break;
        }
        }
        /** add payment ID to session **/
                Session::put('paypal_payment_id', $payment->getId());
                Session::put('assignment_payment_id', $request->get('id'));
        if (isset($redirect_url)) {
        /** redirect to paypal **/
                    return redirect()->away($redirect_url);
        }
        \Session::put('error', 'Unknown error occurred');
                return redirect()->route('paywithpaypal');
    }
    public function getPaymentStatus(Request $request)
    {
        /** Get the payment ID before session clear **/
        $payment_id = Session::get('paypal_payment_id');
        $assignment_payment_id = Session::get('assignment_payment_id');
        $finance = Finance::findOrFail(Session::get('finance_payment_id'));
        

        
        
        /** clear the session payment ID **/
        Session::forget('paypal_payment_id');
        Session::forget('assignment_payment_id');
        Session::forget('finance_payment_id');

        
        if (empty($request->PayerID) || empty($request->token)) {
            if ($finance->type == 1) 
                return redirect()->route('assignment.show',["id"=>$assignment_payment_id])->with('errors', 'Payment failed');
            else
                return redirect()->route('writer.upgrade')->with('errors', 'Payment failed');  
        }
        $payment = Payment::get($payment_id, $this->_api_context);
                $execution = new PaymentExecution();
                $execution->setPayerId($request->PayerID);
        /**Execute the payment **/
                $result = $payment->execute($execution, $this->_api_context);
        if ($result->getState() == 'approved') {
            
            $finance->status = 1;
            $finance->save();
            if ($finance->type == 1) {
                $assignment = Assignment::findOrFail($assignment_payment_id);
                $assignment->paid = 1;
                $assignment->status = 1;
                $assignment->save();
                return redirect()->route('assignment.show',["id"=>$assignment_payment_id])->with('success', 'Payment success');
            }else {
                $writer = User::findOrFail($finance->user_id);
                $writer->status = $finance->itemid;
                $writer->save();
                return redirect()->route('writer.dashboard')->with('success', 'Payment success');
            }
                
        }
            $finance->note = $result->getState();
            $finance->save();
            if ($finance->type == 1) 
                return redirect()->route('assignment.show',["id"=>$assignment_payment_id])->with('error', 'Payment failed');
            else
                return redirect()->route('writer.upgrade')->with('error', 'Payment failed'); 
    }
}
