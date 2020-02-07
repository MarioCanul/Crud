@extends('layouts.default')

@section('content')

<div class="row">
<div class="col">
<table class="table">
<thead class="thead-dark">
    
        <tr>
            <th scope="col">Descripcion</th>
            <th scope="col"> <a href="/datos/"><button type="submit" class="btn btn-primary">Gastos Generales</button></a></th>
            
        </tr>
     </thead>
     <tbody>
     @foreach($Setdata as $var)
     <tr>
            <td>{{$var->Descripcion}}</td>
           
            <td>

            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="/datos/reporte/eliminarD/{{$var->id}}">Eliminar</a>
    <a class="dropdown-item" href="/datos/reporte/modificarD/{{$var->id}}">Modificar</a>
    <a class="dropdown-item" href="/datos/reporte/Detalles/{{$var->id}}">Detalles</a>
 </div>
  </td>
     </tr>
     @endforeach
     </tbody>
 </table>
</div>


 
 <div class="col">
 <form action="/datos/reporte/agregarD" method="POST">
 @csrf
  <div class="form-group">
    <label for="des">Descripcion</label>
    <input type="text" class="form-control" name="des" id="des" required >
    
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
 
 
</form>
 

 
 </div>
  </div>
 @endsection
 
 </div>
