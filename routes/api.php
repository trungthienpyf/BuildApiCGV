<?php

use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\HoaDonController;
use App\Http\Controllers\Api\KhachHangController;
use App\Http\Controllers\Api\PhimController;

use App\Http\Controllers\Api\PhongController;
use App\Http\Controllers\Api\TheLoaiPhimController;
use App\Http\Controllers\Api\VeController;
use App\Http\Controllers\Api\GheController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Api\CTLichChieuController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResources([
    'admin'=> AdminController::class,
    'khachHang'=> KhachHangController::class,
    'hoaDon'=> HoaDonController::class,
    'theLoaiPhim'=> TheLoaiPhimController::class,
    'phim'=> PhimController::class,
    'phong'=> PhongController::class,
    'ct_lc'=> CTLichChieuController::class,
    'ghe'=> GheController::class,
    've'=> VeController::class,


]);
