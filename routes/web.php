<?php

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


use Illuminate\Http\Request;
use Spatie\Geocoder\Facades\Geocoder;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function (Request $request){
    if($request->address != null){
        $location = Geocoder::getCoordinatesForAddress($request->address);
        return $location;
    }
    $location = Geocoder::getCoordinatesForAddress("Slave Delovski 14");
    return $location;
});
