<?php

use App\Http\Controllers\AdminController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [AdminController::class, 'index'])->name('admin.index');


Route::middleware(['auth:sanctum', 'verified', 'is_user'])->get('user/dashboard', function () {
    return view('user.dashboard');
})->name('user.dashboard');

Route::middleware(['auth:sanctum', 'verified', 'is_admin'])->get('admin/dashboard', function () {
    return view('admin.dashboard');
    // return "you are admin" ;

})->name('admin.dashboard');
