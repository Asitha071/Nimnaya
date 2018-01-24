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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/homepage', function () {
    return view('homepage');
});
Route::get('/addedlessons', function () {
    return view('addedlessons');
});
Route::get('/note', function () {
    return view('note');
});
Route::get('/assignSubject', function () {
    return view('assignSubject');
});
Route::get('/subject', function () {
    return view('subject');
});
Route::get('/video', function () {
    return view('video');
});
Route::get('/teacher', function () {
    return view('teacher');
});
Route::get('/subject', function () {
    return view('subject');
});
Route::get('/studenthome', function () {
    return view('studenthome');
});
Route::get('/subjectsgrade6', function () {
    return view('subjectsgrade6');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/layouts.notification', function () {
    return view('confirmThread');
});
Route::get('/subjectsgrade7', function () {
    return view('subjectsgrade7');
});

Route::get('/subjectsgrade8', function () {
    return view('subjectsgrade8');
});
Route::get('/subjectsgrade9', function () {
    return view('subjectsgrade9');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/addexam', function () {
    return view('addexam');
});
Route::get('/addstudent', function () {
    return view('addstudent');
});
Route::get('/lesson', function () {
    return view('lesson');
});
Route::get('/auth/admin-login', function () {
    return view('auth/admin-login');
});
Route::get('/6mathschapters', function () {
    return view('6mathschapters');
});
Route::get('/6mathslessons', function () {
    return view('6mathslessons');
});

Route::post('/contact/submit','MessagesController@submit');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
Route::post('/lesson','LessonController@submit');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('verifyEmailFirst','Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');
Route::get('verify/{email}/{verifyToken}','Auth\RegisterController@sendEmailDone')->name('sendEmailDone');
Route::get('/profile/{name}','ProfileController@profile');
Route::get('profile','ProfileController@profile');
Route::post('profile','ProfileController@update_avatar');

Route::post('/homepage/submit','LessonController@submit');
//Route::post('/lesson/submit','savelessonController@submit');
Route::get('/addedlessons','savelessonController@getLessons');
//Route::post('/homepage','homepageController@getView');
Route::post('/note','noteController@submit');
Route::get('/assignSubject','homepageController@index');
//Route::get('/subject','fetchusertypeController@subject');
//Route::post('/auth/login','loginController@direct');
Route::post('/login.custom',['uses' =>'LoginManageController@login','as'=>'login.custom']);

Route::group(['middleware'=>'auth'],function(){
Route::get('/studenthome',function(){
	return view('studenthome');
})->name('studenthome');
Route::get('/homepage',function(){
	return view('homepage');
})->name('homepage');

Route::get('/homepage/lesson/{id}', 'LessonController@getLesson');

Route::post('/subject','subjectController@submit');



});

Route::prefix('admin')->group(function(){
Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/','AdminController@index')->name('admin.dashboard');

});
Route::get('/navbar',function(){
$notification=auth()->user()->unreadNotifications;
foreach($notifications as $notification){
    dd($notification->data['user']['name']);
}


});
//Route::get('lesson','LessonController@getgrades');
