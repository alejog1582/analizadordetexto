@extends('layouts.app')

@section('content')
    <br>    
    <h1 class="text-center" style="color: white">Bienvenido {{$usuario->name}}</h1>
    <br>
    <a href="/newtexto" class="btn btn-success" >Procesar nuevo texto</a>
    <div class="row">
        <div class="col">
            <div class="container">
                <br>
                <table class="table table-dark table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Titulo</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Accion</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($textos as $texto)
                            @if ($usuario->id === $texto->id_usuario)
                                <tr>
                                    <td>{{$texto->titulo}}</th>
                                    <td>{{$texto->created_at}}</td>
                                    <td><a href="/home/consulta/{{$texto->id}}">Ver</a></td>                                    
                                </tr>                                
                            @endif
                        @endforeach
                    </tbody>
                </table>                
            </div>
        </div>
    </div>
@endsection
