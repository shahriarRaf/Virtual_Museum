<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AuthManager;
use \App\Http\Controllers\Controller;
use \App\Http\Controllers\ImageController;
use \App\Http\Controllers\imageAdminController;
use App\Http\Controllers\AdminLoginController;
use GuzzleHttp\Middleware;

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

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/login',[AuthManager::class,'login'])->name('login');
Route::post('/login',[AuthManager::class,'loginPost'])->name('login.post');
Route::get('/registration',[AuthManager::class,'registration'])->name('registration');
Route::post('/registration',[AuthManager::class,'registrationPost'])->name('registration.post');
Route::get('/logout',[AuthManager::class,'logout'])->name('logout');

Route::group(['prefix'=> 'admin'],function(){
    Route::group(['middleware'=>'admin.guest'],function(){
        Route::get('/adminlogin',[AdminLoginController::class,'index'])->name('admin.login');
        Route::post('/authenticate',[AdminLoginController::class,'authenticate'])->name('admin.authenticate');
    });
    Route::group(['middleware'=>'admin.auth'],function(){
   Route::get('/admin/dashboard', [ImageAdminController::class, 'dashboard'])->name('admin.dashboard');
   Route::post('/admin/image/approve/{id}', [ImageAdminController::class, 'approveImage'])->name('admin.image.approve');
    Route::delete('/admin/image/delete/{id}', [ImageAdminController::class, 'deleteImage'])->name('admin.image.delete');
    Route::post('/admin/logout', [ImageAdminController::class, 'logout'])->name('admin.logout');


    });
});

Route::get('/gallery',[ImageController::class,'gallery'])->name('gallery');

Route::group(['middleware'=>'auth'],function(){

    Route::get('/sixTemple', [ImageController::class, 'showImages'])->name('sixTemple')->defaults('page', 'sixTemple');
    Route::get('/mahasthangarh', [ImageController::class, 'showImages'])->name('mahasthangarh')->defaults('page', 'mahasthangarh');
    Route::get('/mainnamatiRuins', [ImageController::class, 'showImages'])->name('mainnamatiRuins')->defaults('page', 'mainnamatiRuins');
    Route::get('/paharpurBuddhistMonastery', [ImageController::class, 'showImages'])->name('paharpurBuddhistMonastery')->defaults('page', 'paharpurBuddhistMonastery');
    Route::get('/wariBateshwar', [ImageController::class, 'showImages'])->name('wariBateshwar')->defaults('page', 'wariBateshwar');
    // Add routes for other pages similarly


    Route::post('/upload-image', [ImageController::class, 'uploadImage'])->name('upload.image');
    Route::delete('/delete-image/{id}', [ImageController::class, 'deleteImage'])->name('delete.image');
});



