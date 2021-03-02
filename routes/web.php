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
use App\Http\Controllers\ResearchController;
Route::get('researches/export/', [ResearchController::class, 'excel_export'])->name('researches.excel_export');
Route::resource('researches', ResearchController::class);
Route::get('/', function () {
    return redirect(route('researches.index'));
});



//Route::resource('contacts','App\Http\Controllers\ContactController');





