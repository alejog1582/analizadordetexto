<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormularioRequest;
use App\Models\Texto;
use App\Models\User;

class TextosController extends Controller
{
    public function formulario()
    {
        $usuario = \Auth::user();
        return view('formulario', [
            'usuario' => $usuario,            
         ]);
    }
    
    
    
    public function procesamiento(FormularioRequest $request)
    {
        $cadena = $request->texto;
        $cadena_sin_caracteres = RemoveSpecialChar($cadena);
        $titulo = $request->titulo;
        $textos = explode(" ", $cadena_sin_caracteres);
        return view('analisis', [
            'textos' => $textos,
            'cadena' => $cadena,
            'titulo' => $titulo,
         ]);
    }

    public function guardar(Request $request)
    {
        $usuario = \Auth::user();
        $texto = Texto::create([
            'titulo' => $request->input('titulo'),
            'texto' => $request->input('texto'),
            'id_usuario' => $usuario->id,
        ]);
        return view('guardado', [
            'texto' => $texto,            
         ]);
    }

    public function consulta($id)
    {
        $usuario = \Auth::user();
        $texto = Texto::find($id);
        $cadena = $texto->texto;
        $cadena_sin_caracteres = RemoveSpecialChar($cadena);
        $titulo = $texto->titulo;
        $id_consulta = $texto->id;
        $fecha = $texto->created_at;
        $textos = explode(" ", $cadena_sin_caracteres);
        return view('consulta', [
            'textos' => $textos,
            'cadena' => $cadena,
            'titulo' => $titulo,
            'id_consulta' => $id_consulta,    
            'fecha' => $fecha,        
         ]);
    }

    
}
