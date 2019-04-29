<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Afiliacion;
use App\Models\Persona;

class AfiliacionController extends Controller
{

    public function buscar(Request $request){
        // dd($request);
        $persona = Persona::find('numero_documento')->where($request->numero_documento);
        return view('afiliacion.crear',compact('persona'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $afiliacion = Afiliacion::all();
        return view('afiliacion.mostrar',compact('afiliacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $afiliacion = Afiliacion::all();
        return view('afiliacion.crear',compact('afiliacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $afiliacion = new Afiliacion;
        $afiliacion->fecha_afiliacion = $request->fecha_afiliacion;
        $afiliacion->fecha_vencimiento = $request->fecha_vencimiento;
        $afiliacion->fecha_renovacion = $request->fecha_renovacion;
        $afiliacion->obs_afiliacion = $request->obs_afiliacion;

        $afiliacion->save();
        return redirect()->route('formulario.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $afiliacion = Afiliacion::all();
        return view('afiliacion.afiliacion',compact('afiliacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $afiliacion = Afiliacion::find($id);
        return view('afiliacion.editar',['afiliacion'=>$afiliacion]);
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
        $afiliacion = Afiliacion::find($id);
        $afiliacion->fecha_afiliacion = $request->fecha_afiliacion;
        $afiliacion->fecha_vencimiento = $request->fecha_vencimiento;
        $afiliacion->fecha_renovacion = $request->fecha_renovacion;
        $afiliacion->obs_afiliacion = $request->obs_afiliacion;

        $afiliacion->save();
        return redirect()->route('afiliacion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $afiliacion = Afiliacion::find($id)->delete();
        return redirect()->route('afiliacion.index');
    }
}
