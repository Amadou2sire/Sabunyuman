<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\VideosController;
use App\Models\Faq;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SouscriptionController;

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



//Category Routes
Route::get('/category/all',[CategoryController::class,'AllCat'])->name('all.category');
Route::post('/category/add',[CategoryController::class,'AddCat'])->name('store.category');
Route::get('/category/edit/{id}',[CategoryController::class,'Edit']);
Route::post('/category/update/{id}',[CategoryController::class,'update']);
Route::get('/category/delete/{id}',[CategoryController::class,'Delete']);

//Brand Routes
Route::get('/brand/all',[BrandController::class,'AllBrand'])->name('all.brand');
Route::post('/brand/add',[BrandController::class,'StoreBrand'])->name('store.brand');
Route::post('/brand/update/{id}',[BrandController::class,'Update']);
Route::get('/brand/edit/{id}',[BrandController::class,'Edit']);
Route::get('/brand/delete/{id}',[BrandController::class,'Delete']);


//Brand Routes
Route::get('/multi/image',[BrandController::class,'Multipic'])->name('multi.image');
Route::post('/multi/image',[BrandController::class,'StoreImage'])->name('store.image');


//log out
Route::get('/user/logout',[BrandController::class,'Logout'])->name('user.logout');

//Souscription
Route::get('/souscription/all',[SouscriptionController::class,'AllSouscription'])->name('all.souscription');
Route::post('/souscription/add',[SouscriptionController::class,'StoreSouscription'])->name('store.souscription');
Route::post('/souscription/update/{id}',[SouscriptionController::class,'Update']);
Route::get('/souscription/edit/{id}',[SouscriptionController::class,'Edit']);
Route::get('/souscription/delete/{id}',[SouscriptionController::class,'Delete']);

Route::get('/souscription/add_product', function () {
    return view('admin.souscription.addproduct');
});

//FAQ
Route::get('/faq/all',[FaqController::class,'AllFaq'])->name('all.faq');
Route::post('/faq/add',[FaqController::class,'StoreFaq'])->name('store.faq');
Route::post('/faq/update/{id}',[FaqController::class,'Update']);
Route::get('/faq/edit/{id}',[FaqController::class,'Edit']);
Route::get('/faq/delete/{id}',[FaqController::class,'Delete']);
Route::get('/faq/add_faq', function () {
    return view('admin.faq.addfaq');
});

//Banner
Route::get('/banner/all',[BannerController::class,'AllBanner'])->name('all.banner');
Route::post('/banner/add',[BannerController::class,'StoreBanner'])->name('store.banner');
Route::post('/banner/update/{id}',[BannerController::class,'Update']);
Route::get('/banner/edit/{id}',[BannerController::class,'Edit']);
Route::get('/banner/delete/{id}',[BannerController::class,'Delete']);
Route::get('/banner/add_banner', function () {
    return view('admin.banner.addbanner');
});

//video
Route::get('/video/all',[VideosController::class,'AllVideo'])->name('all.video');
Route::post('/video/add',[VideosController::class,'StoreVideo'])->name('store.video');
Route::post('/video/update/{id}',[VideosController::class,'Update']);
Route::get('/video/edit/{id}',[VideosController::class,'Edit']);
Route::get('/video/delete/{id}',[VideosController::class,'Delete']);
Route::get('/video/add_video', function () {
    return view('admin.video.addvideo');
});





Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard', function () {
        // $users= User::all();
        // $users= DB::table('users')-> get();
        return view('admin.index');
    })->name('dashboard');

    Route::get('/', function () {
        return view('admin.index');
    });
});
