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
/*
Route::get('/', function () {
    return view('publicpages.home');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//public pages controller-----------------------

Route::get('/', 'publicController@index');

//login reg-----------------------------

Route::get('/registration', 'registrationController@regcategory'); //view category form

Route::get('/registration/customer', 'registrationController@customerform'); //view cus form
Route::post('/register/customer','registrationController@registerCustomer'); //save

Route::get('/registration/supplier', 'registrationController@supplierform'); //view sup form
Route::post('/register/supplier','registrationController@registerSupplier'); //save

Route::get('/login', 'loginController@viewlogin'); //view login form
Route::post('/login/user','loginController@loginUser'); //login ettempt

Route::post('login', [ 'as' => 'login', 'uses' => 'loginController@viewlogin']);

//search------------------------

Route::get('/search', 'searchController@index');
Route::get('/live_search/action', 'searchController@action')->name('live_search.action');

//supplire pages-------------
Route::get('/supplier/index', 'supplierController@index');
Route::get('/supplier/editprofile', 'supplierController@editprofile');
Route::post('/supplier/profile/update', 'supplierController@updateprofile');//update profile


//**Admin routs********************************************************** */

///Admin-Dashboard
Route::get('/admin', 'adminController@dashboard');
Route::get('/admin/viewuser/customer/{id}', 'adminController@viewcustomer');
Route::get('/admin/viewuser/supplier/{id}', 'adminController@viewsupplier');

//View users
Route::get('admin/mailbox/{email}', 'adminController@mailusers');
Route::get('admin/removeuser/customer/{id}', 'adminController@removecustomer');
Route::get('admin/removeuser/supplier/{id}', 'adminController@removesupplier');

///Admin-Advertisements
Route::resource('/admin/advertisements', 'advertismentController');
Route::get('/deleteAds/{id}', 'advertismentController@remove');//destroy
Route::post('/updateAds/{id}', 'advertismentController@update');

//Admin-Profile
Route::get('/admin/profile', 'adminController@viewprofile');
Route::post('/admin/profile/update', 'adminController@updateprofile');

//Admin-products
Route::get('/admin/products', 'adminController@viewproducts');
/* Route::get('/admin/addproducts', 'adminController@addproducts'); */
Route::post('/admin/products/store', 'adminController@productsstore');//save products
Route::get('/admin/manageproducts/{id}', 'adminController@manageproducts');//manage products
Route::post('admin/updateproductimages/{id}', 'adminController@updateproducts');//update products  
Route::get('/admin/deleteproduct/{id}', 'adminController@deleteproducts');

//Admin-MailBox
Route::get('/admin/mailbox', 'adminController@mailbox');
Route::post('/admin/sendmail', 'adminController@sendmail');

//Admin - customer list
Route::get('/admin/customerlist', 'adminController@viewcustomerslist');