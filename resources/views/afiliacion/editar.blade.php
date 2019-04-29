@extends('plantilla')<!-- extension heredada plantilla principal-->
@section('seccion')<!--inicio seccion-->
<!--contenedor -->
<div class="container" style=" background-color: #c1c6cc;"> 
<h1 class="text-center"> TARJETA PREFERENCIAL</h1>
<hr>
<h2 class="text-center">Crear Afiliación</h2>
<hr>
<form action="{{route('afiliacion.update',$afiliacion['id_afiliacion'])}}" method="POST">
  @csrf 
  @method('PUT')
<div class="row"> 
    <div class="col">
     <label class="col-form-label">Fecha Afiliación</label>
     <input type="date" class="form-control" name="fecha_afiliacion" value="{{$afiliacion->fecha_afiliacion}}">
    </div>
     <div class="col">
     <label class="col-form-label">Fecha Vencimiento</label>
     <input type="date" class="form-control" name="fecha_vencimiento" value="{{$afiliacion->fecha_vencimiento}}">
    </div>
</div>
<div class="row"> 
    <div class="col">
     <label class="col-form-label">Fecha Renovacion</label>
     <input type="date" class="form-control" name="fecha_renovacion" value="{{$afiliacion->fecha_renovacion}}">
    </div>
     <div class="col">
     <label class="col-form-label">Observacion</label>
     <input type="textarea" class="form-control" name="obs_afiliacion" value="{{$afiliacion->obs_afiliacion}}">
    </div>
</div>
<hr>
<div class="row">
    <div class="col">
  <button class="btn btn-info"><a href=""></a>Crear</button>
  <hr>
  </div>    
</div>
</div>
</div> <!-- fin del contenedor -->
@endsection <!-- fin de la seccion -->