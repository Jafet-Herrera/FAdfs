@extends('layouts.app_auth_system')

@section('content')

    <br>
    {{-- @Inicio-Migajas_de_pan --}}
    <div class="container-fulid">
      <nav class="breadcrumb justify-content-start ps-4">
          <ol class="breadcrumb">
              <li class="breadcrumb-item active" href="{{route('index.modulo')}}" aria-current="page">Modulos</li>
              <li class="breadcrumb-item active" aria-current="page">Editar</li>
          </ol>
      </nav>
  </div>
  {{-- @Fin-Migajas_de_pan --}}

  <dic class="container-fluid m-0 p-0">
    <div class="row justify-content-center">
      <div class="col-md-8 ">
        
        <form action="{{route('modulo.update', ['modulo' => Crypt::encryptString($show_modulo->id)])}}" method="POST" novalidate>
          @csrf
          @method('put')

          <div class="card">
            <div class="car-header">
            <label>
              <h2 class="ms-5">
                {{__('Editar Módulo')}}
              </h2>
            </label>
          </div>
          <div class="card-body">

            {{-- @incio-Nombre-Modulo --}}
            <div class="form-group">
              <label for="modulo">
                  {{__('Modulo')}}
              </label>
              <input type="text" class="form-control @error('modulo') is-invalid @enderror" name="modulo" id="modulo" value="{{$show_modulo->d_modulo}}">
              @error('modulo')
              <span class="invalid-feedback">
                <strong>{{$message}}</strong>
              </span>                          
            @enderror
          </div>
            {{-- @Fin-Nombre-Modulo --}}

            {{-- @incio-Icono-Modulo --}}
            <div class="form-group me-3">
              <label for="icono">
                  <span>
                    {{__('Icono')}}
                  </span>
                  <span class="ps-2"> 
                    <i class="{{$show_modulo->d_icono}} p-0"></i>
                  </span>
              </label>
              <input type="text" class="form-control @error('icono') is-invalid @enderror" name="icono" id="icono" value="{{$show_modulo->d_icono}}">
              @error('icono')
              <span class="invalid-feedback">
                  <strong>{{$message}}</strong>
                </span>                          
              @enderror
            </div>
            
            <br>
            {{-- @Fin-Icono-Modulo --}}
            

            <div class="form-group me-3">
              
              <button type="submit" class="btn btn-outline-success">
                <i class="bi bi-box-arrow-in-up"></i>
                {{'Guardar'}}
              </a>
            </div>
            
          </div>


        </form>
        </div>
      </div>
    </div>
  </dic>

  @endsection


{{-- <div class="form-group">
              <label for="">
                  {{__('')}}
              </label>
              <input type="text" class="form-control @error('') is-invalid @enderror" name="" id="" value="{{old('')}}">
              @error('')
              <span class="invalid-feedback">
                <strong>{{$message}}</strong>
              </span>                          
            @enderror
            </div> --}}