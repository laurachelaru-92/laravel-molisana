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
})->name("home");

Route::get('/prodotti', function () {
    $data = config('pasta');
    
    $pasta = [];

    foreach ($data as $key => $prodotto) {
        // Aggiungiamo una chiave "id" con l'indice "$key" come valore
        $prodotto["id"] = $key;
        // Aggiungiamo in ogni prodotto una chiave "categoria"
        if($prodotto["tipo"] == "lunga") {
            $prodotto["categoria"] = "Le Lunghe";
        } elseif($prodotto["tipo"] == "corta") {
            $prodotto["categoria"] = "Le Corte";
        } elseif($prodotto["tipo"] == "cortissima") {
            $prodotto["categoria"] = "Le Cortissime";
        }
        // Pushiamo il prodotto con le chiavi nuove nel nuovo array $pasta
        $pasta[$prodotto["tipo"]][] = $prodotto;
    }

    return view('Partial_pages.prodotti', ["pasta" => $pasta]);
})->name("prodotti");

Route::get('/prodotto/show/{id}', function ($id) {
    $data = config("pasta");
    if($data[$id] == null) {
        abort(404);
    }
    $length = count($data);
    return view('Partial_pages.prodotto_singolo', ["pasta" => $data[$id], "id" => $id, "length" => $length]);
})->name("prodotto");

Route::get('/news', function () {
    return view('Partial_pages.news');
})->name("news");
