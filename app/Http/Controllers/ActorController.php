<?php

namespace App\Http\Controllers;

use App\Models\actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actores = actor::all();
        return view('actor.index')->with('actores',$actores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('actor.create');
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

        $actor = new actor();
        $actor->nombre = $request->get('nombre');
        $actor->apellPat = $request->get('apellPat');
        $actor->apellMat = $request->get('apellMat');
        $actor->genero = $request->get('genero');
        $actor->fechaNac = $request->get('fechaNac');

        $actor->save();

        return redirect('/Actor');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function show(actor $actor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $actor= actor::findOrFail($id);
        return view('actor.edit',compact('actor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $actor = actor::find($id);
        $actor->nombre = $request->get('nombre');
        $actor->apellPat = $request->get('apellPat');
        $actor->apellMat = $request->get('apellMat');
        $actor->genero = $request->get('genero');
        $actor->fechaNac = $request->get('fechaNac');

        $actor->save();

        return redirect('/Actor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actor = actor::find($id);
        $actor->delete();
        return redirect('/Actor');
    }
}
