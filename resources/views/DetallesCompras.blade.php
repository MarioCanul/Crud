@extends('layouts.default')

@section('content')

<div class="col">
    <table class="table">
    <thead class="thead-dark">
        
            <tr>
                <th scope="col">Descripcion</th>
                <th scope="col">Fecha</th>
                <th scope="col">Acciones</th>
                 
              </tr>
              
         </thead>
         <tbody>
        
         <tr>
                <td>{{$Setdata->Descripcion}}</td>
                <td>{{$Setdata->created_at}}</td>
                <td> <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Dropdown button
      </button>
      
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        @auth
        <a class="dropdown-item" href="/datos/reporte/eliminarD/{{$Setdata->id}}">Eliminar</a>
        <a class="dropdown-item" href="/datos/reporte/modificarD/{{$Setdata->id}}">Modificar</a>
        @endauth
        <a class="dropdown-item" href="/datos/reporte/Detalles/{{$Setdata->id}}">Detalles</a>
     </div>
      </td>
         </tr>
        
         </tbody>
     </table>
    </div>
    @endsection