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

Route::get('/', function () {
    return view('vertical/index');
});

Auth::routes();


Route::get('/comptes', 'UserController@getAll');
Route::get('/commandes', 'CommandeController@getAll');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/ajouter_livraison', function () {
    return view('vertical/addLivraison');
});
Route::get('/calendrier', function () {
    return view('vertical/calender');
});
Route::get('/ajouter_compte', function () {
    return view('vertical/addCompte');
});
Route::get('/ajouter_commande', function () {
    return view('vertical/addCommande');
});
Route::get('/livraisons', 'LivraisonController@getAll');
Route::get('/detailsLivraison/{id}','LivraisonController@getDetails');
Route::get('/geolocation', function () {
    return view('vertical/geolocation');
});