
@extends('template')

@section('title', 'Iniciar sesion')

@section('header')

	<div>
		
		<button type="button" class="btn btn-outline-dark">Inicio</button>

		<button type="button" class="btn btn-outline-dark">Acerca de Nosotros</button>

		<button type="button" class="btn btn-outline-dark">Registro</button>

	</div>

@endsection

@section('main')

	<form action="{{ route('forms.store') }}" method="POST">
		@csrf
	  <div class="row g-3 align-items-center">
  		<div class="col-auto">
    		<label for="inputEmail6" class="col-form-label">Usuario</label>
  		</div>
  		<div class="col-auto">
    		<input type="text" id="inputEmail6" class="form-control" aria-describedby="emailHelpInline" name="name">
  		</div>
  		<div class="col-auto">
    		<span id="emailHelpInline" class="form-text">
   				your email Bitch!
    		</span>
  		</div>
	  </div>
	  <div class="row g-3 align-items-center">
  		<div class="col-auto">
    		<label for="inputPassword6" class="col-form-label">Password</label>
  		</div>
  		<div class="col-auto">
    		<input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" name="password">
  		</div>
  		<div class="col-auto">
    		<span id="passwordHelpInline" class="form-text">
      			Must be 8-20 characters long.
    		</span>
  		</div>
	   </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>

@endsection