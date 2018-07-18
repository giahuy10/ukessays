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
    Route::get('available-assignments', 'StudentController@available')->name('student.available');
    Route::get('inprogess-assignments', 'StudentController@inprogress')->name('student.inprogress');
    Route::get('completed-assignments', 'StudentController@completed')->name('student.completed');
    Route::get('purchased-assignments', 'StudentController@purchased')->name('student.purchased');
    Route::get('inrevision-assignments', 'StudentController@inrevision')->name('student.inrevision');
    Route::get('finished-assignments', 'StudentController@inrevision')->name('student.finished');

});
Route::prefix('assignment')->group(function () {
    Route::get('/', 'AssignmentController@index')->name('assignment');
    Route::get('/{id}', 'AssignmentController@show')->name('assignment.show')->middleware('auth');
    Route::get('complete/{id}', 'AssignmentController@complete')->name('assignment.complete')->middleware('auth');
    Route::get('revise/{id}', 'AssignmentController@revise')->name('assignment.revise')->middleware('auth');
    Route::post('review', 'AssignmentController@review')->name('assignment.review')->middleware('auth');
    //Route::get('/edit/{id?}', 'AssignmentController@edit')->name('assignment.edit');
    Route::post('/', 'AssignmentController@store')->name('assignment.store');
    Route::post('/pick/{id}', 'AssignmentController@pick')->name('assignment.pick');
    //Route::delete('/{assignment}', 'AssignmentController@destroy')->name('assignment.delete');
});

Route::prefix('message')->group(function () {
    Route::get('/', 'MessageController@index')->name('assignment');
    Route::get('/{userid}', 'MessageController@show')->name('message.show');
    Route::post('/', 'MessageController@store')->name('message.store');
    Route::delete('/{assignment}', 'MessageController@destroy')->name('message.delete');
});

Route::prefix('writer')->group(function () {
    
    Route::get('/register', function () {
        return view('auth.registerwriter');
    })->name('writer.register');

    Route::get('upgrade', 'WriterLevelController@frontend')->name('writer.upgrade')->middleware('auth');
    Route::get('confirmed', 'WriterController@confirmed')->name('writer.confirmed');
    Route::get('dashboard', 'WriterController@dashboard')->name('writer.dashboard')->middleware('auth');
    Route::get('assignment', 'WriterController@assignment')->name('writer.assignment')->middleware('auth');
});

Route::prefix('admin')->group(function () {
    Route::get('dashboard', 'AdminController@dashboard')->name('admin.dashboard');
    Route::resource('order', 'AdminOrderController');
    Route::resource('customer', 'AdminCustomerController');
    Route::resource('teacher', 'AdminTeacherController');
    Route::get('finance', 'AdminController@finance')->name('admin.finance');
    Route::get('message', 'AdminController@message')->name('admin.message');
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
});

Route::post('pay', 'PaymentController@payWithpaypal')->name('pay');
Route::get('status', 'PaymentController@getPaymentStatus')->name('status');

Route::prefix('attachment')->group(function () {
    Route::get('download/{id}', 'AttachmentController@download')->name('download')->middleware('auth');
    Route::post('upload', 'AttachmentController@store')->name('upload')->middleware('auth');
    Route::get('delete/{id}', 'AttachmentController@delete')->name('delete')->middleware('auth');


});
Route::get('/test',function (){
    $writer_review = App\Review::where('to',2)->avg('rating');
    dd($writer_review);
});