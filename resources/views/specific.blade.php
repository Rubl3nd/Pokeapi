@extends('layout')
@section('contenido')
<div class="container-sm p-3 my-3 bg-primary text-white"">
	<h1 class="text-capitalize">POKEDATOS de {{$id}}</h1>
</div>
<!-- Mostramos datos especificos de cada pokemon en un pokedex -->
<div id="pokedex" class="container">
	<div class="jumbotron">
		<div id="habilidades"class="container">
			<h6>Habilidades</h6>
			@foreach ($name->abilities as $p=>$element)
			<a class="text-capitalize text-center">{{$element->ability->name}}|</a>
			@endforeach
		</div>
		<div id="sprites"class="container">
			<h6>&nbsp &nbsp &nbsp Apariencia</h6>
			<img src="{{$name->sprites->front_default}}"height="150" width="150">
			<img src="{{$name->sprites->back_default}}" height="150" width="150">
		</div>
		<div id="nombre"class="container">
			<h6>Nombre: <a class="text-capitalize">{{$name->species->name}}</a></h6>
		</div>
		<div id="tipo"class="container">
			<h6>Tipo: <a class="text-capitalize">{{$name->types[0]->type->name}}</a></h6>
		</div>
		@if(count($name->types)>1)
		<div id="tipo2"class="container">
			<h6>Tipo: <a class="text-capitalize">{{$name->types[1]->type->name}}</a></h6>
		</div>
		@else
		<div id="tipo2"class="container">
			<h6>Tipo: </h6>
		</div>
		@endif
	</div>
	<a id="volver" class="btn btn-outline-primary"href="javascript:history.back()">Volver</a>
</div>
@stop