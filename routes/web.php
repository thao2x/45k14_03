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

// Route::get('/', function () {
//     return view('partner.shares.kipso');
// });

// Route::group(['prefix' => '/admin'], function() {
//     Route::group(['prefix' => '/admin-loai-san-pham'], function() {
//         Route::get('/index', [\App\Http\Controllers\AdminLoaiSanPhamController::class, 'index']);
//         Route::post('/store', [\App\Http\Controllers\AdminLoaiSanPhamController::class, 'store']);
//         Route::get('/data', [\App\Http\Controllers\AdminLoaiSanPhamController::class, 'getData']);
//         Route::get('/doi-trang-thai/{id}', [\App\Http\Controllers\AdminLoaiSanPhamController::class, 'doiTrangThai']);
//         Route::get('/delete/{id}', [\App\Http\Controllers\AdminLoaiSanPhamController::class, 'destroy']);
//         Route::get('/edit/{id}', [\App\Http\Controllers\AdminLoaiSanPhamController::class, 'edit']);
//         Route::post('/update', [\App\Http\Controllers\AdminLoaiSanPhamController::class, 'update']);
//     });
// });

// Route::group(['prefix' => '/agent'], function() {
//     Route::group(['prefix' => '/san-pham'], function() {
//         Route::get('/index', [\App\Http\Controllers\AgentSanPhamController::class, 'index']);
//         Route::post('/index', [\App\Http\Controllers\AgentSanPhamController::class, 'store']);
//         Route::get('/list', [\App\Http\Controllers\AgentSanPhamController::class, 'list']);
//         Route::get('/doi-trang-thai/{id}', [\App\Http\Controllers\AgentSanPhamController::class, 'doiTrangThai']);
//         Route::get('/delete/{id}', [\App\Http\Controllers\AgentSanPhamController::class, 'destroy']);
//         Route::get('/edit/{id}', [\App\Http\Controllers\AgentSanPhamController::class, 'edit']);
//         Route::post('/update', [\App\Http\Controllers\AgentSanPhamController::class, 'update']);
//     });
// });

// Route::get('/admin/register', [\App\Http\Controllers\AdminController::class, 'register']);
// Route::post('/admin/register', [\App\Http\Controllers\AdminController::class, 'registerAdmin']);
// Route::get('/admin/login', [\App\Http\Controllers\AdminController::class, 'login']);
// Route::post('/admin/login', [\App\Http\Controllers\AdminController::class, 'loginAdmin']);
// Route::get('/admin/active/{hash}', [\App\Http\Controllers\AdminController::class, 'active']);

// Route::get('/agent/register', [\App\Http\Controllers\AgentController::class, 'register']);
// Route::post('/agent/register', [\App\Http\Controllers\AgentController::class, 'registerAction']);
// Route::get('/agent/login', [\App\Http\Controllers\AgentController::class, 'login']);
// Route::post('/agent/login', [\App\Http\Controllers\AgentController::class, 'loginAction']);
// Route::get('/agent/active/{hash}', [\App\Http\Controllers\AgentController::class, 'active']);

Route::get('/', [\App\Http\Controllers\HomePageController::class, 'index']);
Route::get('/course', [\App\Http\Controllers\HomePageController::class, 'course']);
Route::get('/pricing', [\App\Http\Controllers\HomePageController::class, 'pricing']);
Route::get('/contact', [\App\Http\Controllers\HomePageController::class, 'contact']);
Route::get('/faq', [\App\Http\Controllers\HomePageController::class, 'faq']);
Route::get('/course-details-n1', [\App\Http\Controllers\HomePageController::class, 'courseDetailsN1']);
Route::get('/course-details-n2', [\App\Http\Controllers\HomePageController::class, 'courseDetailsN2']);
Route::get('/course-details-n3', [\App\Http\Controllers\HomePageController::class, 'courseDetailsN3']);
Route::get('/course-details-n4', [\App\Http\Controllers\HomePageController::class, 'courseDetailsN4']);
Route::get('/course-details-n5', [\App\Http\Controllers\HomePageController::class, 'courseDetailsN5']);
Route::get('/create-course', [\App\Http\Controllers\AddCourseController::class, 'createCourse']);
Route::post('/create-course', [\App\Http\Controllers\AddCourseController::class, 'storeCourse']);


Route::get('/login', [\App\Http\Controllers\CutomerController::class, 'login']);
Route::post('/login', [\App\Http\Controllers\CutomerController::class, 'loginAction']);
Route::get('/register', [\App\Http\Controllers\CutomerController::class, 'register']);
Route::post('/register', [\App\Http\Controllers\CutomerController::class, 'registerAction']);
Route::get('/logout', [\App\Http\Controllers\CutomerController::class, 'logout']);
