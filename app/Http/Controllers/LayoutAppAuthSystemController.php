<?php

namespace App\Http\Controllers;

use App\Models\modulo;
use Illuminate\Http\Request;

class LayoutAppAuthSystemController extends Controller
{
   public function menu_slider(){
       $modulos= modulo::all();
       return $modulos;
   }
}
