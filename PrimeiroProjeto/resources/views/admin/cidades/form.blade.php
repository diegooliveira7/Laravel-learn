@extends('admin.layouts.principal')

@section('conteudo-principal')
    <section class="section">


        @if ($errors->any()){{-- Neste caso ele vai exibir as mensagens de erro que estiver nessa seção--}}
            <div class="red-text">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{route('addCidade')}}" method="POST">

            {{-- cross-site request forgery csrf--}}
            @csrf{{--É para proteger de ataques, diretiva blade--}}


            <div class="input-field">

                <input type="text" name="name" id="name"/>
                <label for="name">Name</label>
                @error('name'){{--Outra forma de se mandar mensagem de erro--}}
                    <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                @enderror
            </div>
            <div class="right-align">
                <a class="btn-flat waves-effect" href="{{url()->previous()}}">Cancel</a>
                <button class="btn waves-effect waves-ligth" type="submit">Save</button>
            </div>
        </form>

    </section>
@endsection
