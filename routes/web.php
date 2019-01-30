<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});

//users
$app->get('/api/users', 'userController@index');
$app->get('/api/users/{id}', 'userController@show');
$app->post('/api/users/input', 'userController@add');
$app->put('/api/users/update/{id}', 'userController@update');
$app->delete('/api/users/delete/{id}', 'userController@delete');

//barang
$app->get('/api/barang', 'barangController@index');
$app->get('/api/barang/{id}', 'barangController@show');
$app->post('/api/barang/add', 'barangController@add');
$app->put('/api/barang/update/{id}', 'barangController@update');
$app->delete('/api/barang/delete/{id}', 'barangController@delete');

//tr_barangmasuk
$app->get('/api/barangmasuk', 'trBarangmasukController@index');
$app->get('/api/barangmasuk/{id}', 'trBarangmasukController@show');
$app->post('/api/barangmasuk/input', 'trBarangmasukController@add');

//tr_stok
$app->get('/api/stok', 'trStokController@index');
$app->get('/api/stok/{id}', 'trStokController@show');
$app->post('/api/stok/input', 'trStokController@add');