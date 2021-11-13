@extends('layouts.modal')
@php
  $titulo_modal='Crear área';
  $icon_titulo_modal='';
@endphp
@section('modal')
    
    <form action="{{route('deptos.store')}}" method="POST" novalidate>
        @csrf
        <div class="modal-body">
            <div class="container">


                <div class="form-group">

                    <label for="nombre_area" class="form-label">{{__('Nombre del área')}}</label>
                    <input type="text" class="form-control @error('nombre_area') is invalid @enderror" id="nombre_area" name="nombre_area" value="{{old('nombre_area')}}" >
                    @error('nombre_area')
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
    @yield('create_nombre_area')

@endsection