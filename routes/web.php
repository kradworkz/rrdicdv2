<?php

use Illuminate\Support\Facades\Route;
use Spatie\WelcomeNotification\WelcomesNewUsers;
use App\Http\Controllers\Auth\WelcomeController;

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
    if(!Auth::check()){
        return view('auth.login');
    }else{
        return redirect()->route('home');
    }
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['role:Administrator','auth'])->group(function () {
    Route::get('/dropdowns', 'DropdownController@index');
    Route::get('/institutions', 'InstitutionController@index');
    Route::get('/staffs', 'StaffController@index');
});

Route::prefix('request')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dropdowns/{classification}/{type}', 'DropdownController@lists');
        Route::get('/dropdown/{classification}/{type}/{keyword}', 'DropdownController@list');
        Route::post('/dropdown/store', 'DropdownController@store');

        Route::get('/institutions/{keyword}', 'InstitutionController@list');
        Route::get('/institution/list', 'InstitutionController@lists');
        Route::post('/institution/store', 'InstitutionController@store');

        Route::get('/staffs/{keyword}', 'StaffController@lists');
        Route::post('/staff/store', 'StaffController@store');
    });
});

Route::group(['middleware' => ['web', WelcomesNewUsers::class,]], function () {
    Route::get('welcome/{user}', [WelcomeController::class, 'showWelcomeForm'])->name('welcome');
    Route::post('welcome/{user}', [WelcomeController::class, 'savePassword']);
});
