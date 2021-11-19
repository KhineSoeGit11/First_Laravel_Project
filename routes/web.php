<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UiController;
use App\Http\Controllers\admin\AdminDashController;
use App\Http\Controllers\admin\CrudController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\admin\DailyReportController;



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

Route::get('/',[UiController::class, 'index']);


Route::group(['middleware' => ['auth','isAdmin']], function(){
    Route::get('/admin',[AdminDashController::class, 'index']);

    //User CRUD
    Route::resource('user_crud',CrudController::class);
    //Report
    Route::resource('/reports',ReportController::class);

    Route::get('/daily_reports',[DailyReportController::class, 'index']);
    Route::post('/daily_reports/{id}/delete',[DailyReportController::class, 'delete']);

    //Search
    Route::get('/search_reports',[DailyReportController::class, 'search']);
});

Route::group(['middleware' => ['auth','isUser']], function(){
    Route::resource('/reports',ReportController::class);
});

Auth::routes();

Route::get('/user', [App\Http\Controllers\HomeController::class, 'index'])->name('user');
