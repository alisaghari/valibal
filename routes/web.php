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
//user

Route::get('/', 'UserController@index');
Route::get('/ContactUs', 'UserController@ContactUs');
Route::get('/tlogin', 'UserController@tlogin');
Route::get('/teacher/attend/{product_id}', 'UserController@attend');
Route::get('/attend/p/{product_id}/{user_id}/{date}', 'UserController@attendp');
Route::get('/attend/a/{product_id}/{user_id}/{date}', 'UserController@attenda');
//search users
Route::get('adminSecret/class/att/user/find/{product_id}', 'UserController@findPage');
Route::post('adminSecret/class/att/find/list', 'UserController@findResult');

Route::post('/login/teacher', 'UserController@loginTeacher');
Route::post('user/form/register', 'UserController@registerExec');
Route::post('user/form/login', 'UserController@loginExec');
Route::get('/products', 'ProductController@productListUser');
Route::get('/product/cart/add/{id}', 'UserController@productCartAdd');
Route::get('/product/cart/delete/{id}', 'UserController@productCartDelete');
Route::get('/product/cart/view', 'UserController@productCartView');
Route::get('/learns', 'LearnController@learnListUser');
Route::get('/noti', 'NotificationController@notificationListUser');
Route::get('/teachers', 'TeacherController@teacherListUser');
Route::get('/galleries', 'GalleryController@GalleryListUser');
//admin
Route::get('/adminSecret', function () {
    return view('admin.index');
});
Route::get('adminSecret/user/list', 'AdminController@userList');
Route::get('adminSecret/user/details/{id}', 'AdminController@userDetails');
Route::get('/adminSecret/product', function () {
    return view('admin.product');
});
Route::post('adminSecret/product/add', 'ProductController@addProduct');
Route::get('adminSecret/product/list', 'ProductController@productList');
Route::get('adminSecret/product/user/{id}', 'ProductController@ProductUserList');
Route::get('adminSecret/product/user/attendance/{id}', 'ProductController@ProductUserAttendance');
Route::get('adminSecret/product/delete/{id}', 'ProductController@deleteProduct');
Route::get('adminSecret/product/program/{id}', 'ProductController@ProductProgram');
Route::post('adminSecret/product/program/add', 'ProductController@ProductProgramAdd');
Route::get('/adminSecret/class', function () {
    return view('admin.class');
});
Route::post('adminSecret/class/add', 'ProductController@addClass');
Route::get('adminSecret/class/list', 'ProductController@classList');
Route::get('adminSecret/class/delete/{id}', 'ProductController@deleteClass');

Route::get('/adminSecret/teacher', function () {
    return view('admin.teacher');
});
Route::post('adminSecret/teacher/add', 'TeacherController@addTeacher');
Route::get('adminSecret/teacher/list', 'TeacherController@teacherList');
Route::get('adminSecret/teacher/delete/{id}', 'TeacherController@deleteTeacher');
Route::get('adminSecret/teacher/cv/{id}', 'TeacherController@Teachercv');
Route::post('adminSecret/teacher/cv/add', 'TeacherController@addTeachercv');
Route::get('adminSecret/teachercv/list', 'TeacherController@teacherCvList');
Route::get('adminSecret/teachercv/list/{id}', 'TeacherController@teacherCvListId');
Route::get('adminSecret/teacher/cv/delete/{id}', 'TeacherController@deleteTeacherCv');

Route::get('/adminSecret/talent', function () {
    return view('admin.talent');
});
Route::post('adminSecret/talent/add', 'TalentController@addTalent');
Route::get('adminSecret/talent/list', 'TalentController@talentList');
Route::get('adminSecret/talent/delete/{id}', 'TalentController@deleteTalent');

Route::get('/adminSecret/gallery', function () {
    return view('admin.gallery');
});
Route::post('adminSecret/gallery/add', 'GalleryController@addGallery');
Route::get('adminSecret/gallery/list', 'GalleryController@galleryList');
Route::get('adminSecret/gallery/delete/{id}', 'GalleryController@deleteGallery');

Route::get('/adminSecret/notification', function () {
    return view('admin.notification');
});
Route::post('adminSecret/notification/add', 'notificationController@addNotification');
Route::get('adminSecret/notification/list', 'notificationController@notificationList');
Route::get('adminSecret/notification/delete/{id}', 'notificationController@deleteNotification');

Route::get('/adminSecret/learn', function () {
    return view('admin.learn');
});

Route::post('adminSecret/learn/add', 'LearnController@addlearn');
Route::get('adminSecret/learn/list', 'LearnController@learnList');
Route::get('adminSecret/learn/delete/{id}', 'LearnController@deletelearn');