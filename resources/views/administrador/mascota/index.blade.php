@extends('templates.administrador')
@section('titulo')
	<title>Bienvenido {{session()->get('administrador')->nombre}}</title>
@stop
@section('navegacion')
	<div class="row">
		<div id="navegacion" class="col s12">
			<a href="/administrador" class="breadcrumb left">Menú principal</a>
			<span class"separador">|</span>
			<a href="/administrador/mascota"> Mascotas</a>
		</div>
	</div>
	<div class="row">
		<div class="col s12">
			<h5><b>Menú de Mascotas</b></h5>
		</div>
	</div>
@stop

@section('content')
<section class="container">
		<div class="row">
			<div class="col s12 l6 offset-l3">
				<div class="card-panel form-acceso">

					@if(Session::has('error'))
						<p class="error">Usuario no encontrado</p>
					@endif
					<form class="col s12" action="/mascota" method="POST">
						{{ csrf_field() }}
						<div class="row">
							<div class="input-field col s12">
								<input type="text" class="validate" name="nombre" value="{{ old('nombre') }}" />
          						<label for="nombre">Nombre de mascota</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input type="text" class="validate" name="edad" value="{{ old('edad') }}" />
          						<label for="Edad">Edad</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input type="text" class="validate" name="tipo" value="{{ old('tipo') }}" />
          						<label for="tipo">Tipo</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input type="text" class="validate" name="color" value="{{ old('color') }}" />
          						<label for="color">Color</label>
							</div>
						</div>
						<div class="row">
							<div class="col s12">
								<button type="submit" class="waves-effect waves-light btn right cyan darken-3">Registrar</button>
								<a href="/administrador" class="btn waves-effect waves-light">Atras</a>
								
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

			<?php foreach ($mascotas as $mascota): ?>
    		<a href="/visual/<?=$mascota['id']?>"><?=$mascota['nombre']?></a>
    		  <br>
 			 <?php endforeach ?>	

	</section>
@stop