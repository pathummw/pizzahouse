<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizza', function () {
    $pizzas = [
        ['name' => 'Margareta','type' => 'Pan pizza','price' => 20],
        ['name' => 'Cheese pizza','type' => 'Pan pizza','price' => 40],
        ['name' => 'Hawaii','type' => 'Itally pizza','price' => 10],
    ];
    $name = request('name');
    return view('pizzas', [
        'pizzas' => $pizzas,
        'name' => request('name'),
        'age' => request('age'),
    ]);
});

Route::get('/pizza/{id}', function ($id) {
    return view('details', [
        'id' => $id,
    ]);
});

/* Route::get('/hima', function () {
    return ['name' => 'margareta', 'type' => 'Pan pizza', 'size' => 'M'];
}); */
