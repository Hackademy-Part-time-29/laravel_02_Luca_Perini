<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $title = 'Home';
    $description = 'Lorem ipsum sit dolor est amen';
    return view('homepage', compact('title', 'description'));
})->name('homepage');;


Route::get('/chi-siamo', function () {
    $title = 'Chi siamo';
    $description = 'Lorem ipsum sit dolor est amen';
    return view('chi-siamo', compact('title', 'description'));
})->name('chi-siamo');;


Route::get('/servizi', function () {
    $title = 'Servizi';
    $description = 'Lorem ipsum sit dolor est amen';
    return view('servizi', compact('title', 'description'));
})->name('servizi');;


Route::get('/articoli', function () {
    $title = 'Articoli';
    $description = 'Lorem ipsum sit dolor est amen';
    $articles = [['id'=> 1, 'title'=>'primo articolo', 'description'=>'descrizione primo articolo'],
    ['id'=> 2, 'title'=>'secondo articolo', 'description'=>'descrizione secondo articolo'],
    ['id'=> 3, 'title'=>'terzo articolo', 'description'=>'descrizione terzo articolo'],
    ['id'=> 4, 'title'=>'quarto articolo', 'description'=>'descrizione quarto articolo']];
    return view('articoli', compact('title', 'description', 'articles'));
})->name('articles');


Route::get('/articolo/{id}', function ($id) {
    $articles = [1=>['id'=> 1, 'title'=>'primo articolo', 'description'=>'descrizione primo articolo'],
    2=>['id'=> 2, 'title'=>'secondo articolo', 'description'=>'descrizione secondo articolo'],
    3=>['id'=> 3, 'title'=>'terzo articolo', 'description'=>'descrizione terzo articolo'],
    4=>['id'=> 4, 'title'=>'quarto articolo', 'description'=>'descrizione quarto articolo']];

    if(array_key_exists($id, $articles)){
        $article=$articles[$id];
        return view('articolo',compact('article'));
    }else{
        abort(404);
    }


    
   
})->name('articolo');;

