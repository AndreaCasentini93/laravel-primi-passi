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

    // Dati
    $data = [
        "name" => "Andrea",
        "skills" => [
            "HTML",
            "CSS",
            "Bootstrap",
            "JavaScript",
            "Vue",
            "SASS",
            "Vue-cli",
            "PHP",
            "MySql",
            "Laravel"
        ]
    ];

    return view('home', $data);
});
