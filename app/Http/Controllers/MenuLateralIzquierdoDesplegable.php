<?php

/* namespace App\Http\Controllers;*/
use App\Models\User;

use App\Models\modulo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuLateralIzquierdoDesplegable /* extends Controller */
{
    
    public function navigationFa(){
    
        return  modulo::all();
     }

    public function dataUserMenu(){
      // User::find(Auth::user()->id);
      $la_datosUsurioOUt=array();
        if( !User::find(Auth::user())){
            
            return User::find(Auth::user());
        
        }
        else if(User::find(Auth::user()->id)){
            return User::find(Auth::user()->id);
        }


    }
   
}
 $navigationMenu = new MenuLateralIzquierdoDesplegable();
 $modulosNavigationMenu =$navigationMenu->navigationFa();

 $datosUsurio=$navigationMenu->dataUserMenu();