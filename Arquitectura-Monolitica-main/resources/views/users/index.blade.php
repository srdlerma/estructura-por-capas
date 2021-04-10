@extends('layouts.layouts')

@section('content')
<table class="table caption-top table-hover table-responsive-md">
    <caption>Lista de registros</caption>
    <thead class="table-dark">
        <tr>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Correo</th>
            <th>Telefono</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->names}}</td>
            <td>{{$user->last_names}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>
        </tr>
        @endforeach
        <a href="{{route('users.create')}}" class="btn btn-primary" type="submit">Agregar registro</a>
    </tbody>
</table>
@endsection
