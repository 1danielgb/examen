@extends('templates.website')
@section('content')		
	</br>
	<section class="container">
    	<div class="row">
    	@if(session()->has('created'))
			<p style="color:green; ">Usuario Guardado</p>
    	@endif
		    <form class="col s6" action="/mensaje" method="POST">
		    	{{csrf_field()}}
			    <center><h5> Registro</h5></center></br>
			      <div class="row">
			        <div class="input-field col s12 m6 l6 offset-m3 offset-l3">
			          <i class="fa fa-user"></i>
			          <input id="icon_prefix" type="text" class="validate" name="nombre">
			          <label for="icon_prefix"></label> 
			        </div>
					
					<div class="input-field col s12 m6 l6 offset-m3 offset-l3">
			          <i class="fa fa-envelope"></i>
			          <input id="icon_prefix" class="validate" type="email" name="email">
			          <label for="icon_prefix"></label> 
			        </div>
					
					<div class="input-field col s12 m6 l6 offset-m3 offset-l3">
			          <i class="fa fa-envelope"></i>
			          <input id="icon_prefix" class="validate" type="password" name="password">
			          <label for="icon_prefix"></label> 
			        </div>
			        
			        <div class="input-field col s12 m6 l6 offset-m3 offset-l4">
					   <button class="btn waves-effect waves-light" type="submit" name="action">enviar</button>
					</div> 
					
			      </div>
		    	
		    </form>
	  	</div>

	  	<div class="row"> 
	  		<div class="card-panel">
		  		
			</div>	
	  	</div>
	  	
    </section>
@stop