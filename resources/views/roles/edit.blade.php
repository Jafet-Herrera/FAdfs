@extends('layouts.app_auth_system')
    
    @section('content')

        {{-- @Inicio-Migajas_de_pan --}}
    <div class="container-fulid">
        <nav class="breadcrumb justify-content-start ps-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Permisos y roles</li>
                <li class="breadcrumb-item active" href="{{route('roles.index')}}" aria-current="page">Roles</li>
                <li class="breadcrumb-item active" aria-current="page">Editar</li>
            </ol>
        </nav>
    </div>
    {{-- @Fin-Migajas_de_pan --}}
    
    <div class="container col-md-8">
        <label class="ps-2">
            <h2>
                {{__('Editar Roles')}}
            </h2>
        </label>
        <div class="card" >
            
            <div class="card-body">

                <form action="{{route('roles.update',['rol' => Crypt::encryptString($roles->id)])}}" method="POST" novalidate>
                    @csrf
                    @method('put')
                    <div class="modal-body">
                    <div class="container">

                        
                        <div class="form-group mt-2">
            
                            <label for="rol" class="form-label">{{__('Nombre de la rol')}}</label>
                            <input type="text" class="form-control @error('rol') is invalid @enderror" id="rol" name="rol" value="{{$roles->d_rol}}" >
                            @error('rol')
                                <span class="invalid feedback">
                                <strong class="text-danger">{{$message}}</strong>
                                </span>                          
                            @enderror
                        </div>
        
                        <div class="form-group mt-2">
        
                            <label for="depto" class="form-label">{{__('Nombre de la depto')}}</label>
                            <select name="depto" class="form-control" id="depto" value=" {{ old('depto') }}">
                                <option value="">---Selecciona---</option>
                                @foreach($deptos as /* $key => */ $depto)                                
                                    <option value="{{ /* $id */$depto->id }}" {{ $roles->area_id == $depto->id/* $id */ ? 'selected': '' }}>
                                        <span>
                                            {{ $depto->d_area/* $categoria */ }} 
                                        </span>
                                    </option>
                                @endforeach
                            </select>
                            @error('depto')
                                <span class="invalid feedback">
                                    <strong class="text-danger">{{$message}}</strong>
                                </span>                          
                            @enderror
                        </div>
        
        
                        <div class="form-group mt-2">  
                             
                            <div class="row">
                                <div class="col">
                                    <label >{{__('Fecha de creación')}}</label>
                                    <input type="text" class="form-control" value="{{$roles->created_at}}" readonly>
                                </div>
                                <div class="col">
                                    <label >{{__('Fecha de actualización')}}</label>
                                    <input type="text" class="form-control" value="{{$roles->updated_at}}" readonly>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer mt-3">
                    <a role="button" href="{{route('roles.index')}}" class="text-white btn btn-danger" >
                        <i class="bi bi-x"></i>
                        {{__('Cancelar ')}}
                    </a>
                    {{-- <btn-guardar
                        app-id={{$apps->id}}
                    ></btn-guardar> --}}
                    <input type="submit" class="text-white btn btn-success" value="Guardar">
                    </div>
                </form>
            </div>
        </div>
    </div>
        

    @endsection