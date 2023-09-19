<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CartController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::middleware(['auth:api'])->group(function () {
       
// });

Route::post('/cart', [CartController::class, 'addToCart']);
Route::get('/cart/{user_id}', [CartController::class, 'index']);

// Route::middleware(['auth'])->get('/user', function (Request $request) {
//     $user = $request->user();
    
//     return  $user;
// });
