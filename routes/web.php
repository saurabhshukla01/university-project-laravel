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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/courses', function () {
    return view('courses');
});

Route::get('/staff', function () {
    return view('teacher');
});


Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog-single', function () {
    return view('blog-single');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/apply_now', function () {
    return view('applynow');
});

Route::get('/description', function () {
    return view('description');
});


Route::get('/add_course', function () {
    return view('add_course');
});

Route::get('/add_teacher', function () {
    return view('teacher_entry');
});

Route::get('/add_blog', function () {
    return view('add_blog');
});


Route::get('/services', function () {
    return view('services');
});

Route::get('/deparments', function () {
    return view('deparments');
});


/*
Route::get('home/','HomeController@index');
Route::get('home1/','HomeController@show');
Route::get('/add_blog','BlogController@index');
Route::post('/add_blog_post','BlogController@store');
Route::get('/add_course','Course_controller@index');
Route::post('/add_course_post','Course_controller@store');
Route::get('/courses','Course_controller@show');
Route::get('/add_teacher','Teacher_controller@index');
Route::post('/add_teacher_post','Teacher_controller@store');
Route::get('/staff','Teacher_controller@show');
Route::get('/registration','RegistrationController@index');
Route::post('/registration_post','RegistrationController@store');
Route::get('/Personal_information','PersonalInformationController@index');
Route::post('/Personal_information_post','PersonalInformationController@store');
Route::get('/education_details','EducationInformationController@index');
Route::post('/education_details_post','EducationInformationController@store');
Route::get('/verification_information','VerificationController@index');
Route::post('/verification_information_post','VerificationController@store');

Route::get('/pdf-download','PDFController@PDFgenerator');
*/
Route::get('/registration', function () {
    return view('registration');
});


Route::get('/application2', function () {
    return view('application2');
});


Route::get('/education_details', function () {
    return view('education_details');
});

Route::get('/Personal_information', function () {
    return view('Personal_information');
});

Route::get('/verification_information', function () {
    return view('verification_information');
});


Route::get('/final_sumbit', function () {
    return view('final_sumbit');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
