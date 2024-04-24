<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\GalleriController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AksiNyataController;
use App\Http\Controllers\RencanaProgramController;

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

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('/auth', [LoginController::class, 'auth'])->name('auth');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');


Route::Resource('/data_tamu', TamuController::class);
route::get('/exportPdf_tamu', [TamuController::class, 'export_pdf'])->name('exportPdf_tamu');

Route::Resource('/gallery', GalleriController::class);

Route::Resource('/profil', ProfileController::class);

Route::Resource('dashboard', PostController::class);

Route::Resource('/video', VideoController::class);

Route::Resource('/rencanaProgram', RencanaProgramController::class);

Route::Resource('/aksiNyata', AksiNyataController::class);

