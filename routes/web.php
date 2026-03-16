<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;



Route::match(['get', 'post'], '/', [CalculatorController::class, "index"])->name("index");
route::post("/calculate", [CalculatorController::class, "calculate"])->name("calculate")->middleware('throttle:10,1');;
