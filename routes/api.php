<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;



Route::get('/test', function (Request $request) {

        Log::channel('telegram')->critical('log telegram ramdom_team_api test');
         return Log::info('log ramdom_team_api test');
});
Route::fallback(fn() => response(["message" => 'Página não encontrada'], 404));

