<?php

use App\Http\Controllers\Admin\CentreController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\YearController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(FrontendController::class)->group(function(){
    Route::get('/','index');
    Route::get('/home','index');
});

Auth::routes();

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function (){

    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');


    Route::controller(YearController::class)->group(function(){
        route::get('year','index');
        route::post('insert-session','insert');
        route::get('delete-session/{id}','destroy');
    });

    Route::controller(CentreController::class)->group(function(){
        route::get('centre_examen','index');
        route::post('add-centre-examen','insert');
        route::get('delete-centre/{id}','destroy');
    });
});
