<?php

use App\Models\Role;
use App\Models\User;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DrinksController;
use App\Http\Controllers\MarkerController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\GetApiDataController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(PostController::class)->middleware(['auth', 'verified'])->name('posts.')->group(function () {
    Route::get('/blog', 'index')->name('index');
    Route::post('/blog', 'store')->name('store');
    Route::put('/blog/{post}', 'update')->name('update');
    Route::delete('/blog/{post}', 'destroy')->name('destroy');
});

Route::controller(CommentController::class)->middleware(['auth', 'verified'])->name('comments.')->group(function () {
    Route::post('/comment', 'store')->name('store');
    Route::delete('/{comment}', 'destroy')->name('destroy');
});
Route::resource('/products', ProductController::class);
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::get('/add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');

Route::get('/cart', [ProductController::class, 'cart'])->name('cart');
Route::post('/update-cart/{id}',[ProductController::class, 'updateCart'])->name('update.cart');
Route::get('/remove-from-cart/{id}', [ProductController::class, 'removeFromCart'])->name('remove.from.cart');

Route::middleware(['auth', 'verified'])->prefix('checkout')->name('checkout.')->group(function () {
    Route::get('/', [CheckoutController::class, 'index'])->name('index');
    Route::post('/sessions', [CheckoutController::class, 'checkout'])->name('checkout');
    Route::get('/success', [CheckoutController::class, 'success'])->name('success');
    Route::get('/cancel', [CheckoutController::class, 'cancel'])->name('cancel');
});

Route::resource('drinks', DrinksController::class);
Route::get('/makeup', [GetApiDataController::class, 'makeup'])->name('makeup');
Route::get('/beyonce', [GetApiDataController::class, 'beyonce'])->name('beyonce');
Route::get('/taylor', [GetApiDataController::class, 'taylor'])->name('taylor');
Route::get('/records', [GetApiDataController::class, 'records'])->name('records');

Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/weather', [WeatherController::class, 'getWeather']);

Route::get('/markers', [MarkerController::class, 'index'])->name('markers.index');
Route::get('/markers/create', [MarkerController::class, 'create'])->name('markers.create');
Route::post('/markers', [MarkerController::class, 'store'])->name('markers.store');
Route::get('/markers/{id}/edit', [MarkerController::class, 'edit'])->name('markers.edit');
Route::put('/markers/{id}', [MarkerController::class, 'update'])->name('markers.update');
Route::delete('/markers/{id}', [MarkerController::class, 'destroy'])->name('markers.destroy');

require __DIR__.'/auth.php';
