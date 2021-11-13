@php
  $titulo_modal='Crear Rol';
  $icon_titulo_modal='bi bi-person-rolodex';
@endphp
@extends('layouts.modal')
                @section('modal')
                  
                  <form action="{{route('roles.store')}}" method="POST" novalidate>
                    @csrf
                    <div class="modal-body">
                      <div class="container">

                        <div class="form-group">
  
                            <label for="depto" class="form-label">{{__('Nombre del departamento')}}</label>
                            <select name="depto" class="form-control" id="depto" value=" {{ old('depto') }}">
                                <option value="">---Selecciona---</option>
                               
                                @foreach($deptos as /* $key => */ $deptos)                                
                                <option value="{{ /* $id */$deptos->id }}" {{ old('depto') == $deptos->id/* $id */ ? 'selected': '' }}>
                                   
                                    <span>
                                        {{ $deptos->d_area/* $categoria */ }} 
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
  
                          <label for="rol" class="form-label">{{__('Nombre del rol')}}</label>
                          <input type="text" class="form-control @error('rol') is invalid @enderror" id="rol" name="rol" value="{{old('rol')}}" >
                          @error('rol')
                            <span class="invalid feedback">
                              <strong class="text-danger">{{$message}}</strong>
                            </span>                          
                          @enderror
                        </div>
  
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                        <i class="bi bi-x"></i>
                        {{__('Cancelar ')}}
                      </button>
                      <button type="submit" class="btn btn-success">
                        {{__('Guardar')}}
                      </button>
                    </div>
                </form>
              @endsection
              @yield('modal_crear_rol')