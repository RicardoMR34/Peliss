<?php

namespace App\Http\Controllers;

use App\Models\director;
use Illuminate\Http\Request;

class directorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $directores = director::all();
        return view('director.indexd')->with('directores',$directores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('director.created');
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
            'nombre' => 'required|max:25',
            'apellPat' => 'required|max:25',
            'apellMat' => 'required|max:25',
            'genero' => 'required',
            'fechaNac' => 'required|date'
        ]);

        $director = new director();
        $director->nombre = $request->get('nombre');
        $director->apellPat = $request->get('apellPat');
        $director->apellMat = $request->get('apellMat');
        $director->genero = $request->get('genero');
        $director->fechaNac = $request->get('fechaNac');

        $director->save();

        return redirect('/Director');
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
        $director= director::findOrFail($id);
        return view('director.editd',compact('director'));
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
        $director = director::find($id);
        $director->nombre = $request->get('nombre');
        $director->apellPat = $request->get('apellPat');
        $director->apellMat = $request->get('apellMat');
        $director->genero = $request->get('genero');
        $director->fechaNac = $request->get('fechaNac');

        $director->save();

        return redirect('/Director');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\director  $director
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $director = director::find($id);
        $director->delete();
        return redirect('/Director');
    }
}
