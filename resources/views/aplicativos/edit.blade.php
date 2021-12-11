@extends('layouts.app_auth_system')
    
    @section('content')
    
        <br>
        {{-- @Inicio-Migajas_de_pan --}}
    <div class="container-fulid">
        <nav class="breadcrumb justify-content-start ps-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Aplicativos</li>
                <li class="breadcrumb-item active" aria-current="page">Editar</li>
            </ol>
        </nav>
    </div>
    {{-- @Fin-Migajas_de_pan --}}
    
        <div class="container col-md-8">
            <label class="ps-2">
                <h2>
                    {{__('Editar Aplicativos')}}
                </h2>
            </label>
            <div class="card" >
                
                <div class="card-body">

                    <form action="{{route('apps.update',['aplicativo' => Crypt::encryptString($apps->id)])}}" method="POST" novalidate>
                        @csrf
                        @method('put')
                        <div class="modal-body">
                        <div class="container">
            
                            <div class="form-group">
            
                                <label for="modulo" class="form-label">{{__('Nombre de la modulo')}}</label>
                                <select name="modulo" class="form-control" id="modulo" value=" {{ old('modulo') }}">
                                    {{-- <option value="">---Selecciona---</option> --}}
                                
                                    @foreach($modulos as /* $key => */ $modulos)                                
                                    <option value="{{ /* $id */$modulos->id }}" {{ $apps->id_modulo == $modulos->id/* $id */ ? 'selected': '' }}>
                                    
                                        <span>
                                            {{ $modulos->d_modulo/* $categoria */ }} 
                                        </span>
            
                                    </option>
                                    @endforeach
                                </select>
            
                                @error('modulo')
                                <span class="invalid feedback">
                                    <strong class="text-danger">{{$message}}</strong>
                                </span>                          
                                @enderror
                            </div>
            
                            <div class="form-group mt-2">
            
                            <label for="app" class="form-label">{{__('Nombre de la app')}}</label>
                            <input type="text" class="form-control @error('app') is invalid @enderror" id="app" name="app" value="{{/* old( */$apps->d_aplicativo/* ) */}}" >
                            @error('app')
                                <span class="invalid feedback">
                                <strong class="text-danger">{{$message}}</strong>
                                </span>                          
                            @enderror
                            </div>
            
                            <div class="form-group mt-2">               
                            
                                <label for="icon" class="form-label">
                                    <span>
                                        {{__('Icono')}} 
                                    </span>
                                    <span class="ps-2">
                                        <i class="{{$apps->d_icono}}"></i>
                                    </span>
                                </label>
                                <input type="text" class="form-control  @error('icon') is invalid @enderror" id="icon" name="icon" value="{{$apps->d_icono}}" >
                                @error('icon')
                                    <span class="invalid feedback">
                                    <strong class="text-danger">{{$message}}</strong>
                                    </span>                          
                                @enderror
                            </div>
            
                            </div>

                            <div class="form-group mt-2">
            
                                <label for="ruta" class="form-label">{{__(' Ruta de la app')}}</label>
                                <input type="text" class="form-control @error('ruta') is invalid @enderror" id="ruta" name="ruta" value="{{/* old( */$apps->d_ruta/* ) */}}" >
                                @error('ruta')
                                    <span class="invalid feedback">
                                    <strong class="text-danger">{{$message}}</strong>
                                    </span>                          
                                @enderror
                                </div>
                        </div>
                        <div class="modal-footer">
                        <a role="button" href="{{route('apps.index')}}" class="text-white btn btn-danger" >
                            <i class="bi bi-x"></i>
                            {{__('Cancelar ')}}
                        </a>
                        <btn-guardar
                            app-id={{$apps->id}}
                        >

                        </btn-guardar
                        </div>
                    </form>
                </div>
            </div>
        </div>

    @endsection