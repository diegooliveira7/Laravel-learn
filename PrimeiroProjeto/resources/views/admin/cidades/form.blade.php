@extends('admin.layouts.principal')

@section('conteudo-principal')
    <section class="section">


        <form action="{{route('addCidade')}}" method="POST">

            {{-- cross-site request forgery csrf--}}
            @csrf{{--É para proteger de ataques, diretiva blade--}}


            <div class="input-field">

                <input type="text" name="name" id="name"/>
                <label for="name">Name</label>
            </div>
            <div class="right-align">
                <a class="btn-flat waves-effect" href="{{url()->previous()}}">Cancel</a>
                <button class="btn waves-effect waves-ligth" type="submit">Save</button>
            </div>
        </form>

    </section>
@endsection
