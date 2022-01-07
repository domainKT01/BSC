
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

	<form>
	  <div class="row g-3 align-items-center">
  		<div class="col-auto">
    		<label for="inputEmail6" class="col-form-label">Email</label>
  		</div>
  		<div class="col-auto">
    		<input type="email" id="inputEmail6" class="form-control" aria-describedby="emailHelpInline">
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
    		<input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
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