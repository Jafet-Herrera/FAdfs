<?php

namespace App\Http\Controllers;

use App\Models\Aplicativo;
use App\Models\modulo;
use Illuminate\Http\Request;
// use App\Http\Controllers\MenuLateralIzquierdoDesplegable;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

       
            
           
        
        return view('home');
        //  -> with('modulos',Controller::navigationFa());
    }
}
