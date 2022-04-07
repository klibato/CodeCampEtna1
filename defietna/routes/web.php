<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TrombiController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\AdministratifController;
use App\Http\Controllers\AdmissionsController;
use App\Http\Controllers\BluController;
use App\Http\Controllers\PedagogiqueController;
use App\Http\Controllers\RhController;
use App\Http\Controllers\StudioController;
use App\Http\Controllers\ReenController;
use App\Http\Controllers\DirectionController;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

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

Route::get('/', function () {
    return view('login');
});

Route::post('/login', [UserController::class, 'auth']);

Route::post('/categorie', [CategorieController::class, 'createtest']);

Route::get('/test', function () {
    return view('test1');
});


// Route::get('/trombo', function () {
//     return view('trombi');
// });

Route::get('delete/{id}',[TrombiController::class, 'destroy']);

Route::get('/oui', [TrombiController::class, 'oui']);

Route::middleware('adm')->group(function () {
    Route::get('/trombi', [TrombiController::class, 'show']);
    Route::get('/blu', [BluController::class, 'show']);
    Route::get('/direction', [DirectionController::class, 'show']);
    Route::get('/reen', [ReenController::class, 'show']);
    Route::get('/rh', [RhController::class, 'show']);
    Route::get('/serviceadm', [AdministratifController::class, 'show']);
    Route::get('/serviceadmiss', [AdmissionsController::class, 'show']);
    Route::get('/servicepedago', [PedagogiqueController::class, 'show']);
    Route::get('/studio', [StudioController::class, 'show']);

    Route::middleware('suadm')->group(function () {
        Route::get('/admin', [AdminController::class, 'show']);
        Route::post('/admin', [TrombiController::class, 'add']);
    });
});

//Page du trombi

