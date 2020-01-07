<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Services\PostService;

class HomeController extends Controller
{
    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
        return $this->middleware('auth');
    }

    public function index()
    {
        $posts = $this->postService->getAll(); 
        return view('prueba',compact("posts"));
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