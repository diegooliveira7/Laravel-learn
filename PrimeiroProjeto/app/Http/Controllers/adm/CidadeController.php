<?php

namespace App\Http\Controllers\adm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    public function cidades(){

        $subtitulo = 'Lista de Cidades:';
        $cidades = ['Belo Horizonte', 'Blumenal', 'Recife', 'Aracaju', 'Januária', 'Brasilia'];
        return view('admin.cidades.index', compact('subtitulo','cidades'));
    }
}
