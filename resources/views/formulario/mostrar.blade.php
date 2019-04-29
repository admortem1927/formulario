@extends('plantilla')<!-- extension heredada plantilla principal-->
@section('seccion')<!--inicio seccion-->
<!--contenedor -->
<div class="container" style="background-color: #c1c6cc;">
<h1 class="text-center">Listar Usuarios</h1>
<hr>
<table id="tPersona" class="table table-bordered table-responsive table-striped">
	<thead class="thead-dark">
		<tr class="text-center">
			<th>ACCION</th>
			<th>#</th>
			<th>TIPO DOCUMENTO</th>
			<th>NUMERO DOCUMENTO</th>
			<th>TIPO AFILIADO</th>
			<th>PRIMER NOMBRE</th>
			<th>SEGUNDO NOMBRE</th>
			<th>PRIMER APELLIDO</th>
			<th>SEGUNDO APELLIDO</th>
			<th>FECHA NACIMIENTO</th>
			<th>LUGAR NACIMIENTO</th>
			<th>TELEFONO</th>
			<th>DIRECCION</th>
			<th>CORREO</th>
			<th>ENTIDAD</th>
		</tr>
	</thead>
	<tbody>
			@foreach($pers as $row)
				<tr>
					<td>
						<button class="boton"><a href="{{Route('afiliacion.index')}}"><img src="{{asset('svg/afiliacion.svg')}}" style="width: 20px; height:25px;"></a></button>
						<br>
						<button><a href="{{Route('formulario.edit',$row->id_persona)}}"><img src="{{asset('svg/edit.svg')}}" style="width:20px"></a></button>
						<form action="{{Route('formulario.destroy',$row->id_persona)}}" method="POST">
						@csrf
						@method('DELETE')
						<button><img src="{{asset('svg/eliminar.svg')}}" style="width:20px; height:25px;"></button>					
						</form>						
						<!--<button><a href=""><img src="{{'svg/beneficiarios.svg'}}" style="width: 20px; height: 25px;"></a></button>--></td> 
					<td>{{$loop->iteration}}</td>
					<td>{{$row->tipo_documento}}</td>
					<td>{{$row->numero_documento}}</td>
					<td>{{$row->tipo_afiliado}}</td>
					<td>{{$row->primer_nombre}}</td>
					<td>{{$row->segundo_nombre}}</td>
					<td>{{$row->primer_apellido}}</td>
					<td>{{$row->segundo_apellido}}</td>
					<td>{{$row->fecha_nacimiento}}</td>
					<td>{{$row->lugar_nacimiento}}</td>
					<td>{{$row->tel_contacto}}</td>
					<td>{{$row->direccion}}</td>
					<td>{{$row->email}}</td>
					<td>{{$row->entidad->nom_entidad}}</td>
				</tr>
			@endforeach
	</tbody>
</table>
</div> <!-- fin del contenedor -->
@endsection <!-- fin de la seccion -->