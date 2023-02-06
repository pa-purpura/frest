<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});



// Route::prefix('dashboard')->name('dashboard.')->middleware('auth')->group(function () {
Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::view('/','index')->name('dashboard');

    Route::get('/test', function () {
        app()->setLocale('en');
        dd(app()->getLocale());
        // dd('prova');
    });
    // GET|HEAD        4dmin ........................admin.dashboard
    // GET|HEAD        4dmin/User ...................admin.user.index › UserController@index
    // POST            4dmin/User ...................admin.user.store › UserController@store
    // GET|HEAD        4dmin/User/create ............admin.user.create › UserController@create
    // GET|HEAD        4dmin/User/{User} ............admin.user.show › UserController@show
    // PUT|PATCH       4dmin/User/{User} ............admin.user.update › UserController@update
    // DELETE          4dmin/User/{User} ............admin.user.destroy › UserController@destroy
    // GET|HEAD        4dmin/User/{User}/edit .......admin.user.edit › UserController@edit

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::resource('cars', CarController::class);

require __DIR__.'/auth.php';


Route::get('/test', function () {
    return view('index');
});
