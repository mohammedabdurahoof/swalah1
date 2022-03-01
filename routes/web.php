<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\excelController;
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

Route::get('/',[adminController::class, 'home'])->name('home');

Route::get('/dashboard',[adminController::class, 'dashboard'])->name('dashboard');

Route::get('/students',[adminController::class, 'students'])->name('students');

Route::post('/add student',[adminController::class, 'addStudents'])->name('add student');

Route::get('/delete/{student}',[adminController::class, 'delete'])->name('delete');

Route::get('/edit/{student}',[adminController::class, 'edit'])->name('edit');

Route::post('/update/{student}',[adminController::class, 'update'])->name('update');

Route::get('/select/{id}',[adminController::class, 'viewStudent'])->name('viewStudent');

//Account Details Routes

Route::get('/stationery',[adminController::class, 'stationery'])->name('stationery');
Route::get('/print',[adminController::class, 'print'])->name('print');
Route::get('/vachanam',[adminController::class, 'vachanam'])->name('vachanam');
Route::get('/bookfair',[adminController::class, 'bookfair'])->name('bookfair');
Route::get('/account',[adminController::class, 'account'])->name('account');
// Route::get('/getStudent/{adno}',[labController::class, 'getStudent'])->name('getStudent');
Route::get('/viewStudent',[adminController::class, 'viewStudent'])->name('viewStudent');
Route::post('/searchuser',[adminController::class, 'searchuser'])->name('searchuser');


Route::post('/addStationery',[adminController::class, 'addStationery'])->name('addStationery');
Route::post('/addprint',[adminController::class, 'addprint'])->name('addprint');
Route::post('/addvachanam',[adminController::class, 'addvachanam'])->name('addvachanam');
Route::post('/addbookfair',[adminController::class, 'addbookfair'])->name('addbookfair');
Route::post('/addaccount',[adminController::class, 'addaccount'])->name('addaccount');

Route::get('/printslip',[adminController::class, 'printSlip'])->name('printSlip');

//excel import

Route::post('import', [excelController::class, 'fileImport'])->name('import');
Route::post('importPrint', [excelController::class, 'importPrint'])->name('importPrint');
Route::post('exportPrint', [excelController::class, 'exportPrint'])->name('exportPrint');










Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
