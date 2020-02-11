@extends('layouts.default')
@section('content')
<div class="col">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/datos/reporte">Reportes</a></li>
        <li class="breadcrumb-item active ">Detalles</li>
        
    </ol>
    <div class="d-flex justify-content-center">
        
        
        <label ><h3><span class="badge badge-secondary">{{$reporte->Descripcion}}</span></h3></label>
        
    </div>
    <div class="row" ><label ><span class="badge badge-secondary">REPORTE</span></label></div>
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
    
