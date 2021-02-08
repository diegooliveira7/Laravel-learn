<?php

namespace App\Http\Controllers\adm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\CidadeRequest;//é uma requisição customizada onde dentro dela tem comandos para validar
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

    public function adicionar(CidadeRequest $request){//troco aq para cidade Request

        //Pegando o dado enviado pelo form
        //$name = $request->input('name');
        //echo $name;

        //Criar um objeto do modelo (classe) Cidade
        //$cidade = new Cidade();
        //$cidade->name = $request->name;

        //$cidade->save();

        //Antes de salvar é interessante se verificar se os dados que estão sendo salvos é realmente válidos
        //Para isso o laravel tras uns recusos próprio dele

       // $request->validate([//Aqui dentro serão colocados tds as regras para validar
            //bail = é para que qualquer regra que falhe n precisar proceguir
            //unique = sobre ser unico no banco de dados, e tem que especificar qual a tabelas em que quer que se faz a consulta
         //   'name' => 'bail|required|min:3|max:100|unique:cidades'
            //só possui o campo nome no meu formulário, mas se tivesse outro era só colocar uma virgula
        //]);

        //Salvando em forma de atribuição em massa
        Cidade::create($request->all());//não precisa mais de digitar cada campo da tabela

        //Como a rota já foi chamada anteriomente, agora só redireciona

        //Esse comando é para quando salvar e carregar a seção ele resgatar o nome e mostrar para o usuário
        //O flash só guarda para apróxima sessão, se recarregar a página novamente ele irá sumir
        $request->session()->flash('sucesso',"Cidade $request->name salva com sucesso");

        return redirect()->route('listaCidades');
    }

}
