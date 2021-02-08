@extends('admin.layouts.principal')
{{--Esse docuemnto referencia o yield do docuemneto principal--}}
@section('conteudo-principal')

    <section class="section"{{--Configuração do materialize--}}>

        <table class="highlight">
            <thead>
                <tr>
                    <th>Cidades</th>
                    <th class="right-align">Opções</th>
                </tr>

            </thead>

            <tbody>

                @forelse ($cidades as $cidade)
                    <tr>
                        <td>{{$cidade->name}}</td>

                        <td class="right-align">Excluir - Remover</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2">Não existe cidades cadastradas</td>
                    </tr>

                @endforelse
            </tbody>
        </table>

        <div class="fixed-action-btn">
            <a class="btn-floating btn-large waves-effect waves-light" href="{{route('formAdd')}}"><!--Dessa forma eu estou lincando pelo nome da rota e não endereço da rota-->
                <i class="large material-icons">add</i>
            </a>
        </div>
        {{--Serve para verificar se exixte algum dado salvo na sessão--}}

    </section>
@endsection
