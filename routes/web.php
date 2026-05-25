<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelurahanController;

Route::get('/', function () {
    return view('welcome');
});

route::get('/kelurahan',[KelurahanController::class,'index']);
