<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use App\Models\Area;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class RolController extends Controller
{

    //función para dar acceso a quien este logeado
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Consultando los roles por modelo
        $repuesta_consulta_roles = Rol::all(); 

        //Consultando los roles por modelo
        $repuesta_consulta_areas = Area::all(); 


        return view('roles.index')
        ->with('deptos', $repuesta_consulta_areas)
        ->with('roles',$repuesta_consulta_roles);
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
        $data= $request->validate(
          [
            'depto' => 'required',
            'rol' => 'required|string|min:5|max:30'
          ] 
        );

        Rol::create([
            'area_id' =>$data['depto'],
            'd_rol'=> $data['rol'],
            'created_at' => date('Y-m-d H:i:s')
        ]);
         return redirect()->action('RolController@index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function show(Rol $rol)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $repuesta_rol=Crypt::decryptString($request->route('rol'));
        $repuesta_rol= Rol::find($repuesta_rol);
        $repuesta_area= Area::all();
        return view('roles.edit')
            ->with('deptos',$repuesta_area)
            ->with('roles',$repuesta_rol);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request/* , Rol $rol */)
    {
        $data= $request->validate(
            [
              'depto' => 'required',
              'rol' => 'required|string|min:5|max:30'
            ] 
        );

        $repuesta_rol=Crypt::decryptString($request->route('rol'));
        $rol= Rol::find($repuesta_rol);

        $rol->d_rol=$data['rol'];
        $rol->area_id=$data['depto'];
        $rol->updated_at= date('Y-m-d H:i:s');
        $rol->save();

        return redirect()->action('RolController@index');
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rol $rol)
    {
        //
    }
}
