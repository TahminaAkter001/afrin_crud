<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\OrganizerController;


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


Route::group(['prefix' => 'admin'], function () {

Route::get('/organizer/list',[OrganizerController::class,'list'])->name('organizer.list');
Route::get('/organizer/form',[OrganizerController::class,'form'])->name('organizer.form');
Route::post('/organizer/store',[OrganizerController::class,'store'])->name('organizer.store');
Route::get('/organizer/view/{id}', [OrganizerController::class,'view'])->name('organizer.view');
Route::get('/organizer/edit/{id}',[OrganizerController::class,'edit'])->name('organizer.edit');
Route::get('/organizer/delete/{id}',[OrganizerController::class,'delete'])->name('organizer.delete');
Route::put('/organizer/update/{id}', [OrganizerController::class, 'update'])->name('organizer.update');

});

