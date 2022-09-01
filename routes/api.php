<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

/*

Первый вариант версий роутов - группа с префиксом версии

Route::prefix('v1')->group(function(){
    Route::get('test', function(){
        return 1;
    });
});
*/


// Route::post('post-test', function(Request $request){
//     if(isset($request->name) && !empty($request->name)){
//         return "yes";
//     }
//     else{
//         return "no";
//     }
// });

// Route::get('test-products', function(){
//     $products = Product::get();
//     return $products;
// });

// Route::post('choose-product', function(Request $request){
//     $product = Product::where('id', $request->id)->get();

//     if(count($product) > 0)
//         return $product;
//     else
//         return [];
// });