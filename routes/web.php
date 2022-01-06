<?php

use App\Http\Controllers\RaffleController;
use App\Models\Raffle;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::group(['middleware'=>['auth']],function(){
    Route::get('/', function () {
        dd();
        return view('welcome');
    });
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('rifas/{id}/images',[RaffleController::class,'storeImages'])->name('rifas.image.store');
Route::resource('rifas',RaffleController::class);

Route::view('testar-view','app.raffles.raffle-create-page-2',['raffle' => Raffle::first()]);
