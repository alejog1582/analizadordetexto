@extends('layouts.app')

@section('content')
    <br>    
    <h1 class="text-center" style="color: white">Resultado del Analisis </h1>
    <br>
    <a href="/newtexto" class="btn btn-success">Deshaser</a>
    <br><br><br>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card">
                <div class="container">
                    <br>
                    <h2>Titulo</h2>
                    <h4>{{$titulo}}</h4>
                    <br>
                    <h2>Texto Anailizado</h2>
                    <p>{{$cadena}}</p>
                    <hr>
                    <h2>Resumen Analisis</h2>
                    <br>
                    <p><b>Frecuencias de palabras encontradas:</b>  
                        <?php
                            $array_unique = array_unique($textos);
                            foreach ($array_unique as $key) {
                                echo($key . " (" . substr_count($cadena, $key) . "), " );
                            }
                            
                        ?>
                    </p>
                    <br>
                    <p><b>Total caracteres del texto: </b>
                        <?php
                            echo strlen($cadena) . " caracteres";
                        ?>
                    </p>
                    <br>
                    <p>
                        <b>Total palabras únicas encontradas en el texto:</b>  
                        <?php
                            $conteo = 0;
                            $array_unique = array_unique($textos);
                            foreach ($array_unique as $key) {
                                if (substr_count($cadena, $key) === 1) {
                                    $conteo = $conteo + 1;
                                }                               
                            }
                            echo($conteo . " palabras.");
                        ?>
                    </p>
                    <form action="/newtextprocesadosave" method="POST">
                    {{ csrf_field() }}
                        <input type="hidden" value="{{$titulo}}" name="titulo">
                        <input type="hidden" value="{{$cadena}}" name="texto">
                        <button style="color: white" type="submit" class="btn btn-warning">Guardar</button>
                        <br><br>
                    </form>
                </div>
            </div>
            <br><br>
        </div>
    </div>    
@endsection
