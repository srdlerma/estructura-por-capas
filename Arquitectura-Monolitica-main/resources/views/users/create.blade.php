@extends('layouts.layouts')

@section('content')
    <div class="row">
        <div class="offset-xl-3 col-xl-6">
            <div class="card mt-5 container">
                <h3 class="card-title text-center mt-4 mb-2">Registrar</h3>
                <hr>
                <form class="offset-sm-3 col-sm-6" action="{{route('users.store')}}" method="post">
                    @csrf
                    <div class="form-floating mb-3 mt-2">
                        <input type="text" class="form-control" id="names" name="names" placeholder="Nombres" required>
                        <label for="names">Nombres</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="last_names" name="last_names" placeholder="Apellidos" required>
                        <label for="last_names">Apellidos</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Correo" required>
                        <label for="email">Correo</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="phone" name="phone" placeholder="Telefono" required>
                        <label for="phone">Telefono</label>
                    </div>
                    <hr>
                    <div class="offset-lg-3 offset-6 btn-group">
                        <button type="submit" class="btn btn-primary ">Guardar registro</button>
                        <a class="btn btn-danger" href="{{route('users.index')}}">Volver</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
