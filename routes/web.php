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

Auth::routes();

Route::post("/adminDashboard" , 'CustomLoginController@login');

Route::group(['middleware' => 'auth'] , function () {

    Route::get("/adminDashboard", function () {
        return view('adminDashboard');
    });
});

Route::get('/home', 'HomeController@index');
Route::get('/createAdmin' , 'CustomLoginController@createAdmin');
Route::post('/storeAdmin' , 'CustomLoginController@storeAdmin');
Route::get('/allAdmins' , 'CustomLoginController@admins');
Route::delete('/Admindestroy/{admin} ' , 'CustomLoginController@Admindestroy');


//Event Routes
Route::get('Event/search','EventController@search');
Route::get('Event/createDemo','EventController@createDemo');
Route::get('Event/monthlyEvent', 'EventController@monthlyEvent');
Route::get('Event/myevents','EventController@myevents');
Route::get('/Event/showEvent/{event}', 'EventController@showEvent');
Route::post('/Event/showEvent/{event}', 'EventController@updateImage');
Route::get('/Event/calendar', 'EventController@calendar');
Route::resource('Event' , 'EventController');

Route::post('Event/{event}/comment','CommentsController@store');
Route::get('Sport/search','SportController@search');
Route::get('Sport/createDemo','SportController@createDemo');
Route::get('Sport/enrolledStudents' , 'SportController@enrolledStudents');
Route::get('Sport/mysports','SportController@mysports');
Route::post('Sport/addStudent' , 'SportController@addStudent');
Route::delete('Sport/removeStudent' , 'SportController@removeStudent');
Route::resource('Sport' ,'SportController');

Route::get('Society/search','SocietyController@search');
Route::get('Society/createDemo','SocietyController@createDemo');
Route::get('Society/enrolledStudents' , 'SocietyController@enrolledStudents');
Route::get('Society/mysocieties','SocietyController@mysocieties');
Route::post('Society/addStudent' , 'SocietyController@addStudent');
Route::delete('Society/removeStudent' , 'SocietyController@removeStudent');
Route::resource('Society' , 'SocietyController');

Route::get('eventAdmin' , 'EventAdminController@eventAdmin');
Route::get('societyAdmin' , 'EventAdminController@societyAdmin');
Route::get('sportAdmin' , 'EventAdminController@sportAdmin');
//End of Event Routes


//inventory
Route::resource('/orders','Ordercontroller');
Route::resource('/supplier','Suppliercontroller');
Route::resource('/stationary','Stationarycontroller');
Route::resource('/labs','labscontroller');
Route::resource('/inventorysports','Sportstocks');
Route::resource('/resource','Resourcecontroller');
Route::resource('/inventoryexpenses','Inventoryexpenses');
Route::get('/inventory','homeview@index');
Route::get('/live_search', 'LiveSearch@index');
Route::get('/live_search/action', 'LiveSearch@action')->name('live_search.action');




//staff
Route::resource('academics','AcademicController');
Route::resource('nonacademics','NonAcademicController');
Route::resource('leaverequests','LeaveRequestController');
Route::resource('leaverequestsnon','LeaveRequestNonController');


//student
Route::post('/update', 'studentController@store');
Route::get('/std', 'studentController@show');
Route::get('/delete', 'studentController@destroy');
Route::get('/fee', 'studentController@store');
Route::get('/home', 'HomeController@index')->name('home');


//Exam_Management


Route::get('/','PagesController@index' );
//Route::get('pages.Result_Management', ['as' => 'pages.Result_Management','uses'=>'PagesController@Result_Management']);
//Route::get('pages.Subject_Management', ['as' => 'pages.Subject_Management','uses'=>'PagesController@Subject_Management']);



Route::get('Result_Management','PagesManageController@Result_Management' );
Route::get('Subject_Management','PagesManageController@Subject_Management');
Route::get('search','PagesManageController@search');
Route::get('SubjectsView','PagesManageController@SubjectsView');



Route::post('Result_Management/submit','MessagesController@submit');

Route::post('Subject_Management/submit','SuggestionsController@submit');

Route::resource('subjects','SubjectsController');


Route::resource('results','ResultsController');

Route::get('/getPDF','PDFController@getPDF');
Route::get('/generatePDF','PDFController@generatePDF');

Route::get('queries','QueryController@search');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeManageController@index')->name('home');
