@extends('layouts.default')
@section('content')
<div class="row">

 <div class="col">
 <form action="/modificar/{{$var->id}}" method="POST">
 @csrf
  <div class="form-group">
    <label for="Nombre">Nombre</label>
    <input type="text" class="form-control" name="Nombre" id="Nombre" required value="{{$var->Nombre}}" >
    
  </div>
  <div class="form-group">
    <label for="Costo1">Costo</label>
    <input type="number" min="0" step="00.01" class="form-control" id="Costo1" name="Costo" required value="{{$var->Costo}}">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>  <a href="/datos/"> <button type="button" class="btn btn-outline-dark">Dark</button></a>
</form>
 


 </div>
  </div>
 
 @endsection