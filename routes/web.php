<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\redirectController;
use App\Http\Controllers\maincontroller;
use App\Http\Controllers\adminController;

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

//Routes for users not logged on
Route::get('/home', [redirectController::class,'index']);
Route::get('/about', [maincontroller::class,'about']);
Route::get('/contact', [maincontroller::class,'contact']);
Route::get('/booking', [maincontroller::class,'book']);
Route::get('/booking/{name}', [maincontroller::class,'categoryBooking']);

Route::get('/gallery', [maincontroller::class,'gallery']);

Route::get('/', [redirectController::class,'index']);

//Middleware and route for agents controlled area 
Route::group(['middleware' => ['auth','role:agent'] ], function () {
    Route::get('/addHome', [maincontroller::class,'addHome']);
    Route::post('/addApartment', [maincontroller::class,'addApartment']);
    Route::get('/apartment-details/{id}', [maincontroller::class,'Details']);
    Route::post('/saveBooking', [maincontroller::class,'SaveBook']);
    Route::get('/shortlist', [maincontroller::class,'allShortlist']);
});

// routes and middleware for signed in user area
Route::group(['middleware' => ['auth' ] ], function () { 
    Route::get('/apartment-details/{id}', [maincontroller::class,'Details']);
    Route::post('/saveBooking', [maincontroller::class,'SaveBook']); 
    Route::get('/addFavourite/{id}', [maincontroller::class,'addFavourite']); 
    Route::get('/myFavourite', [maincontroller::class,'myFavourite']); 
    // 
    Route::get('/removeFavourite/{id}', [maincontroller::class,'removeFavourite']); 
});

// routes for admin user controlled area
Route::group(['middleware' => ['auth','role:admin'] ], function () {
    Route::get('/admin/dashboard', [adminController::class,'index']);
    Route::get('/admin/gallery', [adminController::class,'gall']);
    Route::post('/admin/uploadGallery', [adminController::class,'uploadGallery']);
    Route::get('/admin/deleteGallery/{id}', [adminController::class,'deleteGallery']);
    Route::get('/admin/users', [adminController::class,'getUsers']);
    Route::get('/admin/deleteUser/{id}', [adminController::class,'deleteUser']);
    Route::get('/admin/category', [adminController::class,'getCategory']);
    Route::post('/admin/addCategory', [adminController::class,'addCategory']);
    Route::get('/admin/deleteCategory/{id}', [adminController::class,'deleteCategory']);
    Route::get('/admin/booking', [adminController::class,'getBooking']);
    Route::get('/admin/apartment', [adminController::class,'getApartment']);
    ROute::post('/admin/apartment/approve',[admincontroller::class,'updateApproval'])->name("apartment.approve");
    ROute::post('/admin/apartment/status',[admincontroller::class,'updateStatus'])->name("apartment.status");
    Route::get('/admin/settings', [adminController::class,'Settings']);
    Route::post('/admin/saveSettings', [adminController::class,'saveSettings']);
    // Route::get('/admin/dashboard', function () {
    //     return view('/admin/dashboard');
    // })->name('admin.dashboard');
    // uploadGallery saveSettings
});

Route::get('/logout', function () {
    if(Auth::user())
    {
        Auth::logout();
        return Redirect("/");
    }
});

require __DIR__.'/auth.php';
