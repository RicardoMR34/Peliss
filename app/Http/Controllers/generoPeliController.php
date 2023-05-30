<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pelicula;
use App\Models\genero;
use App\Models\genero_Pelicula;  

class generoPeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $generopeliculas = genero_Pelicula::all();
        return view('generoPeli.indexgp')->with('generopeliculas',$generopeliculas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $generos=genero::all();
        $peliculas=pelicula::all();
        return view('generoPeli.creategp',['generos'=>$generos,'peliculas'=>$peliculas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $generopeliculas = new genero_Pelicula();
        $generopeliculas->generoID = $request->get('genero');
        $generopeliculas->peliculaID = $request->get('pelicula');

        $generopeliculas->save();

        return redirect('/GP');
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
        $generopelicula= genero_Pelicula::findOrFail($id);
        $generos=genero::find($generopelicula->generoID);
        $peliculas=pelicula::find($generopelicula->peliculaID);
        
        return view('generoPeli.consultagp',compact('generopelicula','generos','peliculas'));
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
        $pelicula = genero_Pelicula::find($id);
        $pelicula->delete();
        return redirect('/GP');
    }
}
