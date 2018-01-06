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
    return view('welcome.mainhome');
});

/*----------------------------Home-------------------------------------------------*/
Route::get('/home',['as'=>'home','uses'=>'HomeController@showHome']);
Route::get('/about',['as'=>'about','uses'=>'HomeController@showAbout']);
Route::get('/feature',['as'=>'service','uses'=>'HomeController@showFeatures']);
Route::get('/contact',['as'=>'contact','uses'=>'HomeController@showContact']);

Auth::routes();

/*----------------------------Admin-------------------------------------------------*/

/*----------------------Dashboard----------------------*/
Route::get('/dashboard',['as'=>'dashboard','uses'=>'AdminController@showDashboard']);

/*----------------------Course----------------------*/
Route::get('/course',['as'=>'course','uses'=>'AdminController@showCourses']);
Route::get('/CreateCourse',['as'=>'addcourse','uses'=>'AdminController@AddCourse']);
Route::POST('/saveCourse',['as'=>'savecourse','uses'=>'AdminController@saveCourse']);
Route::get('/reglist',['as'=>'regcourse','uses'=>'AdminController@regList']);

/*----------------------Notice----------------------*/
Route::get('/noticelist',['as'=>'noticelist','uses'=>'AdminController@noticeList']);
Route::get('/notice/{id}',['as'=>'notice','uses'=>'AdminController@showNotice']);
Route::get('/CreateNotice/{id}',['as'=>'addnotice','uses'=>'AdminController@AddNotice']);
Route::post('/saveNotice',['as'=>'savenotice','uses'=>'AdminController@postNotice']);

/*----------------------Question----------------------*/
Route::get('/CreateQuestionSet',['as'=>'add_questionset','uses'=>'AdminController@addQuestionSet']);
Route::get('/question_set',['as'=>'questionsetlist','uses'=>'AdminController@showlistQuestionSet']);
Route::post('/savequestions',['as'=>'SaveQuestions','uses'=>'AdminController@savequestions']);
Route::get('/AllQuestions/{id}',['as'=>'SeeQuestions','uses'=>'AdminController@Questionslist']);

/*----------------------Exam----------------------*/
Route::get('/exam',['as'=>'exam','uses'=>'AdminController@showExams']);
Route::view('/CreateExam', 'admin.exam.addexam', ['as' => 'createexam']);


/*Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');*/

