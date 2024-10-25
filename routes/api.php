<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
use Laravel\Passport\Http\Controllers\AccessTokenController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|

eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiOWJkMWFlNzEwYTU2MjE0MDFhMDk1MGFlYTkwZTExNjVhMTU4NDBjMzI4NTBkYjlkZmI3YmU1MWZlNzhjNjAzY2FhOGY1MWVlYWE2MTUyYzQiLCJpYXQiOjE3Mjk3ODg0OTUuMTM2MzQxLCJuYmYiOjE3Mjk3ODg0OTUuMTM2MzQ0LCJleHAiOjE3Mjk3OTAyOTUuMDkyNzQsInN1YiI6IiIsInNjb3BlcyI6W119.c7GRNHj0GtOO-xm05CTyAWqs8C77J_J8vuxImp3MTYf83S8nkbjgwZQHHyFI9IE3MQupfUChzHekMWGpY_hSjLwdZPGW2iACADPuMb_dGU4eXmJixPMtiwNOvIlXo9sYj2PR27FFFSH5m6mHX-EmiOO2OgBGOBRIPkfmwF-EYu9YovbrPIuob2VsehoJMr8_Oj2mpoL9y-u_Riv3hHtne3srCVanUBjuhlZzKJn2aVv5e_yc8AszuvWDEaMNewXsMosON7_ndHCKeteHI__eS0TuwhgWne-BfhHw4CU4zArk4e_tufPT3FOk3DNGpdhYEvEapwlTD--un-WNgLCHCTQAzzBuxcWrOLGChAf0myR1CW4cZG3Usvibo9-OS7Ur0cC3KKz6FhtQkPoSsCJsiGb1JD9TkJHDltZNoEEsEPIvWHJWWJtQm0TcEyRnR_zGkJxs9iCmpVVMcv2Z_Rq6c0p1wGZNNdWXPvZG3RyzmZr_cD9fUpUO17XtuhP48h3cMzLQqcqQxbHQpAqnNcod98z7O6wIqHs8OakCZUiNGVph7fXj8ntCBNwc3DE92qZPMyn5Nm1AtPVhZqV6NOQgE1CsyV520Q1yHsQOIAb9R1nWmc0oRC1NNW-fEHXJj4SF89--LJ-bj5Z03aWInw2lMmDJCUphCfWDlJ2cylcBT1Q


*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();


    Route::apiResource("estudiantes", EstudianteController::class);
});



Route::post('oauth/token', [AccessTokenController::class, 'issueToken']);
