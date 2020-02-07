@extends('layouts.default')

@section('content')

<div class="row">
  <div class="col">
     <table class="table">
       <thead class="thead-dark">
    
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Costo</th>
            <th scope="col">Acción</th>
        </tr>
     </thead>
     <tbody>
     @foreach($Setdata as $var)
     <tr>
            <td>{{$var->Nombre}}</td>
            <td>{{$var->Costo}}</td>
            <td>

            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="/datos/eliminar/{{$var->id}}">Eliminar</a>
    <a class="dropdown-item" href="/datos/modificar/{{$var->id}}">Modificar</a>
    <a class="dropdown-item" href="/datos/VerRep/{{$var->reporte_gasto_id}}">Detalles</a>
 </div>
  </td>
     </tr>
     @endforeach
     </tbody>
    </table>
  </div>


 
 <div class="col">
 <form action="/datos/agregar/" method="POST">
 @csrf
  <div class="form-group">
    <label for="Nombre">Nombre</label>
    <input type="text" class="form-control" name="Nombre" id="Nombre" required >
    
  </div>
  <div class="form-group">
    <label for="Costo1">Costo</label>
    <input type="number" min="0" step="00.01" class="form-control" id="Costo1" name="Costo" required>
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
 

 
 </div>
  </div>
 @endsection
 
 </div>

 