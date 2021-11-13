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
              <li class="breadcrumb-item active" {{-- href="{{route('index.modulo')}}" --}} aria-current="page">Permisos y roles</li>
              <li class="breadcrumb-item active" aria-current="page">Roles</li>
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
                  <button type="button" class="btn btn-outline-dark p-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop"  data-bs-html="true" data-bs-toggle="tooltip"  data-bs-placement="bottom"  title="Nuevo">
                    <b>
                      <i class="bi bi-plus"></i>
                    </b>
                  </button>                            
              </span>

              {{-- @Inicio-Create-App --}}
              @extends('roles.create')

                @section('modal_crear_rol')
                    
                @endsection
              {{-- @Fin-Create-App --}}

          
              <table class="table table-hover {{-- table-primary --}}">
                  <thead>
                      <th class="table-active">
                          {{__('#')}}
                      </th>
                      <th class="table-active">
                          {{__('Rol')}}
                      </th>
                      <th class="table-active">
                        {{__('Departamento')}}
                    </th>
                      <th class="table-active">
                        {{__('Fecha de creación')}}
                      </th>
                      <th class="table-active">
                        {{__('Feacha actualización')}}
                      </th>                
                      <th class="table-active">
                          {{__('Acciones')}}
                      </th>
                  </thead>
                  <tbody>
                      @foreach($roles as $roles)
                      <tr>
                        <td>{{($i)+1}}</td>
                        <td>{{$roles->d_rol}}</td>
                        <td>{{$roles->deptos->d_area}}</td>
                        <td>{{$roles->created_at}}</td>
                        <td>{{$roles->updated_at}}</td>
                        <td>
                          <div class="row">
                            <div class="col-auto">
                              @php
                                $app_encript=Crypt::encryptString($roles->id);
                              @endphp
                              
                              <a class="btn btn-warning" href="{{route('roles.edit',['rol' => $app_encript])}}" role="button" data-bs-html="true" data-bs-toggle="tooltip"  data-bs-placement="bottom"  title="Editar">
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