<?php

use App\Http\Controllers\crud\CrudController;
use Illuminate\Routing\RouteRegistrar;
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

Route::get('/', function () {
    return view('welcome');
});

define('pagination',5);

Route::get('/create',[CrudController::class,"create"]);
Route::post('/store',[CrudController::class,"insert"])->name('ajax.insert');
Route::get('/alloffer',[CrudController::class,"alloffer"]);
Route::post('/delete',[CrudController::class,"delete"])->name('ajax.delete');
Route::get('/edit/{id}',[CrudController::class,"edit"])->name("ajax.edit");
Route::post('/update',[CrudController::class,"update"])->name('updateoffer');

Route::get('/The_offer_is_not_activated',[CrudController::class,"The_offer_is_not_activated"]);