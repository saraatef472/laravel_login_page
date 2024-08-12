<?php
use App\Http\Controllers\user\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('pages.welcome');
});
Auth::routes(['verify' => true]);
Route::middleware('verified')->group(function(){
  Route::get('user/profile',[ProfileController::class,'index'])->name('user.profile');
  Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});