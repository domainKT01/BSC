@extends('template')

@section('title', 'Home')

@section('main')


<table class="table table-dark table-borderless">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">IMC</th>
            <th scope="col">volemia</th>
            <th scope="col">Apto?</th>
            <th scope="col">Estado</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $namePatient }}</td>
            <td>{{ $response }}</td>
            <td>{{ $volemia }}</td>
            <td>{{ $apto }}</td>
            <td>{{ $categoria }}</td>
        </tr>
    </tbody>
</table>
<link rel="stylesheet" type="text/css" href="apps.css" />

@endsection