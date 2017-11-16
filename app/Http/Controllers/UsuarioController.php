<?php

namespace App\Http\Controllers;
use App\Usuario;
use Illuminate\Http\Request;
use Session;



class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario =Usuario::all();
        return view('admin.usuarios.listar-usuario',compact('usuario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.usuarios.crear-usuario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //array(dd($request->toArray()));
        Usuario::create($request->all());

        Session::flash('message','El registro fue creado exitosamente.');
        return redirect('usuario');

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
    public function edit( Request $request, $id)
    {
        $usuario=Usuario::find($id);

        return view('admin.usuarios.editar-usuario',compact('usuario'));

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

        $usuario=Usuario::find($id);
        //dd($usuario);
        $usuario->fill($request->all());
        $usuario->save();
        Session::flash('message','El usuario: '.$usuario->nombres .' '.$usuario->apellidos.' fue actualizado exitosamente');
        return redirect('usuario');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
