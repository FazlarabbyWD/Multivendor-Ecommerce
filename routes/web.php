<?php

use Illuminate\Support\Facades\Route;;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Vendor\VendorController;
use App\Http\Controllers\User\UserController;


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
    return view('frontend.index');
});

////////User Route\\\\\\\\\

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard',[UserController::class,'index'])->name('user.dashboard');
    Route::post('/dashboard/user/update',[UserController::class,'updateUser'])->name('user.update');
    Route::post('/dashboard/user/logout',[UserController::class,'userLogout'])->name('user.logout');

});


//////////Route For Admin\\\\\\\\\
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('admin/dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::post('admin/logout',[AdminController::class,'logout'])->name('admin.logout');
    Route::get('admin/profile',[AdminController::class,'profile'])->name('admin.profile');
    Route::post('admin/update/profile',[AdminController::class,'updateProfile'])->name('admin.update.profile');
    Route::get('admin/change/password',[AdminController::class,'changePassword'])->name('admin.change.password');
    Route::post('admin/update/password',[AdminController::class,'updatePassword'])->name('admin.update.password');
});

Route::get('admin/login',[AdminController::class,'login'])->name('admin.login');



////////Route For Vendor\\\\\\\\\\
Route::middleware(['auth','role:vendor'])->group(function(){
    Route::get('vendor/dashboard',[VendorController::class,'index'])->name('vendor.dashboard');
    Route::post('vendor/logout',[VendorController::class,'logout'])->name('vendor.logout');
    Route::get('vendor/profile',[VendorController::class,'profile'])->name('vendor.profile');
    Route::post('vendor/update/profile',[VendorController::class,'updateProfile'])->name('vendor.update.profile');
    Route::get('vendor/change/password',[VendorController::class,'changePassword'])->name('vendor.change.password');
    Route::post('vendor/update/password',[VendorController::class,'updatePassword'])->name('vendor.update.password');
});

Route::get('vendor/login',[VendorController::class,'login'])->name('vendor.login');

/////// Front End\\\\\\
Route::get('front/dashboard',[AdminController::class,'view']);

require __DIR__.'/auth.php';
