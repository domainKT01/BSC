@extends('template')

@section('title', 'Iniciar sesion')

@section('header')

<div class="d-flex justify-content-center">

	<button type="button" class="btn btn-dark">Inicio</button>

	<button type="button" class="btn btn-dark">Acerca de Nosotros</button>

	<button type="button" class="btn btn-dark"> Iniciar sesion</button>

</div>

@endsection

@section('main')


<form action="{{ route('forms.store') }}" method="POST">

	@csrf

	<div class="d-flex justify-content-center">
		<div class="col-auto">
			<label id="idLabel">logueate</label>
		</div>
	</div>
	<div class="d-flex justify-content-center">
		<div class="col-auto">
			<label for="inputEmail6" class="col-form-label">name</label>
		</div>
		<div class="col-auto">
			<input type="text" id="inputEmail6" class="form-control" aria-describedby="emailHelpInline" name="name">
		</div>
	</div>
	<div class="d-flex justify-content-center">
		<div class="col-auto">
			<label for="inputPassword6" class="col-form-label">password</label>
		</div>
		<div class="col-auto">
			<input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" name="password">
		</div>
	</div>
	<div class="d-flex justify-content-center">
		<button type="submit" class="btn btn-primary" id="none">Enviar</button>
	</div>
</form>

<link rel="stylesheet" type="text/css" href="ssk.css" />

@endsection