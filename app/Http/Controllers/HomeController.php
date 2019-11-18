<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
        //En el array posts se van a almacenar todos los registros de la tabla Posts
        $posts = Post::all();
        return view("home", compact("posts"));
    }

    public function create($id)
    {
        if ($id == 1)
        {
            $tipo = "Consulta";
        }
        elseif ($id == 2){
            $tipo = "Solicitud";
        }
        elseif($id == 3){
            $tipo ="Reclamo";
        }

        return view("create",compact("tipo"));
        
    }
}