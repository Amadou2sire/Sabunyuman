<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SouscriptionController;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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
