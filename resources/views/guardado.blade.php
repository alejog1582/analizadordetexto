@extends('layouts.app')
@section('script')
    @endsection
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm">
            <br>
            <div class="card tarjeta_azul">
                <div class="card-body text-center">
                    El analisis del texto a sido guardado con exito con el usuario <b>{{$texto->usuario->email}}</b> 
                    <br><br>
                    <a href="/home" class="btn btn-success">Aceptar</a>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>


@endsection

