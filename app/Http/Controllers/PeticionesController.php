<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PeticionesController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
        //En el array posts se van a almacenar todos los registros de la tabla Posts
        $posts = Post::get();
        // return view("home", compact("posts"));
        return $posts;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {        
    //     return view("create");
    // }

    public function createByType($id)
    {
        $tipo = "Petición";
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
        elseif($id == 4){
            $tipo ="Otro tipo";
        }

        return view("create",compact("tipo"));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
