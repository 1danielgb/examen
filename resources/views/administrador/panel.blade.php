@extends('templates.administrador')
@section ('titulo')
	<title>Bienvenido {{session()->get('administrador')->nombre}}</title>
@stop
@section('navegacion')
	<div class="row">
		<div id="navegacion" class="col s12">
			<a href="/administrador" class="breadcrumb left">Menú principal</a>
		</div>
	</div>
	<div class="row">
		<div class="col s12">
			<h5><b>Menú principal</b></h5>
		</div>
	</div>
@stop

@section('content')
<div class="row">
	<div class="col s12 m6 l6">
		<a href="/administrador/registrar-mascota" class="item">
			<div class="card-panel grey lighten-4">
				<div class="row">
					<div class="col s2">
						<h3 class="color-item"><b><i class="fa fa-book"></i></b></h3>
					</div>
					<div class="col s10">
						<h5>
							<strong class="color-item">Mascotas</strong>
						</h5>
						<h6 class="color-subitem">Registrar mascotas</h6>
					</div>
				</div>
			</div>
		</a>
	</div>
	<div class="col s12 m6 l6">
		<a href="/" class="item">
			<div class="card-panel grey lighten-4">
				<div class="row">
					<div class="col s2">
						<h3><b><i class="fa fa-usd" aria-hidden="true"></i></b></h3>
					</div>
					<div class="col s10">
						<h5>
							<strong>Salir</strong>
						</h5>
						<h6>Salir</h6>
					</div>
				</div>
			</div>
		</a>
	</div>
<div class="row">
	<div class="col s12">
		<center>
			<p>Derechos reservados - 2016</p>
		</center>
	</div>
</div>
@stop  