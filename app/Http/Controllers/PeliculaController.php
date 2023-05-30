<?php

namespace App\Http\Controllers;

use App\Models\pelicula;
use App\Models\compania;
use Illuminate\Http\Request;

class peliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peliculas=pelicula::all();
        return view('pelicula.indexp')->with('peliculas',$peliculas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companias=compania::all();
        return view('pelicula.createp',['companias'=>$companias]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|max:75',
            'longMinutos' => 'required|integer|min:0',
            'fechaEstreno' => 'required|date',
            'calificacion' => 'required|integer|min:0|max:10',
            'sinopsis' => 'required',
            'companiaID' => 'required|integer',
            'tipo' => 'required',
        ]);

        $peliculas = new pelicula();
        $peliculas->titulo = $request->get('titulo');
        $peliculas->longitudMinutos = $request->get('longMinutos');
        $peliculas->anioLanzamiento = $request->get('fechaEstreno');
        $peliculas->calificacion = $request->get('calificacion');
        $peliculas->sinopsis = $request->get('sinopsis');
        $peliculas->companiaID = $request->get('companiaID');
        $peliculas->Tipo = $request->get('tipo');

        $peliculas->save();

        return redirect('/pelicula');
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
        $companias=compania::all();
        $pelicula= pelicula::findOrFail($id);
        return view('pelicula.editp',compact('pelicula','companias'));
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
        $pelicula = pelicula::find($id);
        $pelicula->titulo = $request->get('titulo');
        $pelicula->sinopsis = $request->get('sinopsis');
        $pelicula->calificacion = $request->get('calificacion');
        $pelicula->longitudMinutos = $request->get('longitudMinutos');
        $pelicula->anioLanzamiento = $request->get('anioLanzamiento');
        $pelicula->Tipo = $request->get('Tipo');
        $pelicula->companiaID = $request->get('companiaID');

        $pelicula->save();

        return redirect('/pelicula');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelicula = pelicula::find($id);
        $pelicula->delete();
        return redirect('/pelicula');
    }
}
