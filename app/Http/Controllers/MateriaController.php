<?php

namespace App\Http\Controllers;

use App\Models\materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materia = materia::orderBy('id','asc')->paginate();
        return view('materia.index', compact('materia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materia = materia::all();
        $curso = curso::all();
        return view('materia.create', compact('materia'),compact('curso'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $materia = materia::find($id);
        $curso = curso::all();
        return view('materia.edit', compact('materia'), compact('curso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, materia $materia,$id)
    {
        $materia = materia::find($id);
        $materia->name = $request->name;
        $materia->contenido = $request->contenido;
        $materia->descripcion = $request->descripcion;
        $materia->curso_id = $request->curso_id;
        $materia->save();
        return redirect()->route('materia.show', $materia);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(materia $materia,$id)
    {
        $materia = materia::find($id);
        $materia->delete();
        return redirect()->route('materia.index');
    }
}
