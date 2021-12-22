<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Situaciones;

class SituacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $situaciones = Situaciones::all();

        return response()->json($situaciones);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $situaciones = new Situaciones();

        $situaciones->Actor = $request->Actor;
        $situaciones->Imagen = $request->Imagen;
        $situaciones->Descripcion = $request->Descripcion;
        $situaciones->BotonSi = $request->BotonSi;
        $situaciones->BotonNo = $request->BotonNo;

        $situaciones->EducacionSi = $request->EducacionSi;
        $situaciones->PoliticaSi = $request->PoliticaSi;
        $situaciones->ViolenciaSi = $request->ViolenciaSi;
        $situaciones->LaboralSi = $request->LaboralSi;

        $situaciones->EducacionNo = $request->EducacionNo;
        $situaciones->PoliticaNo = $request->PoliticaNo;
        $situaciones->ViolenciaNo = $request->ViolenciaNo;
        $situaciones->LaboralNo = $request->LaboralNo;



        $situaciones->save();

        $result = array(
            'success' => true,
            'data' => $situaciones,
            'msg' => 'Situacion creada de forma exitosa!'
        );
        return response()->json($result);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request) 
    { 
        if ($request->id) { 
            $situacion = Situaciones::findOrFail($request->id); 
        } 
 
        /* $result = array( 
            'success' => true, 
            'data' => $situacion, 
            'msg' => 'Situacion actualizada de forma exitosa!' 
        ); */ 
 
        return response()->json($situacion); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        if ($request->id) {
            $situaciones = Situaciones::findOrFail($request->id);
        } 

        $situaciones->Actor = $request->Actor;
        $situaciones->Imagen = $request->Imagen;
        $situaciones->Descripcion = $request->Descripcion;
        $situaciones->BotonSi = $request->BotonSi;
        $situaciones->BotonNo = $request->BotonNo;

        $situaciones->EducacionSi = $request->EducacionSi;
        $situaciones->PoliticaSi = $request->PoliticaSi;
        $situaciones->ViolenciaSi = $request->ViolenciaSi;
        $situaciones->LaboralSi = $request->LaboralSi;

        $situaciones->EducacionNo = $request->EducacionNo;
        $situaciones->PoliticaNo = $request->PoliticaNo;
        $situaciones->ViolenciaNo = $request->ViolenciaNo;
        $situaciones->LaboralNo = $request->LaboralNo;

        $situaciones->save();

        $result = array(
            'success' => true,
            'data' => $situaciones,
            'msg' => 'Situacion actualizada de forma exitosa!'
        );

        return response()->json($result);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $situaciones = Situaciones::destroy($request->id);

        $result = array(
            'success' => true,
            'data' => $situaciones,
            'msg' => 'Situacion eliminada de forma exitosa!'
        );

        return response()->json($result);

    }
}
