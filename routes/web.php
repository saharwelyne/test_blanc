<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SubjectController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('{any}', function () {
    return view('welcome');
})->where('any','.*');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/user_subject', [SubjectController::class, 'getUserSubject']);
