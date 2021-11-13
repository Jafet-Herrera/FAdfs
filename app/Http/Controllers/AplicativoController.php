<?php

namespace App\Http\Controllers;

use App\Models\modulo;
use App\Models\Aplicativo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class AplicativoController extends Controller
{
    //Función que permite el acceso si esta logeado
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
        $modulos=modulo::all();
        $apps = Aplicativo::all();
        return view('aplicativos.index')
            ->with('modulos',$modulos)
            ->with('apps',$apps);
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
        //Validaciones
        $data=$request->validate(
            [
                'modulo' => 'required',
                'app' => 'required|string|min:3|max:20',
                'icon' => 'required|string|min:3|max:30',
            ]
            );
        
            //Inserta datos a la bd con el modelo
        Aplicativo::create(
            [
                'modulo_id'=> $data['modulo'],
                'd_aplicativo' => $data['app'],
                'd_icono' => $data['icon']
            ]
        );

        return redirect()->action('AplicativoController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aplicativo  $aplicativo
     * @return \Illuminate\Http\Response
     */
    public function show(Aplicativo $aplicativo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aplicativo  $aplicativo
     * @return \Illuminate\Http\Response
     */
    public function edit(/* Aplicativo $aplicativo */ Request $request)
    {
        // Se obtione el atributo del request y se desencriota;
        $apps =Crypt::decryptString($request->route('aplicativo'));
        //Se busca la app en la bd por el id
        $repuesta=Aplicativo::find($apps);

        $modulos=modulo::all();

        //se envía todo el obejto del el aplicativo a la vista
        return view('aplicativos.edit')
            ->with('modulos',$modulos)
            ->with('apps',$repuesta);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aplicativo  $aplicativo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request/* , Aplicativo $aplicativo */)
    {
        $apps =Crypt::decryptString($request->route('aplicativo'));

        $data=$request->validate(
            [
                'modulo' => 'required',
                'app' => 'required|string|min:3|max:20',
                'icon' => 'required|string|min:3|max:30',
            ]
        );
        
        $app=Aplicativo::find($apps);

        $app->modulo_id= $data['modulo'];
        $app->d_aplicativo=$data['app'];
        $app->d_icono= $data['icon'];
        $app->updated_at= date('Y-m-d H:i:s');

        $app->save();

        return redirect()->action('AplicativoController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aplicativo  $aplicativo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aplicativo $aplicativo)
    {
        //
    }
}
