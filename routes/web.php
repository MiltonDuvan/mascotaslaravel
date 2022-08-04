<?php
use App\Http\Controllers\MascotaController;
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

Route::get('/mascotas/pdf',[App\Http\Controllers\MascotaController::class, 'pdf'])->name('mascotas.pdf');

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/mascotas',MascotaController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
