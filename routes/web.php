<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutosController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\LlogaController;
use App\Http\Controllers\UsuarisController;
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
return view('inici');
});
Route::group(['middleware' => 'auth'], function(){
Route::get('/dashboard', function () {
return view('dashboard');
})->name('dashboard');
Route::resource('autos', AutosController::class);
Route::resource('clients', ClientsController::class);
Route::resource('llogas', LlogaController::class);
Route::resource('usuaris', UsuarisController::class);
});

Route::middleware('auth')->group(function () {
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';

