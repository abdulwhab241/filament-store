<?php

use App\Http\Controllers\ElectricController;
use App\Http\Controllers\ElectronicController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\MedicalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', [StaticController::class, 'index']) -> name('home.index');
Route::get('/call', [StaticController::class, 'call']) -> name('home.call');
Route::resource('electrics', ElectricController::class);
Route::resource('electronics', ElectronicController::class);
Route::resource('houses', HouseController::class);
Route::resource('medicals', MedicalController::class);

/*
Route::get('/electric', [StaticController::class, 'electric']) -> name('home.electric');
Route::get('/electronic', [StaticController::class, 'electronic']) -> name('home.electronic');
Route::get('/house', [StaticController::class, 'house']) -> name('home.house');
Route::get('/medical', [StaticController::class, 'medical']) -> name('home.medical');
Route::get('/modern', [StaticController::class, 'modern']) -> name('home.modern');
*/


/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/hash', function () {
    return bcrypt('admin');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
