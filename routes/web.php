<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\PackagesController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/pricing', [HomeController::class, 'plans']);
Route::get('/packagesdetail', [PackagesController::class, 'packagesdetail'])->name('packagesdetail');
Route::get('/signup', [PackagesController::class, 'signup'])->name('signup');


Route::group(['middleware' => 'auth'], function () {
    /*verification routes*/
    Route::get('/email/verify', [VerificationController::class, 'show'])->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify')->middleware(['signed']);
    Route::post('/email/resend', [VerificationController::class, 'resend'])->name('verification.resend');
    //only verified account can access with this group
    Route::group(['middleware' => ['verified']], function() {
        /**
         * Dashboard Routes
         */
        Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
        //Event Management routes
        Route::post('/event/store', [UserController::class, 'store'])->name('event.store');
        Route::post('/event/edit', [EventController::class, 'updateEvent'])->name('event.update');
        Route::post('/event/prop', [UserController::class, 'propEvent'])->name('event.prop');
        Route::post('/event/update', [UserController::class, 'eventUpdate'])->name('event.update');
        Route::get('/event/delete/{id}', [UserController::class, 'deleteEvent'])->name('event.delete');
        //stripe Payment Routes
        Route::get('stripe', [StripePaymentController::class, 'stripe']);
        Route::post('stripe', [StripePaymentController::class, 'stripePost'])->name('stripe.post');

    });
});

//Admin Panel
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::namespace('Auth')->group(function(){
        //login route
        Route::get('login','AuthenticatedSessionController@create')->name('login');
        Route::post('login','AuthenticatedSessionController@store')->name('adminlogin');  
    });
    Route::middleware('admin')->group(function(){
        Route::get('/dashboard', [AdminController::class, 'dashboard']);
        Route::get('/users', [AdminController::class, 'users'])->name('users');
        Route::get('/add_packages', [AdminController::class, 'index']);
        Route::post('/add_packages', [AdminController::class, 'add_packages'])->name('add_packages');
        Route::get('/edit_package/{id}',[AdminController::class,'edit']);
        Route::post('/update_package/{id}',[AdminController::class,'update']);
        Route::get('/all_packages', [AdminController::class, 'packages'])->name('all_packages');
        Route::get('/delete_package/{id}',[AdminController::class,'delete']);
        Route::get('/display_packages', [AdminController::class, 'display']);
        
    });
    
}); 

// require __DIR__.'/admin_auth.php';
require __DIR__.'/auth.php';