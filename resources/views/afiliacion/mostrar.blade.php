@extends('plantilla')<!-- extension heredada plantilla principal-->
@section('seccion') <!--inicio seccion-->
<!--contenedor -->
<div class="container" style="background-color: #c1c6cc;">

	<a href="{{Route('formulario.index')}}"><img src="{{asset('svg/volver.svg')}}" class="img-thumbnail" style="width: 30px; height: 30px; margin-top: 15px;"></a>
			
<h1 class="text-center">Visualizar Afiliacion</h1>
<hr>
<table id="tAfiliacion" class="table table-bordered table-striped responsive">
	<thead class="thead-dark">
		<tr class="text-center">
			<th>Accion</th>
			<th>#</th>
			<!--<th>Primer Nombre</th>
			<th>Segundo Nombre</th>
			<th>Primer Apellido</th>
			<th>Segundo Apellido</th>
			<th>Tipo Documento</th>
			<th>Numero Documento</th>-->
			<th>Fecha Afiliacion</th>
			<th>Fecha Vencimiento</th>
			<th>Fecha Renovacion</th>
			<th>Observacion Afiliacion</th>
		</tr>		
	</thead>
	<tbody>
		<!--body-->
		@foreach($afiliacion as $row)
		<tr>			
			<td class="text-center"><button class=""><a href="{{Route('afiliacion.edit',$row->id_afiliacion)}}"><img src="{{asset('svg/edit.svg')}}" style="width:20px"></a></button>
						<form action="{{Route('afiliacion.destroy',$row->id_afiliacion)}}" method="POST">
						@csrf
						@method('DELETE')					
					<button class=""><img src="{{asset('svg/eliminar.svg')}}" style="width:20px; height:20px;"></td></button></form>
			<td>{{$loop->iteration}}</td>
			<td>{{$row->fecha_afiliacion}}</td>
			<td>{{$row->fecha_vencimiento}}</td>
			<td>{{$row->fecha_renovacion}}</td>
			<td>{{$row->obs_afiliacion}}</td>			
		</tr>
	    @endforeach
	</tbody>
	</table>
</div> <!-- fin del contenedor -->
@endsection <!-- fin de la seccion -->