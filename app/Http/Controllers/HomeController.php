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
        return view('peticiones');
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