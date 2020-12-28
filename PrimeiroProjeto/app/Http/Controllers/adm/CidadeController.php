<?php

namespace App\Http\Controllers\adm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    public function cidades(){

        $subtitulo = 'Lista de Cidades:';
        $cidades = ['Belo Horizonte', 'Recife', 'Aracaju', 'Januária', 'Brasilia'];
        return view('cidades', compact('subtitulo','cidades'));
    }
}
