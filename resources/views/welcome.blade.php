@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <br>
        <div class="card">
            <div class="container">
                <h1 class="text-center">Bienvenidos al Analizador de Datos</h1>
                <p>En esta aplicacion podras anailzar textos hasta 2.048 caracteres, desglosando frecuencia de palablas encontradas, total de caracteres del texto y total de palabras unicas encontratdos en el texto. <br>Para ingresar a la aplicacion por favor loguearso y realizar el registro:</p>
                @if (Auth::check())
                    <div class="row text-center">
                        <div class="col-12">
                            <a href="/home" class="btn btn-success">Analizar Datos</a>    
                        </div>                        
                    </div>    
                @else
                    <div class="row text-center">
                        <div class="col-md-6">
                            <a href="/login" class="btn btn-success">Ingresar</a>    
                        </div>
                        <div class="col-md-6">
                            <a href="register" class="btn btn-warning" style="color: white" >Registrar</a>    
                        </div>
                    </div>
                @endif
                
            </div>
            <br>
        </div>
    </div>
</div>
@endsection