<table class="table">
    <thead>
        <tr>                                            
            <th>Módulos y aplcativos</th>
            <th>
                Acciones
            </th>
        </tr>                                     
    </thead>
    <tbody>
        
        @foreach($modulos as /* $key =>  */$modulos)
            <tr>  
                <td>
                    <b>
                        {{$modulos->d_modulo}}
                    </b>                      
                </td>
            </tr>    
            @foreach($modulos->aplicativos as /* $key => */ $aplicativos)
                <tr>                                                   
                    <td>
                        <div class="form-check form-switch ">
                            <input class="form-check-input" type="checkbox" role="switch" name="flexSwitchCheckChecked{{$aplicativos->d_aplicativo}}" id="flexSwitchCheckChecked{{$aplicativos->d_aplicativo}}" >
                            <label class="form-check-label" for="flexSwitchCheckChecked{{$aplicativos->d_aplicativo}}">
                                <span>
                                   <i class="{{$aplicativos->d_icono}}"></i>
                                </span>
                                <span>
                                    {{$aplicativos->d_aplicativo}}
                                </span>
                            </label>
                          </div>
                    </td>
                    <td>
                        
                    </td>
                </tr>                                        
                @endforeach
        @endforeach
        
    </tbody>
</table>
@yield('modulos-apps')