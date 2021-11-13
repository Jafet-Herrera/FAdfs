@extends('layouts.app_auth_system')
    
    @section('content')
    
        <br>
        {{-- @Inicio-Migajas_de_pan --}}
    <div class="container-fulid">
        <nav class="breadcrumb justify-content-start ps-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Aplicativos</li>
                <li class="breadcrumb-item active" aria-current="page">Departamentos</li>
                <li class="breadcrumb-item active" aria-current="page">Editar</li>

            </ol>
        </nav>
    </div>
    {{-- @Fin-Migajas_de_pan --}}
    
        <div class="container col-md-8">
            <label class="ps-2">
                <h2>
                    {{__('Editar Departamentos Fundación')}}
                </h2>
            </label>
            <div class="card" >
                
                <div class="card-body">
                    <form action="{{route('deptos.update',['depto' => Crypt::encryptString($deptos->id)])}}" method="POST" novalidate>
                        @csrf
                        @method('put')

                        <div class="row">
                            <div class="col">
                                <div class="form-group mt-2">

                                    <label for="nombre_depto" class="form-label">{{__('Nombre del depto')}}</label>
                                    <input type="text" class="form-control @error('nombre_depto') is invalid @enderror" id="nombre_depto" name="nombre_depto" value="{{$deptos->d_area }}" >
                                    @error('nombre_depto')
                                        <span class="invalid feedback">
                                        <strong class="text-danger">{{$message}}</strong>
                                        </span>                          
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mt-2">

                                    <label for="created" class="form-label">{{__('Creado')}}</label>
                                    <input type="text" class="form-control " id="created" value="{{$deptos->created_at }}" readonly>
                                    
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mt-2">

                                    <label for="update" class="form-label">{{__('Actulizado')}}</label>
                                    <input type="text" class="form-control " id="update" value="{{$deptos->updated_at }}" readonly>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="form-group mt-4 text-center">
                            <a role="button" href="{{route('deptos.index')}}" class="text-white btn btn-danger" >
                                <i class="bi bi-x"></i>
                                {{__('Cancelar ')}}
                            </a>
                            <input 
                                type="submit"
                                class="text-white btn btn-success"
                            
                                value="Guardar"
                            >
                        </div>
                    </form>
                </div>

                </div>
            </div>
        </div>

    @endsection