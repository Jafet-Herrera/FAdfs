
@if(isset($bandera))

    <div class="col-md-7 col-sm-11">
        <div class="card">
            <div class="card-title">
                <span>
                    <label for="">
                        <h2>
                            {{__('Permisos')}}
                        </h2>
                    </label>
                </span>
                <span>
                    <input type="submit" class="btn btn-outline-success" value="Guardar">
                </span>
            </div>
            <div class="card-body p-0">
                <div class="container">
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
                            <tr>
                                <input class="form-check-input @error('aplicativos') no-validate @enderror" type="hidden" name="aplicativos">
                                @error('aplicativos')
                                    <span class="invalidfeedback ps-3">
                                    <strong class="text-danger">{{$message}}</strong>
                                    </span>                       
                                @enderror  
                            </tr>
    
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
                                            <input class="form-check-input" type="checkbox" role="switch" name="flexSwitchCheckChecked{{$aplicativos->d_aplicativo}}" id="flexSwitchCheckChecked{{$aplicativos->d_aplicativo}}" value="{{$aplicativos->id}}">
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
                </div>
            </div>
        </div>
    </div>
   

@endif

