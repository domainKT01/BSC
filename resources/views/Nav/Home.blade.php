@extends('template')

@section('title', 'Home')

@section('main')

<div class="d-flex justify-content-center">
    <form action="{{ route('forms.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail2" class="form-label">Talla</label>
            <input style="font-family: cursive;" type="text" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" name="talla">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Peso</label>
            <input style="font-family: cursive;" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="peso">
        </div>
        <select class="form-select" aria-label="Default select example">
            <option selected>Sexo</option>
            <option value="1">Hombre</option>
            <option value="2">MUjer</option>
        </select>
        <button style="font-family: cursive;" type="submit" class="btn btn-primary">Calcular</button>
    </form>
</div>
<link rel="stylesheet" type="text/css" href="apps.css" />

@endsection