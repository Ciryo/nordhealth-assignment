<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

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
    return view('welcome');
});

Route::post('/auth/login', [AuthController::class, 'authenticate']);
Route::get('/get_basics/{id}', [AuthController::class,'getBasics']);
Route::post('/products/list', [ProductController::class, 'getProducts']);
Route::post('/products/product/{id}', [ProductController::class, 'setProductData']);

    
//protected routes, not implemented yet
Route::middleware([Auth::class])->group(function(){
    // Route::get('/get_basics/{id}', [AuthController::class,'getBasics']);
});


//free routes
Route::group([
    'excluded_middleware' => ['auth'],
], function () {
    //any groups 
});

