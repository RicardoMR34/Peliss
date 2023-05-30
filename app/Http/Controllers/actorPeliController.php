<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pelicula;
use App\Models\actor;
use App\Models\actor_Pelicula;      

class actorPeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actorpeliculas = actor_Pelicula::all();
        return view('actorPeli.indexap')->with('actorpeliculas',$actorpeliculas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $actores=actor::all();
        $peliculas=pelicula::all();
        return view('actorPeli.createap',['actores'=>$actores,'peliculas'=>$peliculas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $actorpeliculas = new actor_Pelicula();
        $actorpeliculas->actorID = $request->get('actor');
        $actorpeliculas->peliculaID = $request->get('pelicula');

        $actorpeliculas->save();

        return redirect('/AP');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {  
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $actorpelicula= actor_Pelicula::findOrFail($id);
        $actores=actor::find($actorpelicula->actorID);
        $peliculas=pelicula::find($actorpelicula->peliculaID);
        
        return view('actorPeli.consultaap',compact('actorpelicula','actores','peliculas'));

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
        $pelicula = actor_Pelicula::find($id);
        $pelicula->delete();
        return redirect('/AP');
    }
}
