<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    function login(){
        return view('auth.welcome');
    }

    function register(){
        return view('auth.registra');
    }

    function save(Request $request){
        //validar request
        $request->validate([
            'nombre'=>'required',
            'apellido'=>'required',
            'email'=>'required|email|unique:admins',
            'password'=>'required|min:5|max:12'
        ]);
        //insert en db
        $admin = new Admin;
        $admin->nombre = $request->get('nombre');
        $admin->apellido = $request->apellido;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $save = $admin->save();

        if($save){
            return back()->with('success','Has creado tu cuenta con exito');

        }else{
            return back()->with('fail','Algo salio mal, prueba de nuevo');
        }
    }

    function check(Request $request){
        //validacion
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);

        $userInfo = Admin::where('email','=',$request->email)->first();

        if(!$userInfo){
            return back()->with('fail','Parece que no te has registrado');
        }else{
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser',$userInfo->id);
                return redirect('/layouts/dashboard');
            }else{
                return back()->with('fail','Contrasena Incorrecta');
            }
        }
    }

    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/auth/welcome');
        }
    }

    function dashboard(){
        $data = ['LoggedUser'=>Admin::where('id','=',session('LoggedUser'))->first()];
        return view('layouts.dashboard',$data);
    }

    function actor(){
        $data = ['LoggedUser'=>Admin::where('id','=',session('LoggedUser'))->first()];
        return view('Actor.index',$data);
    }

    function perfil(){
        $data = ['LoggedUser'=>Admin::where('id','=',session('LoggedUser'))->first()];
        return view('layouts.perfil',$data);
    }

}
