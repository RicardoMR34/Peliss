<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\compania;


class CompaniaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companias=compania::all();
        return view('compania.indexc')->with('companias',$companias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('compania.createc');
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
            'nombre' => 'required|max:35',
        ]);

        $compania = new compania();
        $compania->name = $request->get('nombre');
        $compania->timestamps = false;

        $compania->save();

        return redirect('/compania');
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
        $compania = compania::findOrFail($id);
        return view('compania.editc',compact('compania'));
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
        $compania = compania::find($id);
        $compania->name = $request->get('nombre');
        $compania->timestamps = false;

        $compania->save();

        return redirect('/compania');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $compania = compania::find($id);
        $compania->delete();
        return redirect('/compania');
    }
}
