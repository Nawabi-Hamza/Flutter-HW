

<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\CheckAge;
use Illuminate\Support\Facades\Route;

Route::get('/hello',function(){
    return '<h1>Hello Laravel</h1>';
});



Route::get('/about',function(){
    return '<h1>Hi Zaki Hassani</h1> <p>This page and is created by <b>Zaki</b></p>';
});

Route::get('/sum/{a}/{b}',function(int $a , int $b){

    return "Sum Of Two Number is :" . "<b>" . $a+$b ."</b>";
});


Route::controller(PageController::class)->group(function(){
    Route::get('/home','home');
    Route::get('/contact','contact');
    Route::get('/services','services');
});

Route::view('/blade','home');



Route::middleware(CheckAge::class)->group(function(){
    Route::get('/products', [ProductController::class, 'index'])->name('index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('create');
    Route::post('/products', [ProductController::class, 'store'])->name('store');
    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('edit');
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('update');
    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('destroy');

});