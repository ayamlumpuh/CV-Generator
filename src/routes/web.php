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

Route::get('/', function () {
    return view ("cv::index");
});
Route::get('datapribadi', function () {
    return view ("cv::datapribadi");
});
Route::get('edukasi', function () {
    return view ("cv::edukasi");
});
Route::get('fotoupload', function () {
    return view ("cv::fotoupload");
});
Route::get('print', function () {
    return view ("cv::print");
});
Route::get('riwayatpekerjaan', function () {
    return view ("cv::riwayatpekerjaan");
});
Route::get('skill', function () {
    return view ("cv::skill");
});
Route::get('upload', function () {
    return view ("cv::upload");
});