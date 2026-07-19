<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "welcome to my blog";
});

Route::get('/posts', function () {

    return "aqui se mostrarán todos los posts";
});

Route::get('/posts/create', function () {

    return "aqui se mostrá un formulario para crear un post";
});

Route::get('/posts/{post}/{category?}', function ($post, $category = null) {

    if ($category) {
        return "aqui se mostrarán todos los post {$post} de la categoria {$category}";
    } else {
        return "aqui se mostrarán todos los post {$post}";
    }
});
