<?php


use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HasilPemantauanController;
use App\Http\Controllers\Admin\TitikPemantauanController;
use App\Http\Controllers\Admin\StoretController;
use App\Http\Controllers\PetaFEController;
use App\Http\Controllers\DataFEController;
use App\Http\Controllers\App\BerandaController;
use App\Http\Controllers\app\DataPemantauanController;
use App\Http\Controllers\app\PetaPemantauanController;
use App\Http\Controllers\Auth\ForgotPasswordController;
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

Route::get('/', function () {
    return view('pages.app.beranda');
});
Route::get('/test', function () {
    return view('pages.app.dataa');
});

route::prefix('beranda')
    ->namespace('Beranda')
    ->group(function () {
        Route::get('/', [BerandaController::class, 'index'])
            ->name('beranda');
    });
Route::get('/peta', [PetaPemantauanController::class, 'index'])
    ->name('peta');
Route::get('/data', [DataPemantauanController::class, 'index'])
    ->name('data');


route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard');
        Route::get('/reset', [ForgotPasswordController::class, 'index'])
            ->name('reset password');
        Route::get('/storet', [StoretController::class, 'index'])
            ->name('Kalkulator STORET');
        Route::resource('kelola-titik', '\App\Http\Controllers\Admin\TitikPemantauanController');
        Route::resource('kelola-hasil', '\App\Http\Controllers\Admin\HasilPemantauanController');
        Route::resource('profile', '\App\Http\Controllers\Admin\ProfileController');
        Route::post('/kelola-titik/storet', [TitikPemantauanController::class, 'storet'])
            ->name('update-storet');
    });

Route::get('titik/json', [TitikPemantauanController::class, 'titik']);
Route::get('titik/info/{id}', [TitikPemantauanController::class, 'info']);
Auth::routes([
    'verify' => true
]);
