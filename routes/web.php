<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\EvenetController;
use App\Http\Controllers\FarmerController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\GanapController;
use App\Http\Controllers\ListController;





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
    if(Auth::check()) {
        return redirect()->route('admin.dashboard');
    }
    return redirect()->route('login');
});

// Grouped admin routes with a prefix
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    // Dashboard route
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    
    // Announcement route
    Route::get('/announcement', [AdminController::class, 'announcement'])->name('admin.announcement');

    //Events
    Route::get('/event', [AdminController::class, 'event'])->name('admin.event');
    

    
    // Notification route
    Route::get('/notification', [AdminController::class, 'notification'])->name('admin.notification');
    
    //
    Route::get('/transaction', [AdminController::class, 'transaction'])->name('admin.transaction');

    // Stock route
    Route::get('/stock', [AdminController::class, 'stock'])->name('admin.stock');
    
    // User route
    Route::get('/user', [AdminController::class, 'user'])->name('admin.user');

    //farmer
    Route::get('/farmer', [AdminController::class, 'farmer'])->name('admin.farmer');
    
    // Profile route
    Route::get('/profile', [AdminController::class, 'profile'])->name('admin.profile');
    
    // Setting route
    Route::get('/setting', [AdminController::class, 'setting'])->name('admin.setting');

    //farmer

    Route::get('/farmer', [AdminController::class, 'farmer'])->name('admin.farmer');
});



// Route for the Login Page
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Admin Dashboard route with 'auth' middleware to protect it
Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard')->middleware('auth');

// Logout route
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Event route for storing event data
Route::post('/events/store', [EvenetController::class, 'store'])->name('events.store');




// Farmer enrollment routes
Route::get('/users/create', [FarmerController::class, 'create'])->name('users.create');
Route::get('/admin/farmer', [FarmerController::class, 'index'])->name('admin.farmer');
Route::post('/farmers/farmer', [FarmerController::class, 'store'])->name('users.store');
Route::delete('/farmers/{farmer}', [FarmerController::class, 'destroy'])->name('farmer.destroy');
Route::get('/farmers/{farmer}/edit', [FarmerController::class, 'edit'])->name('users.edit');
Route::put('/farmers/{farmer}', [FarmerController::class, 'update'])->name('users.update');
Route::get('/users/view', [FarmerController::class, 'show'])->name('users.view');


// Stocks route for storing stock data
Route::post('/stocks/stock', [StockController::class, 'store'])->name('addStock');

Route::get('/admin/stock', [StockController::class, 'index'])->name('admin.stock');

Route::delete('/stocks/{stock}', [StockController::class, 'destroy'])->name('stock.destroy');

Route::get('/stocks/{stock}/edit', [StockController::class, 'edit'])->name('stock.edit');
Route::put('/stocks/{stock}', [StockController::class, 'update'])->name('stock.update');


//announcement route for storing and displaying

Route::get('/admin/announcement', [EvenetController::class, 'index'])->name('admin.announcement');

Route::post('/events/announcement', [EvenetController::class, 'store'])->name('events.store');

Route::delete('/events/{event}', [EvenetController::class, 'destroy'])->name('announcement.destroy');


Route::get('/announcement/{event}/edit', [EvenetController::class, 'edit'])->name('announcement.edit');

Route::put('/events/{event}', [EvenetController::class, 'update'])->name('events.update');
Route::get('/events/search', [EvenetController::class, 'search'])->name('events.search');

//routes for event

Route::get('/admin/event', [GanapController::class, 'index'])->name('admin.event');

Route::post('/ganap', [GanapController::class, 'store'])->name('event.store');
Route::get('/ganap/{ganap}/edit', [GanapController::class, 'edit'])->name('ganap.edit');
Route::put('/ganap/{ganap}', [GanapController::class, 'update'])->name('ganap.update');
Route::delete('/ganap/{ganap}', [GanapController::class, 'destroy'])->name('event.destroy');
Route::get('/search', [GanapController::class, 'search'])->name('ganaps.search');


//localization

Route::post('/locale/{locale}', [LocalizationController::class, 'setLang']);
Route::get('/locale/{language}', [LocalizationController::class, 'setLang'])->name('locale');


//Route for listing of farmers
Route::get('/farmer/list', [ListController::class, 'index'])->name('farmer.list');
Route::post('/farmer/list', [ListController::class, 'list'])->name('farmer.list');






