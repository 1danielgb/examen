@extends('templates.administrador')
@section('titulo')
	<title><?=$mascota['nombre']?></title>
@stop
@section('navegacion')
@stop
		
@section('content')
	<section>
		<center>
			<h3>Detalle mascota</h3>
			</br>
				Nombre: <?=$mascota['nombre']?>
				<br>
				Edad: <?=$mascota['edad']?>
				<br>
				Tipo: <?=$mascota['tipo']?>
				<br>
				Color: <?=$mascota['color']?>
				<br>
				<a href="/administrador/registrar-mascota" class="btn waves-effect waves-light">Atras</a>

		</center>
	</section>
@stop