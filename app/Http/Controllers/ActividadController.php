<?php
namespace App\Http\Controllers;

use App\Models\actividad;
use App\Models\tema;
use Illuminate\Http\Request;

class ActividadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $actividad = actividad::all();
        return view('actividad.index', compact('actividad'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('actividad.create');
        $tema = tema::all();
        return view('actividad.create',compact('tema'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,actividad $actividad)
    {
        
        $actividad->name = $request->name;
        $actividad->descripcion= $request->descripcion;
        $actividad->tema_id = $request->tema_id;
        $actividad->save();
        return redirect()->route('actividad.show',$actividad);
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
        $tema = tema::all();
        $actividad = actividad::find($id);
        return view('actividad.edit', compact('actividad'), compact('tema'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,actividad $actividad)
    {
        
        $actividad->name = $request->name;
        $actividad->descripcion= $request->descripcion;
        $actividad->tema_id = $request->tema_id;
        $actividad->save();
        return redirect()->route('actividad.show',$actividad);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(actividad $actividad)
    {
        $actividad->delete();
        return redirect()->route('actividad.index');
    }
}
