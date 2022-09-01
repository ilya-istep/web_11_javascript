<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ApiController;


Route::prefix('v1')->group(function(){
    Route::post('token-generate', [ApiController::class, 'loginAction']);

    Route::get('token-delete', function(){
        // $user = Auth::user();

        // $user->tokens()->delete();
        // $user->tokens()->where('id', $tokenId)->delete();

        // return 'чистенько';
    });

    Route::middleware('auth:sanctum')->group(function () {
        Route::get('cabinet', function(){
            return "ты избранный!";
        });
    });

    
});


