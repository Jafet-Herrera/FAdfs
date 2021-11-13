@php
  $titulo_modal='Nuevo modulo';
  $icon_titulo_modal='bi bi-app';
@endphp

@extends('layouts.modal')
    @section('modal')
    
    
    <form action="{{route('modulo.store')}}" method="POST" novalidate>
        @csrf
        <div class="modal-body">
        <div class="container">

            <div class="form-group">

            <label for="modulo" class="form-label">{{__('Nombre del modulo')}}</label>
            <input type="text" class="form-control @error('modulo') is invalid @enderror" id="modulo" name="modulo" value="{{old('modulo')}}" >
            @error('modulo')
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
    @yield('create_modulo')

    @endsection