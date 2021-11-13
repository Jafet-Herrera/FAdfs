@php
  $titulo_modal='Nuevo aplicativo';
  $icon_titulo_modal='bi bi-app';
@endphp
@extends('layouts.modal')
                @section('modal')
                  
                  <form action="{{route('apps.store')}}" method="POST" novalidate>
                    @csrf
                    <div class="modal-body">
                      <div class="container">

                        <div class="form-group">
  
                            <label for="modulo" class="form-label">{{__('Nombre de la modulo')}}</label>
                            <select name="modulo" class="form-control" id="modulo" value=" {{ old('modulo') }}">
                                <option value="">---Selecciona---</option>
                               
                                @foreach($modulos as /* $key => */ $modulos)                                
                                <option value="{{ /* $id */$modulos->id }}" {{ old('modulo') == $modulos->id/* $id */ ? 'selected': '' }}>
                                   
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
  
                        <div class="form-group">
  
                          <label for="app" class="form-label">{{__('Nombre de la app')}}</label>
                          <input type="text" class="form-control @error('app') is invalid @enderror" id="app" name="app" value="{{old('app')}}" >
                          @error('app')
                            <span class="invalid feedback">
                              <strong class="text-danger">{{$message}}</strong>
                            </span>                          
                          @enderror
                        </div>
  
                        <div class="form-group mt-2">
  
                          <label for="icon" class="form-label">{{__('Icono')}}</label>
                          <input type="text" class="form-control  @error('icon') is invalid @enderror" id="icon" name="icon" value="{{old('icon')}}" >
                          @error('icon')
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
              @yield('modal_crear_app')