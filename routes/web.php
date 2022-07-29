<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@myhome')->name('myhome');

Auth::routes();

Route::get('get-district/ajax/{id}','HomeController@getDistrict');
Route::get('get-sub-district/ajax/{id}','HomeController@getSubDistrict');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/location_search','PageController@locationSearch')->name('location_search');
// Index Page Route
Route::get('/institute-type/{slug}','PageController@instituteType')->name('institute_type');
Route::get('/sub-institute-type/{slug}','PageController@subInstituteType')->name('sub_institute_type');
// Show Details Page
Route::get('division-details','PageController@showDeivisionPage')->name('division_details');
Route::get('/search-institute-details','PageController@searchInstituteDetails')->name('search_institute');
Route::get('/post-details/{slug}','PageController@postDetails')->name('post_details');
Route::get('/board/{slug}','PageController@boardDetails')->name('board_details');
Route::get('/institute-details/{slug}','PageController@instituteDetails')->name('institute_details');
Route::get('/all-featured-institute','PageController@allFeaturedInstitute')->name('all_featured_institute');
Route::get('/all-top-institute','PageController@allTopInstitute')->name('all_top_institute');
Route::get('/approved_by-create','PageController@approvedByCreate')->name('approved_by.create');

// Image Gallery
Route::resource('image_gallery', 'ImageGalleryController');
// Notice Board
Route::resource('/notice_board', 'NoticeBoardController');
Route::get('/notice_board/download/{file}', 'NoticeBoardController@download');
// Update News 
Route::resource('/update_news', 'UpdateNewsController');
// Why Choose Us 
Route::resource('/why_choose_us','WhyChooseUsController');
// Institute Route Start
Route::resource('/institute','InstituteController');
// Slider Route Start
Route::resource('/slider','SliderController');
// Recent Event
Route::resource('/recent_event','RecentEventController');
// Video Gallery Route
Route::resource('/video_gallery','VideoGalleryController'); 
// Widget Route Start
Route::resource('widget','WidgetController');
// Post Route Start
Route::resource('/post','PostController')->middleware('auth');
Route::get('/post-peding','PostController@pendingPost')->name('post.pending_post')->middleware('auth');
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'Backend\DashboardController@index')->name('admin.dashboard');
    Route::resource('roles', 'Backend\RolesController', ['names' => 'admin.roles']);
    Route::resource('users', 'Backend\UsersController', ['names' => 'admin.users']);
    Route::resource('admins', 'Backend\AdminsController', ['names' => 'admin.admins']);
    
    // Login Routes
    Route::get('/login', 'Backend\Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login/submit', 'Backend\Auth\LoginController@login')->name('admin.login.submit');
    // Logout Routes
    Route::post('/logout/submit', 'Backend\Auth\LoginController@logout')->name('admin.logout.submit');
    // Forget Password Routes
    Route::get('/password/reset', 'Backend\Auth\ForgetPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset/submit', 'Backend\Auth\ForgetPasswordController@reset')->name('admin.password.update');
    // Institute Type Route Start
    Route::resource('/institute-type','Backend\InstituteTypeController',['names' => 'admin.institute_type']);
    // Institute Type Route End
    Route::resource('/sub-institute-type','Backend\SubInstituteTypeController',['names' =>'admin.sub_institute_type']);
    // Class Route Start 
    Route::resource('/class','Backend\ClassController',['names' => 'admin.class']);
    // Shift Route Start
    Route::resource('/shift','Backend\ShiftController',['names' => 'admin.shift']);
    // Group Route Start
    Route::resource('/group','Backend\GroupController',['names' => 'admin.group']);
    // Division Route Start
    Route::resource('/division','Backend\DivisionController',['names' => 'admin.division']);
    // District Route Start
    Route::resource('/district','Backend\DistrictController',['names' => 'admin.district']);

    Route::resource('/sub-district','Backend\SubDistrictsController',['names' => 'admin.sub-district']);
    Route::get('/sub-district/ajax/{id}','Backend\SubDistrictsController@getdistrict');
    // Board Route STart
    Route::resource('/board','Backend\BoardController',['names' => 'admin.board']);
    // Ads Route Start
    Route::resource('/ads','Backend\AdsController',['names' => 'admin.ads']);
    // Post Controller
    Route::resource('/post','Backend\PostController',['names' => 'admin.post']);
    Route::get('/approve-post','Backend\PostController@approve')->name('admin.post.approve');
    Route::get('/pending-post','Backend\PostController@pendingPost')->name('admin.post.pending_post');
    Route::get('/post-top-active','Backend\PostController@postTopActive')->name('admin.post.top_active');
    Route::get('/post-top-deactive','Backend\PostController@postTopDeactive')->name('admin.post.top_deactive');
     // Institute Controller
    Route::resource('/institute','Backend\InstituteController',['names' => 'admin.institute']);
    Route::get('approve','Backend\InstituteController@approve')->name('admin.institute.approve');
    Route::get('/pending-institute','Backend\InstituteController@pendingInstitute')->name('admin.institute.pending_institute');
    Route::get('/institute-featured-active','Backend\InstituteController@instituteFeaturedActive')->name('admin.institute.featured_active');
    Route::get('/institute-featured-deactive','Backend\InstituteController@instituteFeaturedDeactive')->name('admin.institute.featured_deactive');
    Route::get('/institute-top-active','Backend\InstituteController@instituteTopActive')->name('admin.institute.top_active');
    Route::get('/institute-top-deactive','Backend\InstituteController@instituteTopDeactive')->name('admin.institute.top_deactive');
});