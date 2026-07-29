<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view("Posts.index");
    }

    public function create()
    {
        return view("Posts.create");
    }
    //funcion alternativa para pasar variables a las vistas
    //compact("post") 

    //metodo para pasar variables a las vistas
    //  ["post" => $post]

    public function show($post)
    {
        return view("Posts.show", ["post" => $post]);
    }
}
