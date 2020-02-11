@extends('layouts.default')
@section('content')
<div class="row">
 <div class="col">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/datos/reporte">Reportes</a></li>
    <li class="breadcrumb-item active">modificarD</li>
  
    
</ol>
 <form action="/datos/reporte/modificarD/{{$var->id}}" method="POST">
 @csrf
  <div class="form-group">
    <label for="des">Ddescripcion</label>
    <input type="text" class="form-control" name="des" id="des" required value="{{$var->Descripcion}}" >
    
  </div>
  <div class="form-group">
    
    <button type="submit" class="btn btn-primary">Submit</button>  <a href="/datos/reporte/"> <button type="button" class="btn btn-outline-dark">Dark</button></a>
  </div>
 
 
</form>
 


 </div>
  </div>
 
 @endsection