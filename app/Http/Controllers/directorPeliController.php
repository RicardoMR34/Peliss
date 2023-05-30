<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pelicula;
use App\Models\director;
use App\Models\director_Pelicula; 

class directorPeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $directorpeliculas = director_Pelicula::all();
        return view('directorPeli.indexdp')->with('directorpeliculas',$directorpeliculas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $directores=director::all();
        $peliculas=pelicula::all();
        return view('directorPeli.createdp',['directores'=>$directores,'peliculas'=>$peliculas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $directorpeliculas = new director_Pelicula();
        $directorpeliculas->directorID = $request->get('director');
        $directorpeliculas->peliculaID = $request->get('pelicula');

        $directorpeliculas->save();

        return redirect('/DP');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\director  $director
     * @return \Illuminate\Http\Response
     */
    public function show(director $director)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\director  $director
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $directorpelicula= director_Pelicula::findOrFail($id);
        $directores=director::find($directorpelicula->directorID);
        $peliculas=pelicula::find($directorpelicula->peliculaID);
        
        return view('directorPeli.consultadp',compact('directorpelicula','directores','peliculas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\director  $director
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\director  $director
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelicula = director_Pelicula::find($id);
        $pelicula->delete();
        return redirect('/DP');
    }
}
