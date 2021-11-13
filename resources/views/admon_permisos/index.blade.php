@extends('layouts.app_auth_system')

@php
    $no_roles=sizeof($roles);
@endphp
    @section('content')

        <div class="container">
            <form action="{{route('permisos.store')}}" method="POST" novalidate>
               @csrf

                <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <div class="card-title">
                                <label for="">
                                    <h2>
                                        {{__('Roles')}}
                                    </h2>
                                </label>
                            </div>
                            <div class="card-body">
                                <div class="container">
                                    @error('rol')
                                    <span class="invalidfeedback ps-3">
                                      <strong class="text-danger">{{$message}}</strong>
                                    </span>                       
                                  @enderror  
                                    <table class="table">
                                        <thead>
                                            <tr>                                                
                                                <th class="text-center">
                                                    <span class="me-5">Rol</span>
                                                    <span>Total de roles: {{$no_roles}}</span>
                                                </th>
                                            </tr>  
                                                                            
                                        </thead>
                                        <tbody>
                                            @foreach($roles as /* $key =>  */$roles)
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input @error('rol') is invalid @enderror" type="radio" name="rol" value="{{$roles->id}}" id="flexRadio{{$roles->d_rol}}">
                                                            <label class="form-check-label" for="flexRadio{{$roles->d_rol}}">
                                                                {{$roles->d_rol}}
                                                            </label>
                                                        </div>                                                        
                                                    </td>
                                                </tr>                                            
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="card">
                            <div class="card-title">
                                <span>
                                    <label for="">
                                        <h2>
                                            {{__('Permisos')}}
                                        </h2>
                                    </label>
                                </span>
                                <span>
                                    <input type="submit" class="btn btn-outline-success" value="Guardar">
                                </span>
                            </div>
                            <div class="card-body">
                                <div class="container">
                                    <table class="table">
                                        <thead>
                                            <tr>                                            
                                                <th>Módulos y aplcativos</th>
                                                <th>
                                                    Acciones
                                                </th>
                                            </tr>                                     
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <input class="form-check-input @error('aplicativos') no-validate @enderror" type="hidden" name="aplicativos">
                                                @error('aplicativos')
                                                    <span class="invalidfeedback ps-3">
                                                    <strong class="text-danger">{{$message}}</strong>
                                                    </span>                       
                                                @enderror  
                                            </tr>
                                            @foreach($modulos as /* $key =>  */$modulos)
                                                <tr>  
                                                    <td>
                                                        <b>
                                                            {{$modulos->d_modulo}}
                                                        </b>                      
                                                    </td>
                                                </tr>    
                                                @foreach($modulos->aplicativos as /* $key => */ $aplicativos)
                                                    <tr>                                                   
                                                        <td>
                                                            <div class="form-check form-switch ">
                                                                <input class="form-check-input" type="checkbox" role="switch" name="flexSwitchCheckChecked{{$aplicativos->d_aplicativo}}" id="flexSwitchCheckChecked{{$aplicativos->d_aplicativo}}" value="{{$aplicativos->id}}">
                                                                <label class="form-check-label" for="flexSwitchCheckChecked{{$aplicativos->d_aplicativo}}">
                                                                    <span>
                                                                       <i class="{{$aplicativos->d_icono}}"></i>
                                                                    </span>
                                                                    <span>
                                                                        {{$aplicativos->d_aplicativo}}
                                                                    </span>
                                                                </label>
                                                              </div>
                                                        </td>
                                                        <td>
                                                            
                                                        </td>
                                                    </tr>                                        
                                                    @endforeach
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </form>
        </div>

    @endsection