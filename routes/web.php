<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\DataController;

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


Route::get('/login', function () {
    return view('user.login');
})->name('login');

Route::post('/postlogin','LoginController@postlogin')->name('postlogin');
Route::get('/logout','LoginController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {

route::get('/home','DataController@index');

Route::get('/', function () {
    return view('welcome');
});
});

// Route::middleware('auth:user')->group(function(){
	  // Untuk Route.
	Route::get('/home','AdminController@home');
// });


Route::get('/inputdataa','DataController@index')->name('inputdataa');	
Route::post('/create','DataController@create');	
Route::get('/item/{id}/edit','DataController@edit');
Route::post('/item/{id}/update','DataController@update');
Route::get('/item/{id}/delete','DataController@delete');

Route::get('/transaksimesinedc','TransaksiController@index')->name('transaksimesinedc');
Route::post('/store','TransaksiController@create');
Route::get('/items/{id}/edit','TransaksiController@edit');
Route::post('/items/{id}/update','TransaksiController@update');
Route::get('/items/{id}/delete','TransaksiController@delete');	

Route::get('/mesinedc','dataedcController@index')->name('mesinedc');

Route::get('/exportdata','DataController@dataexport')->name('exportdata');
Route::post('/importtdata','DataController@dataimport')->name('importtdata');

Route::get('/cetaklaporantransaksi','TransaksiController@cetak')->name('cetaklaporantransaksi');
Route::get('/cetaklaporantgl/{tglawal}/{tglakhir}','TransaksiController@cetaklaporan')->name('cetaklaporantgl');

Route::get('/edctamper','edcTamperController@index');
Route::post('/createdata','edcTamperController@create');
Route::get('/item/{id}/delete','edcTamperController@delete');


