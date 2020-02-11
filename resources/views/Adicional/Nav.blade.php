@extends('layouts.default')
<div class="row">
  <div  class="col">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">           
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href='/datos'>Gastos <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href='/datos/reporte'>Reportes</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              @guest 
              <a class="dropdown-item" href="{{ route('login')}}">Iniciar Sesion</a>
              @else
              <a class="dropdown-item" href="/datos" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">Cerrar Sesion</a> 
          </li>
          @endguest
        </ul>
        
      </div>
    </nav>
  </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> 
      {{-- Formualrio de deslogueo --}}
      @csrf
  </form>
</div>
