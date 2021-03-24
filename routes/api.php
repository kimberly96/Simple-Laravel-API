<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

/*
* AMBIL LIST PELANGGAN
* PARAM (TIDAK ADA)
* RETURN JSON ARRAY (DATA / EMPTY)
*
*/
Route::get('/getlistpelanggan', 'Api\Service@getListPelanggan');