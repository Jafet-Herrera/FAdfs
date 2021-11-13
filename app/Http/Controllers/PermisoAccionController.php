<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use App\Models\modulo;
use App\Models\Aplicativo;
use Illuminate\Http\Request;
use App\Models\PermisoAccion;
use App\Models\PermisosRolsAplicativo;

class PermisoAccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles=Rol::all();
        //$aplicativos=Aplicativo::all();
        $modulos=modulo::all();

        for($i=0; $i<= ((Sizeof( $modulos))-1);$i++)
        {
        
            $modulos[$i]=Modulo::find($i+1);
            
        } 
        return view('admon_permisos.index', compact('roles','modulos'));
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
    
        if(sizeof($request->collect())<4){

            $data=$request->validate(
                [
                    'rol' => 'required',
                    'aplicativos' => 'required'
                ]);
        }
        elseif(sizeof($request->collect())>=4){
            $data=$request->validate(
                [
                    'rol' => 'required',
                    'aplicativos' => 'nullable'
                ]);
        }

        $inputApps = $request->except(['_token','aplicativos', 'rol']);
        /* foreach($inputApps as $inputApps){
            PermisosRolsAplicativo::create(
                [
                    'rol_id' => $data['rol'],
                   // 'aplicativo_id' =>
                ]
            );
        } */
        dd($inputApps);
        
        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PermisoAccion  $permisoAccion
     * @return \Illuminate\Http\Response
     */
    public function show(PermisoAccion $permisoAccion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PermisoAccion  $permisoAccion
     * @return \Illuminate\Http\Response
     */
    public function edit(PermisoAccion $permisoAccion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PermisoAccion  $permisoAccion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PermisoAccion $permisoAccion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PermisoAccion  $permisoAccion
     * @return \Illuminate\Http\Response
     */
    public function destroy(PermisoAccion $permisoAccion)
    {
        //
    }
}
