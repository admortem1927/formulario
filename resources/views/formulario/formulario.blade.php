@extends('plantilla')<!-- extension heredada plantilla principal-->
@section('seccion') <!--inicio seccion-->
<!--contenedor -->
<div class="container" style="background-color: #c1c6cc;">
	<h1 class="text-center">TARJETA PREFERENCIAL</h1>
  <hr>
	<h2 class="text-center">Datos Personales</h2>
  <hr>
<form action="{{route('formulario.store')}}" method="POST">
  @csrf
  <div class="row">
    <div class="col-12 col-md-12 col-lg-4 col-xl-4">
    <label class="col-form-label">Tipo Documento</label>
		    <select class="form-control" name="tipo_documento">
         <option value="">Seleccione</option>
			   <option value="CC">CC</option>
			   <option value="CE">CE</option>
			   </select>
    </div>
    <div class="col-12 col-md-12 col-lg-4 col-xl-4">
      <label for="" class="col col-form-label">Número Documento</label>
		<input type="text"class="form-control col" name="numero_documento"> 
    </div>
    <div class="col-12 col-md-12 col-lg-4 col-xl-4">
      <label for="" class="col col-form-label">Tipo Afiliado</label>
    <select class="form-control" name="tipo_afiliado">
      <option value=""> Seleccione</option>
      <option value="principal">Principal</option>
      <option value="beneficiario">Beneficiario</option>
    </select> 
    </div>
  </div>
  <div class="row">
    <div class="col-12 col-md-12 col-lg-6 col-xl-6">
      <label class="col-form-label">Primer Nombre</label>
		<input type="text" class="form-control col " name="primer_nombre"> 
	    </div>
    <div class="col-12 col-md-12 col-lg-6 col-xl-6">
      <label for="" class="col col-form-label">Segundo Nombre</label>
		<input type="text" class="form-control col" name="segundo_nombre"> 
    </div>
  </div>
   <div class="row">
    <div class="col-12 col-md-12 col-lg-6 col-xl-6">
      <label class="col-form-label">Primer Apellido</label>
    <input type="text" class="form-control col " name="primer_apellido"> 
      </div>
    <div class="col-12 col-md-12 col-lg-6 col-xl-6">
      <label for="" class="col col-form-label">Segundo Apellido</label>
    <input type="text" class="form-control col" name="segundo_apellido"> 
    </div>
  </div>
  <div class="row">
    <div class="col col-12 col-md-12 col-lg-4 col-xl-4">
      <label class="col-form-label">Sexo</label>
      <select class="form-control" name="sexo">
      	<option>Seleccione</option>
      	<option value="M">Masculino</option>
      	<option  value="F">Femenino</option>
      </select>
    </div>
    <div class="col col-12 col-md-12 col-lg-4 col-xl-4">
     <label class="col-form-label">Fecha Nacimiento</label>
     <input type="date" class="form-control" name="fecha_nacimiento">
    </div>
    <div class="col col-12 col-md-12 col-lg-4 col-xl-4 ">
    	<label class="col-form-label">Lugar Nacimiento</label>
      <input type="text" class="form-control" name="lugar_nacimiento">
    </div>
  </div>
  <div class="row">
  	<div class="col">
  		<label class="col-form-label">Telefono Contacto</label>
  		<input type="text" class="form-control" name="tel_contacto">
  	</div>
  	<div class="col">
  		<label class="col-form-label">Dirección Residencia</label>
  		<input type="text" class="form-control" name="direccion">
  	</div>
  </div>
  <div class="form-group row">
  	<div class="col">
  		<label class="col-form-label">E-mail</label>
  		<input type="Email" class="form-control col" name="email">
  	</div>
  	<div class="col">
  		<label class="col-form-label">Entidad</label>
  		<select class="form-control" name="entidad">
              <option value="">Seleccione la entidad a la que pertenece</option>  
              @foreach ($ent as $row)
                  <option value="{{$row->id_entidad}}">{{$row->nom_entidad}}</option>
              @endforeach
      </select>
  	</div>
  </div>
  <hr>
  <div class="row">
  	<div class="col">
	<button class="btn btn-info"><a href=""></a>Crear</button>
  <hr>
	</div>		
</div>
  <hr>
  </form>
</div> <!-- fin del contenedor -->
@endsection <!-- fin de la seccion -->
