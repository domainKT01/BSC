
@extends('template')

@section('title', 'Registrarse')

@section('header')

    
    <div>

		<button type="button" class="btn btn-dark">Inicio</button>

		<button type="button" class="btn btn-dark">Acerca de Nosotros</button>

		<button type="button" class="btn btn-dark">Iniciar sesion</button>

		<span><img src="banco_cordoba.png" /></span>

	</div>


@endsection

@section('main')

	<form action="{{ route('forms.store') }}" method="post">

        @csrf

      <div class="row g-3 align-items-center">
  		<div class="col-auto">
    		<label for="inputEmail6" class="col-form-label">name</label>
  		</div>
  		<div class="col-auto">
    		<input type="text" id="inputEmail6" class="form-control" aria-describedby="emailHelpInline" name="name">
  		</div>
  		<div class="col-auto">
    		<span id="emailHelpInline" class="form-text">
   				Name son of a bitch!
    		</span>
  		</div>
	  </div>    
	  <div class="row g-3 align-items-center">
  		<div class="col-auto">
    		<label for="inputEmail6" class="col-form-label">email</label>
  		</div>
  		<div class="col-auto">
    		<input type="email" id="inputEmail6" class="form-control" aria-describedby="emailHelpInline" name="email">
  		</div>
  		<div class="col-auto">
    		<span id="emailHelpInline" class="form-text">
   				your email Bitch!
    		</span>
  		</div>
	  </div>
	  <div class="row g-3 align-items-center">
  		<div class="col-auto">
    		<label for="inputPassword6" class="col-form-label">password</label>
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