<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;

class crudController extends Controller
{
     public function index()
    {
    	$clientes = \App\cliente::All(); 
    	return view('web.index', compact('clientes'));
    }
     public function create()
    {
    	return view('cliente.create');
    }
     public function store(Request $request)
    {
    	\App\cliente::create([
    		'id' => $request['id'],
    		'pNombre'=> $request['pNombre'],
    		'sNombre'=> $request['sNombre'],
    		'pApellido'=> $request['pApellido'],
    		'sApellido'=> $request['sApellido'],
    		'email'=> $request['email'],
    		'cel'=> $request['cel'],
    		'dir'=> $request['dir'],
    	]);

    	Session::flash('message', 'Usuario Registrado correctamente');
    	return redirect::to('/cliente');
    }
     public function edit($id)
    {
    	$cliente = \App\cliente::find($id);
    	return view('cliente.edit', ['cliente'=>$cliente]);
    }
    public function update($ci, Request $request)
    {
    	$cliente = \App\cliente::find($ci);
    	$cliente->fill($request->all());
    	$cliente->save();

    	Session::flash('message', 'Usuario Actualizado correctamente');
    	return redirect::to('/cliente');

}
}