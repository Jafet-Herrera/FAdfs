@extends('layouts.app_auth_system')


@php
    $no_roles=sizeof($roles);
    
@endphp
    @section('content')

        <div class="container col-md-10 col-12">
            {{-- <form action="{{route('permisos.store')}}" method="POST" novalidate>
               @csrf --}}

                <div class="row">
                    <div class="col-11 col-md-5 mb-3 mb-md-0">
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
                                                            {{-- <input class="form-check-input @error('rol') is invalid @enderror" type="radio" name="rol" value="{{$roles->id}}" id="flexRadio{{$roles->d_rol}}"> --}}
                                                            <radio-rol id="flexRadio{{$roles->d_rol}}"
                                                                rol-id={{$roles->id}}
                                                            >
                                                            </radio-rol>
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

                    @include('admon_permisos.show'/* 'content' */)     
                                
                    
                </div>
                
        </div>

    @endsection