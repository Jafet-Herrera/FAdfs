<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Aplicativo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AutorizacionRolAplicativosController extends Controller
{
 /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aplicativo  $app
     * @return \Illuminate\Http\Response
     * 
     */  
    public function authorizeViewapp(Aplicativo $app){
       // $count=count($app->permisoAplicativoRol);
       foreach($app->permisoAplicativoRol as $permiso){
            if(Auth::user()->rol_id === $permiso->rol_id){
                return Auth::user()->rol_id === $permiso->rol_id;
            }
        }
    //    return  Auth::user()->rol_id;
    }
}
