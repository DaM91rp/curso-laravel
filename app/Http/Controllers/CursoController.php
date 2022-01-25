<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    //Metodo para mostrar la pagina principal se le llama index
    public function index(){
        return view('cursos.index');
    }

    //Metodo para crear se le llama create
    public function create(){
        return view('cursos.create');
    }

    //Metodo para mostrar un curso o algo en particula se le llama show
    public function show($curso){
        //compact('curso') -> ['curso' => $curso]
        return view('cursos.show',compact('curso'));
    }
}
