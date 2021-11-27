<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\asistencia;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('asistencia.index', compact('usuario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        return view('asistencia.create',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,asistencia $asistencia)
    {

        $asistencia->user_id = $request->user_id;
        $asistencia->estado = $request->estado;
        $asistencia->fecha= $request->fecha;
        $asistencia->save();
        return redirect()->route('asistencia.index',$asistencia);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asistencia = asistencia::join('users','users.id','=','asistencias.user_id')->where('users.id','=',$id)->get();
        return view('asistencia.show', compact('asistencia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asistencia = asistencia::find($id);
        return view('asistencia.edit', compact('asistencia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,asistencia $asistencia)
    {  
        $asistencia->user_id = $request->user_id;
        $asistencia->estado = $request->estado;
        $asistencia->fecha = $request->fecha;
        $asistencia->save();
        return redirect()->route('asistencia.show',$asistencia);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(asistencia $asistencia)
    {
        $asistencia->delete();
        return redirect()->route('asistencia.index');
    }
}
