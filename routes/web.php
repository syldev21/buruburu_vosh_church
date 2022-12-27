<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/get/member/list', [App\Http\Controllers\MemberController::class, 'getMemberList'])->name('member.list');
Route::post('/get/individual/member/details', [App\Http\Controllers\MemberController::class, 'getMemberDetails'])->name('member.details');
Route::post('/update/member/data', [App\Http\Controllers\MemberController::class, 'updateMemberDetails'])->name('member.update');
Route::delete('/delete/member/data/{member}', [App\Http\Controllers\MemberController::class, 'destroy'])->name('member.delete');
Route::post('/store/member/data', [App\Http\Controllers\MemberController::class, 'store'])->name('member.store');
