<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\TaskController;

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
    return view('template.login');
});

Route::get('/authenticate', [UserController::class, 'authenticate']);

Route::get('/home', [PesertaController::class, 'home']);

Route::get('/dokumentasi', function () {
    return view('swagger.index');
});

Route::get('/peserta', [PesertaController::class, 'peserta']);
Route::get('/gettask/{id}', [TaskController::class, 'task']);

Route::post('/tambahPeserta', [PesertaController::class, 'tambahPeserta']);
Route::get('/deletePeserta/{id}', [PesertaController::class, 'deletePeserta']);
Route::post('/updatePeserta', [PesertaController::class, 'updatePeserta']);


Route::post('/tambahTask', [TaskController::class, 'tambahTask']);
Route::get('/deleteTask/{id}', [TaskController::class, 'deleteTask']);
Route::post('/updateTask', [TaskController::class, 'updateTask']);

// Route::get('/home', function () {
//     return view('template.home');
// });