<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// new routes 

// Categories 
Route::resource('categories', CategoryController::class);

// Products

// Display a listing of the products
Route::get('/items', [ProductController::class, 'index'])->name('products.index');

// Show the form for creating a new product
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

// Store a newly created product in storage
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

// Display the specified product
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

// Show the form for editing the specified product
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');

// Update the specified product in storage
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::patch('/products/{product}', [ProductController::class, 'update']);


Route::get('/orders', function () {
    dd ('orders');
});


require __DIR__.'/auth.php';
