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
        return view('admin.cidades.form');
    }

    public function adicionar(Request $request){

        //Pegando o dado enviado pelo form
        //$name = $request->input('name');
        //echo $name;

        //Criar um objeto do modelo (classe) Cidade
        $cidade = new Cidade();
        $cidade->name = $request->name;

        $cidade->save();

        //Como a rota já foi chamada anteriomente, agora só redireciona

        return redirect()->route('listaCidades');
    }

}
