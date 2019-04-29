@extends('plantilla')<!-- extension heredada plantilla principal-->
@section('seccion')<!--inicio seccion-->
<!--contenedor -->
<div class="container" style="background-color:#c1c6cc;">
	<h1 class="text-center">TARJETA PREFERENCIAL</h1>
	<hr>
	<h2 class="text-center">Administrar Afiliación</h2>
	<hr>
  <form action="" method="">
    @csrf
	<div class="row">
    <div class="col">
      <label class="col-form-label">Tipo Documento</label>
      <select class="form-control">
        <option>Seleccione</option>
        <option value="">Cedula Ciudadania</option>
        <option value="">Cedula Extranjeria</option>
        <option value="">Tarjeta Identidad</option>
      </select>
    </div>
    <div class="col">
      <label class="col-form-label">Búsqueda</label>
      <input type="text" class="form-control" name="numero_documento"
      placeholder="Ingresa numero documento">       
    </div>     
  </div>
  <hr>   
  <div class="row mt-3">
  	<div class="col">
	<button class="btn btn-info">Guardar</button>
  <hr>
	</div>	    
    </div>  
	</form>
</div> <!-- fin del contenedor -->
@endsection <!-- fin de la seccion -->