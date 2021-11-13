<?php

namespace App\Http\Controllers;

use App\Models\modulo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class ModuloController extends Controller
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
    public function index(Modulo $modulo)
    {
        $modulo=Modulo::all();
        //dd($modulo);
        return view('modulo.index')->with('modulos',$modulo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modulo.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $data=$request->validate(
            [            
                'modulo' => 'required|string|min:3|max:35',
                'icon' => 'required|string|min:3|max:20',
            ]
        );

        Modulo::create([
            'd_modulo' => $data['modulo'],
            'd_icono' => $data['icon']
        ]);

        return redirect()->action('ModuloController@index');



       
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\modulo  $modulo
     * @return \Illuminate\Http\Response
     */
    public function show(modulo  $modulo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\modulo  $modulo
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $modulo =Crypt::decryptString($request->route('modulo'));
        $repuesta=modulo::find($modulo);
        //dd($repuesta);
        
        return view('modulo.edit')->with('show_modulo',$repuesta)/* 'Desde show '*/;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\modulo  $modulo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $modulo =Crypt::decryptString($request->route('modulo'));

        $data=$request->validate(
            [            
                'modulo' => 'required|string|min:3|max:35',
                'icono' => 'required|string|min:3|max:20',
            ]
        );

        $modulo=modulo::find($modulo);

        $modulo->d_modulo= $data['modulo'];
        $modulo->d_icono= $data['icono'];
        $modulo->updated_at= date('Y-m-d H:i:s');

        $modulo->save();


        return  redirect()->action('ModuloController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\modulo  $modulo
     * @return \Illuminate\Http\Response
     */
    public function destroy(modulo $modulo)
    {
        //
    }
}
