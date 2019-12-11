@extends('layout')
@section('contenido')
<div  id="tablasave" class="conainer">
	<div class="container-sm  text-primary">
		<h1 class="display-4">Pokemones Guardados</h1>
	</div>
	<!-- Mostramos los pokemones seleccionados y guardados -->
	<table id="poketable" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
		<thead class="bg-primary text-white">
			<tr>
				<th scope="col">Nombre</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($info as $p)
			<tr>
				<td><a href="{{route('poke.show',$p)}}">{{$p}}</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<a class="btn btn-outline-primary" href="{{ route('index') }}">Volver</a>
</div>
@stop