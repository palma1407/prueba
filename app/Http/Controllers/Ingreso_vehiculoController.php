<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingreso_vehiculo;
use DB;
use App\Http\Controllers\Redirect;

class Ingreso_vehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingreso = Ingreso_vehiculo::all(); //traer todos los datos
        return view('IngresoV.index')->with('ingreso', $ingreso);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vehiculo = DB::table('vehiculos')
            ->select('vehiculos.placa', 'vehiculos.id')
            ->get();
        return view('ingresoV.create')->with('vehiculo', $vehiculo);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ingreso = new Ingreso_vehiculo;
        $ingreso->vehiculo_id = $request->get('vehiculo_id');
        $ingreso->fecha_ingreso = $request->get('fecha_ingreso');
        $ingreso->estado = $request->get('estado');
        $ingreso->users_id = $request->get('users_id');
        $ingreso->save();
        return Redirect::to('ingresoV');
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
        //
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
        //
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
