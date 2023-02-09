<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/provaShow', function () {
    $user = Auth::user();
    return view('users.show', compact('user'));
});

// Route::prefix('dashboard')->name('dashboard.')->middleware('auth')->group(function () {
Route::prefix('dashboard')->name('dashboard.')->group(function () {

    Route::view('/', 'index')->name('dashboard');
    Route::resource('users', UserController::class);
    Route::get('/test', function () {
        app()->setLocale('en');
        dd(app()->getLocale());
        // dd('prova');
    });

    // GET|HEAD        dashboard/users ...........  .. dashboard.users.index › UserController@index
    // POST            dashboard/users ............... dashboard.users.store › UserController@store
    // GET|HEAD        dashboard/users/create ........ dashboard.users.create › UserController@create
    // GET|HEAD        dashboard/users/{user} ........ dashboard.users.show › UserController@show
    // PUT|PATCH       dashboard/users/{user} ........ dashboard.users.update › UserController@update
    // DELETE          dashboard/users/{user} ........ dashboard.users.destroy › UserController@destroy
    // GET|HEAD        dashboard/users/{user}/edit ... dashboard.users.edit › UserController@edit

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::resource('cars', CarController::class);

require __DIR__ . '/auth.php';


Route::get('/test', function () {
    return view('index');
});
