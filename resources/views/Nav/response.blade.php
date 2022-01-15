@extends('template')

@section('title', 'Home')

@section('main')


<table class="table table-dark table-borderless">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">IMC</th>
            <th scope="col">volemia</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $data['namePatient'] }}</td>
            <td>{{ $data[$response] }}</td>
            <td>{{ $data[$volemia] }}</td>
        </tr>
    </tbody>
</table>
<div>
    <h1 class="display-6">Display 6</h1>
</div>
<link rel="stylesheet" type="text/css" href="apps.css" />

@endsection