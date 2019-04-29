@extends('plantilla')<!-- extension heredada plantilla principal-->
@section('seccion')<!--inicio seccion-->
<!--contenedor -->
<div class="container" style="background-color: #c1c6cc;">
	<h1 class="text-center">TARJETA PREFERENCIAL</h1>
	<h2 class="text-center">Datos Personales</h2>
<form action="{{route('formulario.update',$persona['id_persona'])}}" method="POST">
  @csrf
  @method('PUT')
  <div class="row">
    <div class="col">
    <label class="col-form-label">Tipo Documento</label>
        <select class="form-control" name="tipo_documento">
         <option value="">Seleccione</option>
         <option {{$persona->tipo_documento == 'CC' ? 'selected' : ''}} value="CC">CC</option>
         <option {{$persona->tipo_documento == 'CE' ? 'selected' : ''}} value="CE">CE</option>
         <option {{$persona->tipo_documento == 'NA' ? 'selected' : ''}} value="NA">NA</option>
        </select>
    </div>
    <div class="col">
      <label for="" class="col col-form-label">Numero Documento</label>
		<input type="text"class="form-control col" name="numero_documento" value="{{$persona->numero_documento}}"> 
    </div>
  </div>
  <div class="row">
    <div class="col">
      <label class="col-form-label">Primer Nombre</label>
		<input type="text" class="form-control col " name="primer_nombre" value="{{$persona->primer_nombre}}"> 
	    </div>
    <div class="col">
      <label for="" class="col col-form-label">Segundo Nombre</label>
		<input type="text" class="form-control col" name="segundo_nombre" value="{{$persona->segundo_nombre}}"> 
    </div> 
     </div>
   <div class="row">
    <div class="col">
      <label class="col-form-label">Primer Apellido</label>
    <input type="text" class="form-control col " name="primer_apellido" value="{{$persona->primer_apellido}}"> 
      </div>
    <div class="col">
      <label for="" class="col col-form-label">Segundo Apellido</label>
    <input type="text" class="form-control col" name="segundo_apellido" value="{{$persona->segundo_apellido}}"> 
    </div>
  </div>
 <div class="row">
    <div class="col">
      <label class="col-form-label">Sexo</label>
      <select class="form-control" name="sexo">
        <option>Seleccione</option>
        <option {{$persona->sexo == 'M' ? 'selected' : ''}} value="M">Masculino</option>
        <option {{$persona->sexo == 'F' ? 'selected' : ''}} value="F">Femenino</option>
      </select>
    </div>
    <div class="col">
     <label class="col-form-label">Fecha Nacimiento</label>
     <input type="date" class="form-control" name="fecha_nacimiento" value="{{$persona->fecha_nacimiento}}">
    </div>
    <div class="col">
    	<label class="col-form-label">Lugar Nacimiento</label>
      <input type="text" class="form-control" name="lugar_nacimiento" value="{{$persona->lugar_nacimiento}}">
    </div>
  </div>
  <div class="row">
  	<div class="col">
  		<label class="col-form-label">Telefono Contacto</label>
  		<input type="text" class="form-control" name="tel_contacto" value="{{$persona->tel_contacto}}">
  	</div>
  	<div class="col">
  		<label class="col-form-label">Direccion Residencia</label>
  		<input type="text" class="form-control" name="direccion" value="{{$persona->direccion}}">
  	</div>
  </div>
  <div class="form-group row">
  	<div class="col">
  		<label class="col-form-label">E-mail</label>
  		<input type="Email" class="form-control col" name="email" value="{{$persona->email}}">
  	</div>
  	<div class="col">
  		<label class="col-form-label">Entidad</label>
  		<select class="form-control" name="entidad">
              <option value="">Selecione la entidad a la que pertenece</option>  
              @foreach ($entidad as $row)
                <option {{$row->id_entidad == $persona->id_entidad ? 'selected' : ''}} value="{{$row->id_entidad}}">{{$row->nom_entidad}}</option>
              @endforeach
      </select>
  	</div>
  </div>
  <div class="row">
  	<div class="col">
	<button class="btn btn-info">Guardar</button>
	</div>		
</div>
  <hr>
  </form>
</div> <!-- fin del contenedor -->
@endsection <!-- fin de la seccion -->