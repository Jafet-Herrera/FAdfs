<?php

namespace App\Policies;

use App\Models\Rol;
use App\Models\User;
use App\Models\Aplicativo;
use Illuminate\Support\Facades\Auth;
use App\Models\PermisosRolsAplicativo;
use Illuminate\Auth\Access\HandlesAuthorization;

class PermisoRolsAplicativoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Aplicativo  $app
     * 
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(  PermisosRolsAplicativo $permisosRolsAplicativo, Aplicativo  $app)
    {
        // foreach($app->permisoAplicativoRol as $permiso){
        //     if(Auth::user()->rol_id === $permiso->rol_id){
        //         return Auth::user()->rol_id === $permiso->rol_id;
        //     }
        // }
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PermisosRolsAplicativo  $permisosRolsAplicativo
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, PermisosRolsAplicativo $permisosRolsAplicativo)
    {
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PermisosRolsAplicativo  $permisosRolsAplicativo
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, PermisosRolsAplicativo $permisosRolsAplicativo)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PermisosRolsAplicativo  $permisosRolsAplicativo
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, PermisosRolsAplicativo $permisosRolsAplicativo)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PermisosRolsAplicativo  $permisosRolsAplicativo
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, PermisosRolsAplicativo $permisosRolsAplicativo)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PermisosRolsAplicativo  $permisosRolsAplicativo
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, PermisosRolsAplicativo $permisosRolsAplicativo)
    {
        //
    }
}
