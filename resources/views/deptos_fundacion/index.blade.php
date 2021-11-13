@extends('layouts.app_auth_system')

@php
  $i=0;
  
@endphp

@section( 'content')
    <br>
    {{-- @Inicio-Migajas_de_pan --}}
    <div class="container-fulid">
      <nav class="breadcrumb justify-content-start ps-4">
          <ol class="breadcrumb">
              <li class="breadcrumb-item active"{{--  href="{{route('index.modulo')}}" --}} aria-current="page">Permisos y roles</li>
              <li class="breadcrumb-item active" aria-current="page">Áreas</li>
          </ol>
      </nav>
  </div>
  {{-- @Fin-Migajas_de_pan --}}

    <br>
    <div class="container text-center">
      <div class="card">
        <div class="card-body">
          
          <div class="row mb-2 ">
              
              <span class="text-start mb-1">
                  <button type="button" class="btn btn-outline-dark p-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop"  data-bs-html="true" data-bs-toggle="tooltip"  data-bs-placement="bottom"  title="Crear">
                    <b>
                      <i class="bi bi-plus"></i>
                    </b>
                  </button>                            
              </span>

              {{-- @Inicio-Create-App --}}
              @extends('deptos_fundacion.create')

                @section('create_area')
                    
                @endsection
              {{-- @Fin-Create-App --}}

          
              <table class="table table-hover {{-- table-primary --}}">
                  <thead>
                      <th class="table-active">
                          {{__('#')}}
                      </th>
                      <th class="table-active">
                          {{__('Aplicación')}}
                      </th>
                      <th class="table-active">
                        {{__('Creado')}}
                      </th>
                      <th class="table-active">
                        {{__('Actualizado')}}
                      </th>                      
                      <th class="table-active">
                          {{__('Acciones')}}
                      </th>
                  </thead>
                  <tbody>
                      @foreach($areas as $areas)
                      <tr>
                        <td>{{($i)+1}}</td>
                        <td>{{$areas->d_area}}</td>
                        <td>{{$areas->created_at}}</td>
                        <td>{{$areas->updated_at}}</td>
                        {{-- <td>{{$areas->created_at}}</td> --}}
                        <td>
                          <div class="row">
                            <div class="col-auto">
                              @php
                                $encript=Crypt::encryptString($areas->id);
                              @endphp
                              
                              <a class="btn btn-warning" href="{{route('deptos.edit',['depto' => $encript])}}" role="button" data-bs-html="true" data-bs-toggle="tooltip"  data-bs-placement="bottom"  title="Editar">
                                <i class="bi bi-pencil"></i>
                              </a>
                            </div>
                            {{-- <div class="col-auto">
                              <button class="btn btn-danger" data-bs-html="true" data-bs-toggle="tooltip"  data-bs-placement="bottom"  title="Eliminar">
                                <i class="bi bi-trash"></i>
                              </button>
                            </div> --}}
                          </div>
                        </td>
                      </tr>              
                      @php
                        $i++;                  
                      @endphp  
                      @endforeach
                  </tbody>
              </table>
          </div>
        </div>
      </div>
@endsection