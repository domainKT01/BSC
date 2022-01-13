@extends('template')

@section('title', 'Home')

@section('main')

    <table class="table table-dark table-borderless">
        <thead>
            <tr>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Nombre</td>
                <td>categoria</td>
                <td>volemia</td>
            </tr>
            <tr>
                <td>@yield('Nombre')</td>
                <td>@yield('categoria')</td>
                <td>@yield('volemia')</td>
            </tr>
            <tr>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody>
    </table>
    <link rel="stylesheet" type="text/css" href="apps.css" />
@endsection