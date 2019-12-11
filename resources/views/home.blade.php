@extends('layout')
@section('contenido')
<div id="tablacontainer" class="container ">
  <div class="container-sm  text-primary">
  <h1 class="display-4">Pokemones listados desde  <img src="../img/pokeapi.png" class="img-responsive" width="120" height="40" alt="Pokeapi"> </h1>
</div>
<!-- Formulario para guardar los pokemones seleccionados -->
  <form method="POST" action="{{route('Seleccionados')}}" id="formulario" class="form">
    {!! csrf_field()!!}
    <table id="poketable" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
      <thead class="bg-primary text-white">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">URL</th>
        </tr>
      </thead>
      <tbody>
        <!-- Tabla con los pokemones solicitados desde la pokeapi -->
        @foreach ($posts->results as $post)
        <tr>
          <td><input type="checkbox" id="seleccion[]" name="seleccion[]" value="{{$post->name}}"><a href="{{route('poke.show',$post->name)}}">{{strtok(substr($post->url,-4,3), "/")}}</a></td>
          <td><a href="{{route('poke.show',$post->name)}}">{{$post->name}}</a></td>
          <td>{{$post->url}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </br>
  <!-- Boton paara mostral el modal con las opciones -->
    <button type="button" id="boton" class="btn btn-primary center-block" data-target="#myModal">Mostrar Seleccionados</button>

    <!-- Modal Principal-->
    <div class="modal" id="myModal" data-backdrop="static" data-keyboard="false">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h1 class="modal-title display-4 text-primary">Seguro que desea guardar:</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>
          <!-- Modal body -->
          <div class="modal-body">
            <h3 class="mens" id="alert"></h3>
            <p  class="dem text-capitalize text-center font-weight-bold" id="demo"></p>
          </div>
          <!-- Modal footer -->
          <div class="modal-footer">
           <input  class="btn btn-success center-block" type="submit" id="guardar" value="Guardar">
           <button type="button" id="limpiar" class="btn btn-danger" data-dismiss="modal">Close</button>
         </div>
       </div>
     </div>
   </div>
</form>
</div>
@stop