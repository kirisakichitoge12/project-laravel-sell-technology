<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
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

Route::get('/laravelold', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('admin/pages/dssanpham/product');
});





Route::get('/', [PageController::class, 'pageshop'])->name('pageshop');
Route::get('shop', [PageController::class, 'pageshop'])->name('pageshop');
Route::get("chi-tiet-san-pham/{id}",[Pagecontroller::class, 'getchitietsanpham'])->name('chitietsanpham');
Route::get("dang-nhap",[Pagecontroller::class, 'getdangnhap'])->name('dangnhap');
Route::post("dang-nhap",[Pagecontroller::class, 'postdangnhap']);
Route::get("dang-ki",[Pagecontroller::class, 'getdangki'])->name('dangki');
Route::post("dang-ki",[Pagecontroller::class, 'postdangki']);
Route::get("dang-xuat",[AuthController::class, 'getDangXuat'])->name('dangxuat');
Route::get("xac-nhan",[Pagecontroller::class, 'getxacnhanMail']);
Route::post("xac-nhan",[Pagecontroller::class, 'sendMail']);
Route::get("gio-hang-cua-ban",[Pagecontroller::class, 'getgiohang'])->name('pagegiohang');
Route::get("them-vao-gio-hang/{id}",[Pagecontroller::class, 'getthemgiohang'])->name('themvaogiohang');
Route::post("cap-nhat-gio-hang",[Pagecontroller::class, 'getcapnhatgiohang'])->name('capnhatgiohang');
Route::get("xoa-san-pham/{id}",[Pagecontroller::class, 'getxoasanpham']);
Route::get("danh-muc/{id}",[Pagecontroller::class, 'getdanhmuc']);
Route::get("tim-kiem",[Pagecontroller::class, 'gettimkiem']);
Route::get("profile",[Pagecontroller::class, 'getthongtin'])->name('profile');
Route::get("trang-thai-don-hang",[Pagecontroller::class, 'getvanchuyen'])->name('trangthaidonhang');;
Route::post("profile",[Pagecontroller::class, 'postcapnhatuser']);
Route::get("thanhtoan",[Pagecontroller::class, 'getthanhtoan']);
Route::post("dathang",[Pagecontroller::class, 'postdathang']);


//admin


Route::get('dang-nhap-admin',[Admincontroller::class,'getdangnhapadmin'])->name('dangnhapadmin');
Route::post('dang-nhap-admin',[Admincontroller::class,'postdangnhapadmin']);
Route::get('dang-xuat-admin',[Admincontroller::class,'getdangxuat'])->name('dangxuatadmin');

Route::group(['prefix'=> 'admin','middleware' => 'Adminlogin'], function () {
    Route::get('dashboard',[Admincontroller::class,'getdashboard'])->name('getdashboard');
Route::group(['prefix'=> 'sanpham'], function () {
    Route::get('danh-sach-san-pham',[AdminController::class,'getproducts'])->name('danhsachsanpham');
    Route::get('themsanpham',[AdminController::class,'getthemsanpham'])->name('themsanpham');
    Route::post('themsanpham',[AdminController::class,'addproducts']);
    Route::get('suasanpham/{id}',[AdminController::class,'geteditproducts'])->name('suasanpham');
    Route::post('suasanpham/{id}',[AdminController::class,'posteditproducts']);
    Route::get('xoasanpham/{id}',[AdminController::class,'deleteproducts'])->name('xoaproducts');
    });
    Route::group(['prefix'=> 'user'], function () {
        Route::get('danh-sach-nguoi-dung',[Admincontroller::class,'getuser'])->name('danhsachnguoidung');
        Route::post('danh-sach-nguoi-dung',[Admincontroller::class,'poststatus']);
        });
        Route::group(['prefix'=> 'customer'], function () {
            Route::get('danh-sach-khach-hang',[Admincontroller::class,'getkhachhang'])->name('danhsachkhachhang');
            Route::get('xoa/{id}',[Admincontroller::class,'xoakhachhang'])->name('xoakhachhang');
            });
        Route::group(['prefix'=> 'bills'], function () {
            Route::get('danh-sach-don-hang',[Admincontroller::class,'getbills'])->name('danhsachdon');
            Route::get('capnhatdonhang/{id}',[Admincontroller::class,'geteditbill'])->name('capnhatdonhang');
            Route::post('capnhatdonhang/{id}',[Admincontroller::class,'posteditbill']);
            });
});

