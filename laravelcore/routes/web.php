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
Route::get('/adminSecret/login', 'AdminController@login');
Route::post('/login/admin', 'AdminController@loginAdmin');
Route::get('/teacher/attend/{product_id}', 'UserController@attend');
Route::get('/attend/p/{product_id}/{user_id}/{date}', 'UserController@attendp');
Route::get('/attend/a/{product_id}/{user_id}/{date}', 'UserController@attenda');
//search users
Route::get('adminSecret/class/att/user/find/{product_id}', 'UserController@findPage');
Route::post('adminSecret/class/att/find/list', 'UserController@findResult');

Route::get('/my/gallery/view', 'UserController@galleryView');
Route::post('/login/teacher', 'UserController@loginTeacher');
Route::post('user/form/register', 'UserController@registerExec');
Route::post('user/form/login', 'UserController@loginExec');
Route::get('/products', 'ProductController@productListUser');
Route::get('/product/details/{product_id}', 'ProductController@productDetails');
Route::get('/product/cart/add/{id}', 'UserController@productCartAdd');
Route::get('/product/cart/delete/{id}', 'UserController@productCartDelete');
Route::get('/product/cart/view', 'UserController@productCartView');
Route::get('/learns', 'LearnController@learnListUser');
Route::get('/noti', 'NotificationController@notificationListUser');
Route::get('/teachers', 'TeacherController@teacherListUser');
Route::get('/galleries', 'GalleryController@GalleryListUser');
//admin

Route::get('/adminSecret/user/gallery/{user_id}',"GalleryController@UserGallery");
Route::post('/adminSecret/gallery/user/add', 'GalleryController@addUserGallery');
Route::get('/adminSecret/gallery/user/list/{user_id}', 'GalleryController@galleryUserList');
Route::get('/adminSecret/gallery/user/delete/{id}', 'GalleryController@deleteUserGallery');



Route::get('/adminSecret', function () {
    session_start();
    if (isset($_SESSION["admin_id"])){

    }else{
        return redirect(url("/adminSecret/login"));
    }
    return view('admin.product');
});
Route::get('adminSecret/user/list', 'AdminController@userList');
Route::get('adminSecret/user/details/{id}', 'AdminController@userDetails');
Route::get('/adminSecret/product', function () {
    session_start();
    if (isset($_SESSION["admin_id"])){

    }else{
        return redirect(url("/adminSecret/login"));
    }
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
    session_start();
    if (isset($_SESSION["admin_id"])){

    }else{
        return redirect(url("/adminSecret/login"));
    }
    return view('admin.class');
});
Route::post('adminSecret/class/add', 'ProductController@addClass');
Route::get('adminSecret/class/list', 'ProductController@classList');
Route::get('adminSecret/class/delete/{id}', 'ProductController@deleteClass');

Route::get('/adminSecret/teacher', function () {
    session_start();
    if (isset($_SESSION["admin_id"])){

    }else{
        return redirect(url("/adminSecret/login"));
    }
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
Route::get('/teacher/details/{teacher_id}', 'TeacherController@teacherDetails');
Route::get('/adminSecret/talent', function () {
    session_start();
    if (isset($_SESSION["admin_id"])){

    }else{
        return redirect(url("/adminSecret/login"));
    }
    return view('admin.talent');
});
Route::post('adminSecret/talent/add', 'TalentController@addTalent');
Route::get('adminSecret/talent/list', 'TalentController@talentList');
Route::get('adminSecret/talent/delete/{id}', 'TalentController@deleteTalent');

Route::get('/adminSecret/gallery', function () {
    session_start();
    if (isset($_SESSION["admin_id"])){

    }else{
        return redirect(url("/adminSecret/login"));
    }
    return view('admin.gallery');
});
Route::post('adminSecret/gallery/add', 'GalleryController@addGallery');
Route::get('adminSecret/gallery/list', 'GalleryController@galleryList');
Route::get('adminSecret/gallery/delete/{id}', 'GalleryController@deleteGallery');

Route::get('/adminSecret/notification', function () {
    session_start();
    if (isset($_SESSION["admin_id"])){

    }else{
        return redirect(url("/adminSecret/login"));
    }
    return view('admin.notification');
});
Route::post('adminSecret/notification/add', 'NotificationController@addNotification');
Route::get('adminSecret/notification/list', 'NotificationController@notificationList');
Route::get('adminSecret/notification/delete/{id}', 'NotificationController@deleteNotification');
Route::get('/not/details/{not_id}', 'NotificationController@notDetails');
Route::get('/adminSecret/learn', function () {
    session_start();
    if (isset($_SESSION["admin_id"])){

    }else{
        return redirect(url("/adminSecret/login"));
    }
    return view('admin.learn');
});

Route::post('adminSecret/learn/add', 'LearnController@addlearn');
Route::get('adminSecret/learn/list', 'LearnController@learnList');
Route::get('adminSecret/learn/delete/{id}', 'LearnController@deletelearn');
Route::get('/learn/details/{learn_id}', 'LearnController@learnDetails');