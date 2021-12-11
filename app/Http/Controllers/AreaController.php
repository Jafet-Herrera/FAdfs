<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class AreaController extends Controller
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
        $areas=Area::all();
        return view('deptos_fundacion.index')
            ->with('areas',$areas);

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
        $data=$request->validate(
            [
                'nombre_area' => 'required|string|min:4|max:30',
            ]
        );

        Area::create([
            'd_area'=> $data['nombre_area']
        ]);

         return redirect()->action('AreaController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function show(Area $area)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request/* Area $area */)
    {
        // Se obtione el atributo del request y se desencriota;
        $depto =Crypt::decryptString($request->route('depto'));
        //Se busca la app en la bd por el id
        $repuesta=Area::find($depto);
    
        return view('deptos_fundacion.edit')
        ->with('deptos',$repuesta);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Area $area)
    {
       $repuesta_decode=Crypt::decryptString($request->route('depto'));

        $data=$request->validate(
            [
                'nombre_depto' => 'required|string|min:4|max:30',
            ]
        );

        $depto=$area::find($repuesta_decode);
        $depto->d_area= $data['nombre_depto'];
        $depto->updated_at= date('Y-m-d H:i:s');

        $depto->save();
        return redirect()->action('AreaController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function destroy(Area $area)
    {
        //
    }
}
