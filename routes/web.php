<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('student')->group(function () {
    
    Route::get('dashboard', 'StudentController@dashboard')->name('student.dashboard')->middleware('auth');
    Route::get('dashboard/orders', 'StudentController@orders')->name('student.orders');
    Route::get('dashboard/purchased', 'StudentController@purchased')->name('student.purchased');
   

});
Route::prefix('assignment')->group(function () {
    Route::get('/', 'AssignmentController@index')->name('assignment')->middleware('auth');
    Route::get('/{id}', 'AssignmentController@show')->name('assignment.show')->middleware('auth');
    Route::get('complete/{id}', 'AssignmentController@complete')->name('assignment.complete')->middleware('auth');
    Route::get('revise/{id}', 'AssignmentController@revise')->name('assignment.revise')->middleware('auth');
    Route::post('review', 'AssignmentController@review')->name('assignment.review')->middleware('auth');
    Route::get('/edit/{id?}', 'AssignmentController@edit')->name('assignment.edit');
    Route::post('/', 'AssignmentController@store')->name('assignment.store');
    Route::post('/pick/{id}', 'AssignmentController@pick')->name('assignment.pick');
    Route::post('/finish/{id}', 'AssignmentController@finish')->name('assignment.finish');
    //Route::delete('/{assignment}', 'AssignmentController@destroy')->name('assignment.delete');
});

Route::prefix('message')->group(function () {
    Route::get('/', 'MessageController@index')->name('assignment');
    Route::get('/private', 'MessageController@show')->name('message.show');
    Route::get('/private/{id}', 'MessageController@detail')->name('message.detail');
    Route::post('/', 'MessageController@store')->name('message.store');
    Route::get('/toadmin','MessageController@toadmin')->name('message.toadmin');
    Route::post('/toadmin','MessageController@storetoadmin')->name('message.toadmin.store');

});

Route::prefix('writer')->group(function () {
    
    Route::get('/register', function () {
        return view('auth.registerwriter',['categories'=>App\Category::all()]);
    })->name('writer.register');
    Route::get('updateprofile', 'WriterController@updateprofile')->name('writer.updateprofile')->middleware('auth');
    Route::post('updateprofile', 'WriterController@storeprofile')->name('writer.storeprofile')->middleware('auth');
    Route::get('upgrade', 'WriterLevelController@frontend')->name('writer.upgrade')->middleware('auth');
    Route::get('confirmed', 'WriterController@confirmed')->name('writer.confirmed');
    Route::get('dashboard', 'WriterController@dashboard')->name('writer.dashboard')->middleware('auth');
    Route::get('assignment', 'WriterController@assignment')->name('writer.assignment')->middleware('auth');
    Route::get('inprogress-jobs', 'WriterController@inprogressJobs')->name('writer.jobs.inprogress')->middleware('auth');
    Route::get('completed-jobs', 'WriterController@completedJobs')->name('writer.jobs.completed')->middleware('auth');
    Route::get('total-jobs', 'WriterController@totalJobs')->name('writer.jobs.total')->middleware('auth');

});

Route::prefix('admin')->group(function () {
    Route::middleware(['can:accessAdminpanel'])->group(function () {
       
        Route::get('dashboard', 'AdminController@dashboard')->name('admin.dashboard');
        Route::resource('order', 'AdminOrderController');
        Route::post('pay/{id}','AdminOrderController@pay')->name('order.pay');
        Route::resource('customer', 'AdminCustomerController');
        Route::resource('teacher', 'AdminTeacherController');
        Route::resource('finance', 'FinanceController');
        Route::get('message', 'AdminMessageController@index')->name('admin.message');
        Route::get('message/{id}', 'AdminMessageController@show')->name('admin.message.show');
        Route::post('message','AdminMessageController@store')->name('admin.message.store');
        Route::post('message/reply','AdminMessageController@reply')->name('admin.message.reply');

        Route::get('messagesend','AdminMessageController@create')->name('admin.message.create');



        Route::group(['prefix' => 'setting'], function(){
            Route::resource('category', 'CategoryController');
            Route::resource('academiclevel', 'AcademicLevelController');
            Route::resource('extra', 'ExtraController');
            Route::resource('language', 'LanguageController');
            Route::resource('level', 'AssignmentLevelController');
            Route::resource('style', 'StyleController');
            Route::resource('urgency', 'UrgencyController');
            Route::resource('writerlevel', 'WriterLevelController');

        });
        Route::group(['prefix' => 'quiz'], function(){
            Route::resource('topic', 'TopicController');
            Route::resource('question', 'QuestionController');
        });
        Route::group(['prefix' => 'discount'], function(){
            Route::resource('coupon', 'CouponController');
            Route::resource('code', 'CodeController');
            Route::post('generate/{id}','CodeController@generate')->name('code.generate');
        });
        Route::get('active/{id}', 'UserController@active')->name('user.active');
        Route::get('deactive/{id}', 'UserController@deactive')->name('user.deactive');
        Route::get('delete/{id}', 'UserController@delete')->name('user.delete');
    });

});

Route::post('pay', 'PaymentController@payWithpaypal')->name('pay');
Route::get('status', 'PaymentController@getPaymentStatus')->name('status');

Route::prefix('attachment')->group(function () {
    Route::get('download/{id}', 'AttachmentController@download')->name('download')->middleware('auth');
    Route::post('upload', 'AttachmentController@store')->name('upload')->middleware('auth');
    Route::get('delete/{id}', 'AttachmentController@delete')->name('delete')->middleware('auth');
});

Route::prefix('quiz')->group(function () {
    Route::get('multiple-choice', 'TestController@multiple')->name('test.multiple')->middleware('auth');
    Route::post('multiple-choice', 'TestController@storemultiple')->name('test.multiple.store')->middleware('auth');
    Route::get('topic', 'TestController@topic')->name('test.topic')->middleware('auth');
    Route::post('topic', 'TestController@storetopic')->name('test.topic.store')->middleware('auth');
});

Route::get('/test',function (){
    $writer_review = App\Review::where('to',2)->avg('rating');
    dd($writer_review);
});

Route::get('register/verify/{code}', 'UserController@activeuser')->name('verify');
Route::post('authenticate',  'Auth\LoginController@authenticate');
Route::get('top10writers', 'UserController@top10')->name('top10');

Route::get('notification','NotificationController@index')->name('notification.index');
Route::get('notification/{id}','NotificationController@show')->name('notification.show');

Route::get('how-it-works', function(){
    return view('static.howitworks');
})->name('howitworks');

Route::get('contact', function(){
    return view('static.contact');
})->name('contact');