@php

    include '../app/Http/Controllers/MenuLateralIzquierdoDesplegable.php';

@endphp
{{-- {{$datosUsurio}} --}}
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        {{-- {{$modulos->aplicativos}} --}}
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-lg">
            <div class="container-fluid">
                @guest
                    @else
                        <div class="col-auto">    
                            <a data-bs-toggle="offcanvas" href="#MenuLateralOffcanvas" role="button" aria-controls="MenuLateralOffcanvas">
                                <i class="text-dark bi bi-list size-icons"></i>
                            </a>
                        </div>
                @endguest
                <div class="col col-md-10 text-center">
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        <span>
                            <img class="size-icon-FAJ" src="{{asset('images/logo_FAJ_sin_fondo_sin_letras.png')}}"  alt="">
                        </span>
                        <span>
                            <h1 class="d-inline">
                                {{ config('app.name', 'Laravel') }}
                            </h1>
                        </span>
                    </a>

                </div>
                @guest
                    @else
                        {{-- @InicioAcciones --}}
                        <div class="col-auto text-end m-2">
                            <span class="me-3 ">
                                <a 
                                    href="#"
                                    role="button"
                                    {{-- data-bs-html="true" --}}
                                    data-bs-toggle="tooltip" 
                                    data-bs-placement="bottom"
                                    title="Notificaciones"
                                >
                                    <i class="text-dark bi bi-bell size-icons"></i>
                                </a>
                            </span>
                            <span class="me-3">
                                <a 
                                    href="#"
                                    role="button"
                                    data-bs-html="true"
                                    data-bs-toggle="tooltip" 
                                    data-bs-placement="bottom"
                                    title="Guía de usuario"
                                >
                                    <i class="text-dark bi bi-question-circle size-icons"></i>
                                </a>
                            </span>
                            <span>
                                <strong>
                                    <a 
                                        role="button"
                                        href="{{ route('logout') }}"
                                        onclick="event.preventDefault();document.getElementById('logout-form').submit();" 
                                        data-bs-html="true"
                                        data-bs-toggle="tooltip" 
                                        data-bs-placement="bottom"
                                        title="cerrar sesión"
                                    >
                                        <i class="text-dark bi bi-box-arrow-right size-icons"></i>
                                    </a>
                                </strong>
                            </span>  
                        </div>
                        {{-- @FinAcciones --}}

                @endguest                
            </div>
        </nav>

        {{-- @Inicio_MenuLateralOffcanvas --}}
        <article>

            {{-- <div >
    
            </div>
            <div class="mt-2">
                <h2 class="text-dark">
                    {{$datosUsurio->d_nombre}}
                </h2>
                <h3>
                    <span>{{__('Rol:')}}</span>
                    <span> {{$datosUsurio->rol_id}}</span>
                </h3>
            </div> --}}

            <div class="offcanvas offcanvas-start p-0" tabindex="-1" id="MenuLateralOffcanvas" aria-labelledby="MenuLateralOffcanvas">
                <div class="offcanvas-header p-0" id="offcavasHeader-bg-appAuthSystem">
                    @if($datosUsurio != null)

                    <div class="container-fluid ps-1 mt-1 mb-2">
                        <div class="row">
                            <div class="col-5 mt-xxl-4">
                                <img {{-- src="/storage/{{$usuario->t_imgUsu}}" --}}src="/storage/images/avatars/undraw_female_avatar_w3jk.png" class="avatar-for-edit-profile-user" alt="" {{-- style="width: 300px; border-radius:15rem" --}} >
                            </div>
                            <div class="col-5">
                                <div class="mt-5">
                                    <h2 class="text-dark">
                                        {{$datosUsurio->d_nombre}}
                                    </h2>
                                    <h3 >
                                        <span>{{__('Rol:')}}</span>
                                        <span class="font_rolAvatar"> {{$datosUsurio->rol_id}}</span>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-auto">
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                        </div>
                    </div>
                        
                    @endif

                </div>
                <div class="offcanvas-body">

                    <div class="container-fluid">
                        <a href="{{ url('/home') }}" class="nav-link p-0" id=Navigators>
                            <div class="text-dark m-0">
                                <span class="me-2">
                                    <i class="bi bi-speedometer"></i>
                                </span>
                                <span>
                                    <h2 class="d-inline">
                                        {{__('Tablero')}}
                                    </h2>
                                    </span>                                
                                
                                </div>
                        </a> 
                        {{-- <hr class="mt-0"> --}}
                    </div>  

 
                    @foreach($modulosNavigationMenu as /* $key =>  */$modulos)

                        {{-- @Inicio-Web --}}
                        <div class="container-fluid mt-2">
                        <a role="button" data-bs-toggle="collapse" href="#web-{{$modulos->id}}-Collapse" aria-expanded="false" aria-controls="web-{{$modulos->id}}-Collapse" class="nav-link p-0 ">
                            <div class="text-dark Navigators-mods m-0 ">
                                <span class="me-2">
                                    <i class="{{$modulos->d_icono}}"></i>
                                </span>
                                <span>
                                    <h2 class="d-inline">
                                        {{$modulos->d_modulo}}
                                    </h2>
                                </span>                              
                            </div>
                        </a> 
                        

                        @foreach($modulos->aplicativos as /* $key =>  */$aplicativos)
                        <div class="collapse ms-4 Navigators-apps" id="web-{{$modulos->id}}-Collapse">    
                            <a href="{{url($aplicativos->d_ruta)}}" class="text-dark m-0 nav-link">
                                <span class="me-2">
                                    <i class="{{$aplicativos->d_icono}}"></i>
                                </span>
                                <span>
                                    <h3 class="d-inline">
                                        {{$aplicativos->d_aplicativo}}
                                    </h3>
                                </span>                              
                            </a>
                        </div>
                        
                        @endforeach
                    </div> 
                    {{-- @Fin-Web --}}
                    
                    
                    @endforeach
                    <hr class="mt-2">


                    {{-- @Inicio-Fundación --}}
                   {{--  <div class="container-fluid mt-2">
                        <a href="{{ url('/home') }}" class="nav-link p-0">
                            <div class="text-dark m-0">
                                <span class="me-2">
                                    <i class="bi bi-shop"></i>
                                </span>
                                <span>
                                    <h2 class="d-inline">
                                        {{__('Fundación')}}
                                    </h2>
                                    </span>                                
                                
                                </div>
                        </a> 
                        <hr class="mt-0">
                    </div>  --}}
                    {{-- @Fin-Fundación --}}
                    
                    {{-- @Inicio-Usuarios --}}
                   {{--  <div class="container-fluid">
                        <a href="{{ url('/home') }}" class="nav-link p-0">
                            <div class="text-dark m-0">
                                <span class="me-2">
                                    <i class="bi bi-people"></i>
                                </span>
                                <span>
                                    <h2 class="d-inline">
                                        {{__('Usuarios')}}
                                    </h2>
                                    </span>                                
                                
                                </div>
                        </a> 
                        <hr class="mt-0">
                    </div>  --}}
                    {{-- @Fin-Usuarios --}}

                    {{-- @Inicio-News --}}
                   {{--  <div class="container-fluid">
                        <a href="{{ url('/home') }}" class="nav-link p-0">
                            <div class="text-dark m-0">
                                <span class="me-2">
                                    <i class="bi bi-newspaper"></i>
                                </span>
                                <span>
                                    <h2 class="d-inline">
                                        {{__('News')}}
                                    </h2>
                                    </span>                                
                                
                                </div>
                        </a> 
                        <hr class="mt-0">
                    </div>  --}}
                    {{-- @Fin-News --}}                    

                    {{-- @Inicio-Adopción --}}
                   {{--  <div class="container-fluid">
                        <a href="{{ url('/home') }}" class="nav-link p-0">
                            <div class="text-dark m-0">
                                <span class="me-2">
                                    <i class="bi bi-basket"></i>
                                </span>
                                <span>
                                    <h2 class="d-inline">
                                        {{__('Adopciones')}}
                                    </h2>
                                    </span>                                
                                
                                </div>
                        </a> 
                        <hr class="mt-0">
                    </div>  --}}
                    {{-- @Fin-Adopción --}}

                    {{-- @Inicio-Configuraciones --}}
                    {{-- <div class="container-fluid">
                        <a href="{{ url('/home') }}" class="nav-link p-0">
                            <div class="text-dark m-0">
                                <span class="me-2">
                                    <i class="bbi bi-tools"></i>
                                </span>
                                <span>
                                    <h2 class="d-inline">
                                        {{__('Configuraciones')}}
                                    </h2>
                                    </span>                                
                                
                                </div>
                        </a> 
                        <hr class="mt-0">
                    </div>  --}}
                    {{-- @Fin-Configuraciones --}}

                    {{-- @Inicio-Configuraciones --}}
                    {{-- <div class="container-fluid">
                        <a href="{{ url('/home') }}" class="nav-link p-0">
                            <div class="text-dark m-0">
                                <span class="me-2">
                                    <i class="bi bi-bug"></i>
                                </span>
                                <span>
                                    <h2 class="d-inline">
                                        {{__('Fallas')}}
                                    </h2>
                                    </span>                                
                                
                                </div>
                        </a> 
                        <hr class="mt-0">
                    </div>  --}}
                    {{-- @Fin-Configuraciones --}}

                </div>
            </div>
        </article>
        {{-- @Fin_MenuLateralOffcanvas --}}


        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
