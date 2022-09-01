<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v2')->group(function(){
    Route::get('route-v2', function(){
        return "версия 2";
    });
});
