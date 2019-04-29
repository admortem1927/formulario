<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Entidad;
use App\Models\Afiliados;

class TarjetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pers = Persona::all();
        return view('formulario.mostrar',compact('pers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $ent = Entidad::all();
        return view('formulario.formulario',compact('ent'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $persona = new Persona;

        $persona->tipo_documento = $request->tipo_documento;
        $persona->numero_documento = $request->numero_documento;
        $persona->tipo_afiliado = $request->tipo_afiliado;
        $persona->primer_nombre = $request->primer_nombre;
        $persona->segundo_nombre = $request->segundo_nombre;
        $persona->primer_apellido = $request->primer_apellido;
        $persona->segundo_apellido = $request->segundo_apellido;
        $persona->sexo = $request->sexo;
        $persona->fecha_nacimiento = $request->fecha_nacimiento;
        $persona->lugar_nacimiento = $request->lugar_nacimiento;
        $persona->tel_contacto = $request->tel_contacto;
        $persona->direccion = $request->direccion;
        $persona->email = $request->email;
        $persona->id_entidad = $request->entidad;

        $persona->save();

        return redirect()->route('formulario.index');
        //return redirect('/beneficiarios');        
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
        $persona = Persona::find($id);
        $entidad = Entidad::all();
        return view('formulario.editar',['persona' => $persona, 'entidad' => $entidad]);
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
       $persona = Persona::find($id);
        $persona->tipo_documento = $request->tipo_documento;
        $persona->numero_documento = $request->numero_documento;
        $persona->tipo_afiliado = $request->tipo_afiliado;
        $persona->primer_nombre = $request->primer_nombre;
        $persona->segundo_nombre = $request->segundo_nombre;
        $persona->primer_apellido = $request->primer_apellido;
        $persona->segundo_apellido = $request->segundo_apellido;
        $persona->sexo = $request->sexo;
        $persona->fecha_nacimiento = $request->fecha_nacimiento;
        $persona->lugar_nacimiento = $request->lugar_nacimiento;
        $persona->tel_contacto = $request->tel_contacto;
        $persona->direccion = $request->direccion;
        $persona->email = $request->email;
        $persona->id_entidad = $request->entidad;

        $persona->save();

        return redirect()->route('formulario.index');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $persona = Persona::find($id)->delete();
        return redirect()->route('formulario.index');
    }
}
