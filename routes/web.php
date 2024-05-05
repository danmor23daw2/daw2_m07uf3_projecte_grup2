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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard_basic', function () {
        return view('dashboard_basic');
    })->name('dashboard_basic');

    Route::get('autos/index_basic', 'App\Http\Controllers\AutosController@index_basic')->name('autos.index_basic');
    Route::get('autos/show_basic/{matricula_auto}', 'App\Http\Controllers\AutosController@show_basic')->name('autos.show_basic');
    Route::get('clients/index_basic', 'App\Http\Controllers\ClientsController@index_basic')->name('clients.index_basic');
    Route::get('clients/show_basic/{DNI_client}', 'App\Http\Controllers\ClientsController@show_basic')->name('clients.show_basic');
    Route::get('llogas/index_basic', 'App\Http\Controllers\LlogaController@index_basic')->name('llogas.index_basic');
    Route::get('llogas/show_basic/{matricula_auto}', 'App\Http\Controllers\LlogaController@show_basic')->name('llogas.show_basic');
    Route::get('usuaris/index_basic', 'App\Http\Controllers\UsuarisController@index_basic')->name('usuaris.index_basic');
    Route::get('usuaris/show_basic/{email}', 'App\Http\Controllers\UsuarisController@show_basic')->name('usuaris.show_basic');
});

Route::group(['middleware' => 'adminAuth'], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('autos', AutosController::class);
    Route::resource('clients', ClientsController::class);
    Route::resource('llogas', LlogaController::class);
    Route::resource('usuaris', UsuarisController::class);

    Route::get('autos/generar-pdf/{matricula_auto}', 'App\Http\Controllers\AutosController@generarPDFAutos')->name('autos.generarPDFAutos');
    Route::get('clients/generar-pdf/{DNI_client}', 'App\Http\Controllers\ClientsController@generarPDFClient')->name('clients.generarPDFClient');
    Route::get('llogas/generar-pdf/{matricula_auto}', 'App\Http\Controllers\LlogaController@generarPDFLloga')->name('llogas.generarPDFLloga');
    Route::get('usuaris/generar-pdf/{email}', 'App\Http\Controllers\UsuarisController@generarPDFUsuari')->name('usuaris.generarPDFUsuari');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


