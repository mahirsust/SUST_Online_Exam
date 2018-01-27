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
Route::group(['middleware' => ['admin']], function() {
	/*----------------------------Admin-------------------------------------------------*/
	/*----------------------Dashboard----------------------*/
	Route::get('/dashboard',['as'=>'dashboard','uses'=>'AdminController@showDashboard']);
	/*----------------------Profile----------------------*/
	Route::get('/profile',['as'=>'profile','uses'=>'AdminController@showProfile']);
	Route::post('/a_changepic',['as'=>'a_ChangePhoto','uses'=>'AdminController@Change_Pic']);
	Route::post('/a_editprofile',['as'=>'a_EditName','uses'=>'AdminController@Edit_Name']);
	/*----------------------Course----------------------*/
	Route::get('/course',['as'=>'course','uses'=>'AdminController@showCourses']);
	Route::get('/CreateCourse',['as'=>'addcourse','uses'=>'AdminController@AddCourse']);
	Route::get('/editCourse/{id}',['as'=>'editcourse','uses'=>'AdminController@EditCourse']);
	Route::POST('/saveCourse',['as'=>'savecourse','uses'=>'AdminController@saveCourse']);
	Route::POST('/saveCourse1',['as'=>'savecourse','uses'=>'AdminController@saveCourse1']);
	Route::get('/reglist',['as'=>'regcourse','uses'=>'AdminController@regList']);
	/*----------------------Notice----------------------*/
	Route::get('/noticelist',['as'=>'noticelist','uses'=>'AdminController@noticeList']);
	Route::get('/notice/{id}',['as'=>'notice','uses'=>'AdminController@showNotice']);
	Route::get('/CreateNotice/{id}',['as'=>'addnotice','uses'=>'AdminController@AddNotice']);
	Route::post('/saveNotice',['as'=>'savenotice','uses'=>'AdminController@postNotice']);
	Route::post('/editNotice',['as'=>'editnotice','uses'=>'AdminController@updateNotice']);
	Route::post('/deleteNotice',['as'=>'deletenotice','uses'=>'AdminController@removeNotice']);
	/*----------------------Question----------------------*/
	Route::get('/CreateQuestionSet',['as'=>'add_questionset','uses'=>'AdminController@addQuestionSet']);
	Route::get('/question_set',['as'=>'questionsetlist','uses'=>'AdminController@showlistQuestionSet']);
	Route::post('/savequestions',['as'=>'SaveQuestions','uses'=>'AdminController@savequestions']);
	Route::get('/AllQuestions/{id}',['as'=>'SeeQuestions','uses'=>'AdminController@Questionslist']);
	/*----------------------Exam----------------------*/
	Route::get('/examlist',['as'=>'examlist','uses'=>'AdminController@examList']);
	Route::get('/exam/{id}',['as'=>'exam','uses'=>'AdminController@showExams']);
	Route::get('/CreateExam/{id}', ['as'=>'createexam', 'uses'=>'AdminController@CreateExam']);
	Route::POST('/saveExam',['as'=>'saveexam','uses'=>'AdminController@saveExam']);
	Route::POST('/saveExam1',['as'=>'saveexam','uses'=>'AdminController@saveExam1']);
	Route::get('/editExam/{id}', ['as'=>'editexam', 'uses'=>'AdminController@editExam']);


	/*----------------------Result----------------------*/
	Route::get('/rlist',['as'=>'examlist','uses'=>'AdminController@rList']);
	Route::get('/rcourse/{id}',['as'=>'exam','uses'=>'AdminController@rcourse']);
	Route::get('/result/{id}',['as'=>'result','uses'=>'AdminController@showResults']);
});
Route::group(['middleware' => ['student']], function() {
	/*----------------------------Admin-------------------------------------------------*/
	/*----------------------Dashboard----------------------*/
	Route::get('/userdashboard',['as'=>'dashboard','uses'=>'StudentController@showDashboard']);
	/*----------------------Profile----------------------*/
	Route::get('/userprofile',['as'=>'profile','uses'=>'StudentController@showProfile']);
	Route::post('/changepic',['as'=>'ChangePhoto','uses'=>'StudentController@Change_Pic']);
	Route::post('/editprofile',['as'=>'EditName','uses'=>'StudentController@Edit_Name']);	
	/*----------------------Exam----------------------*/
	Route::get('/uexams',['as'=>'examlist','uses'=>'StudentController@exams']);
	Route::get('/uexamlist/{id}',['as'=>'exam','uses'=>'StudentController@showExams']);
	Route::get('/quiz/{id}',['as'=>'quiz','uses'=>'StudentController@startExam']);
	Route::post('/time',['as'=>'time','uses'=>'StudentController@startTime']);

	/*----------------------Result----------------------*/
	Route::get('/uresult',['as'=>'result','uses'=>'StudentController@showResults']);
	Route::post('/answers',['as'=>'AllAnswers','uses'=>'StudentController@Answerlist']);

	
});
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