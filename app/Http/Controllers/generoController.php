<?php

namespace App\Http\Controllers;

use App\Models\genero;
use Illuminate\Http\Request;

class generoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $generos=genero::all();
        return view('genero.indexg')->with('generos',$generos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('genero.createg');
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
            'nombre' => 'required|max:20',
        ]);

        $genero = new genero();
        $genero->name = $request->get('nombre');
        $genero->timestamps = false;

        $genero->save();

        return redirect('/Genero');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\genero  $genero
     * @return \Illuminate\Http\Response
     */
    public function show(genero $genero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\genero  $genero
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $genero = genero::findOrFail($id);
        return view('genero.editg',compact('genero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\genero  $genero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $genero = genero::find($id);
        $genero->name = $request->get('nombre');
        $genero->timestamps = false;

        $genero->save();

        return redirect('/Genero');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\genero  $genero
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $genero = genero::find($id);
        $genero->delete();
        return redirect('/Genero');
    }
}
