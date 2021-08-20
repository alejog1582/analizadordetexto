@extends('layouts.app')

@section('content')
    <br>    
    <h1 class="text-center" style="color: white">Ingresa la informacion para el analisis</h1>
    <br>
    <a href="/home" class="btn btn-success">Regresar</a>
    <br><br><br>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card">
                <div class="container">
                    <br>
                    <form action="/newtextprocesado" method="POST">
                        {{ csrf_field() }}
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Titulo</label>
                            <input value="{{ old('titulo') }}" type="text" name="titulo" class="form-control" id="exampleFormControlInput1" placeholder="Titulo del Analisis" @if ($errors->has('titulo')) is-invalid @endif>
                            @if ($errors->has('titulo'))
                                    @foreach ($errors->get('titulo') as $error)
                                        <h6 style="color: red">
                                            <blockquote>{{ $error }}</blockquote>
                                        </h6>
                                    @endforeach
                                @endif
                        </div>
                        <div class="mb-3">
                            <label for="texto" class="form-label">Texto a Procesar</label>
                            <textarea name="texto" class="form-control" id="exampleFormControlTextarea1" placeholder="Ingrese el texto que desea anailizar" rows="6" @if ($errors->has('texto')) is-invalid @endif>{{ old('texto') }}</textarea>
                            @if ($errors->has('texto'))
                                    @foreach ($errors->get('texto') as $error)
                                        <h6 style="color: red">
                                            <blockquote>{{ $error }}</blockquote>
                                        </h6>
                                    @endforeach
                                @endif
                        </div>
                        <button style="color: white" type="submit" class="btn btn-warning">Analizar</button>
                        <br><br>
                    </form>
                </div>
            </div>
            <br><br>
        </div>
    </div>
@endsection