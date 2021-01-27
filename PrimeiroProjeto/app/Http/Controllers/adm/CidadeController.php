<?php

namespace App\Http\Controllers\adm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Cidade;

class CidadeController extends Controller
{
    public function cidades(){

        $subtitulo = 'Lista de Cidades:';
        //$cidades = ['Belo Horizonte', 'Blumenal', 'Recife', 'Aracaju', 'Januária', 'Brasilia'];
        $cidades = Cidade::all();//Quando se usa esses dois pontos e o all basicamente é um comando sql select
        //dd($cidades);
        return view('admin.cidades.index', compact('subtitulo','cidades'));
    }

    public function formAdd()
    {
        return "form Add";
    }

}
