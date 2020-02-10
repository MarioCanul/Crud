@extends('layouts.default')

@section('content')
<div class="col">
    <div class="row">
        
        <label >{{$reporte->Descripcion}}</label>
        
    </div>
    <div class="row" ><h1>Reporte</h1></div>
    <div class="row">
        <table class="table">
             <thead class="thead-dark">
   
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Costo</th>
           
                </tr>
            </thead>
            <tbody>
                @foreach($Setdata as $var)
                <tr>
                    <td>{{$var->Nombre}}</td>
                    <td>{{$var->Costo}}</td>
                    <td>
                        @auth
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown button
                            
                                
                          
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">       
                            <a class="dropdown-item" href="/datos/eliminar/{{$var->id}}">Eliminar</a>
                            <a class="dropdown-item" href="/datos/modificar/{{$var->id}}">Modificar</a>
                        </div>
                        @endauth
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
    
