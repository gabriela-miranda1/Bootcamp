<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;

class AutorController extends Controller
{
    public function getAll(){
        $autores = Autor::where('estado',1)->get([
            'id',
            'nombre',
            'estado'
        ]);
        return $autores;
    }

    public function getById(int $id){
        $autores = Autor::where('id',$id)->first([
            'id',
            'nombre',
            'estado'
        ]);

        return $autores;
    }

    public function create(Request $request){
        $autor = new Autor();
        $autor->nombre=$request->input('nombre');
        $autor->estado=$request->input('estado');
        $autor->save();
        return response()->json($autor,200);
    }
    public function destroy(int $id){
        $autor = Autor::where('id',$id)->first();
        $autor->estado=2;
        $autor->save();
        return response()->json($autor,200);
    }

    public function update(Request $request, int $id){
        $autor= Autor::where('id',$id)->first();

        $autor->nombre=$request->nombre;
        $autor->estado=$request->estado;
        $autor->save();

        return response()->json($autor,200);
    }

}
