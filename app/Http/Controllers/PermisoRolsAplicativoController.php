<?php

namespace App\Http\Controllers;

use App\Models\PermisosRolsAplicativo;
use App\Http\Controllers\AutorizacionRolAplicativosController;
use App\Models\Aplicativo;
use Illuminate\Http\Request;
use App\Models\modulo;
use App\Models\Rol;


class PermisoRolsAplicativoController extends AutorizacionRolAplicativosController /* Controller */
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Accesso = new AutorizacionRolAplicativosController();

        
       //dd($Accesso->authorizeViewapp(Aplicativo::find(6)));
        // $this->authorize('viewAny',6);
        $roles=Rol::all();
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     * 
     */
    public function show(Rol $rol/* PermisosRolsAplicativo $permisos */)
    {
      //  echo $rol;
        
      $la_permisosOut= array(
          'permisos' => '',
          'bandera_permiso' => '',

      );
        if(count($rol->permisosRol) <> 0){
           
            $la_permisosOut['permiso']=$rol->permisosRol;
            $la_permisosOut['bandera_permiso']=1;
           $bandera=1;


        }
        else {
            //$la_permisosOut['bandera_permiso']=0;
             $bandera=0;
        }
        return view('admon_permisos.show', compact('la_permisosOut')); /* redirect()->action('PermisoRolsAplicativoController@index'); */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model  $permisosRolsAplicativo
     * @return \Illuminate\Http\Response
     */
    public function edit(PermisosRolsAplicativo $permisosRolsAplicativo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PermisosRolsAplicativo  $permisosRolsAplicativo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PermisosRolsAplicativo $permisosRolsAplicativo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PermisosRolsAplicativo  $permisosRolsAplicativo
     * @return \Illuminate\Http\Response
     */
    public function destroy(PermisosRolsAplicativo $permisosRolsAplicativo)
    {
        //
    }
}
