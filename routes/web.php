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
    return view('home');
});

Route::get('/landing', function (){

    $operators = [
        [
            "nome"=>"Pino",
            "cognome"=>"Alberi",
        ],
        [
            "nome"=>"Mario",
            "cognome"=>"Superi",
        ],
        [
            "nome"=>"Alberto",
            "cognome"=>"Ortopanoramico",
        ],

    ];

    return view('landing', compact('operators'));
});
