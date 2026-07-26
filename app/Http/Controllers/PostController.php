<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return "aqui se mostrarán todos los posts";
    }

    public function create()
    {
        return "aqui se mostrá un formulario para crear un post";
    }

    public function show($post)
    {
        return "aqui se mostrarán todos los post {$post}";
    }
}
