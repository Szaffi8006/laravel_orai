<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\DrinkController;
use App\Http\Controllers\api\TypeController;
use App\Http\Controllers\api\PackageController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get("/drinks", [DrinkController::class, "getDrinks"]);
Route::get("/drink", [DrinkController::class, "getDrink"]);
Route::post("/newdrink", [DrinkController::class, "newDrink"]);
Route::put("/updatedrink", [DrinkController::class, "updateDrink"]);
Route::delete("/deletedrink/{id}", [DrinkController::class, "destroyDrink"]);

Route::get("/packages", [PackageController::class, "getPackages"]);
Route::get("/package", [PackageController::class, "getPackage"]);
Route::post("/newpackage", [PackageController::class, "newPackage"]);
Route::put("/updatepackage", [PackageController::class, "updatePackage"]);
Route::delete("/deletepackage/{id}", [PackageController::class, "destroyPackage"]);

Route::get("/types", [TypeController::class, "getTypes"]);
Route::get("/type", [TypeController::class, "getType"]);
Route::post("/newtype", [TypeController::class, "newType"]);
Route::put("/updatetype", [TypeController::class, "updateType"]);
Route::delete("/deletetype/{id}", [TypeController::class, "destroyType"]);
