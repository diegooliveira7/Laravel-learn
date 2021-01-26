<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Essa é uma configuração do materialize - CSS-->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <title>Document</title>
</head>
<body>
    {{--Essa parte vai servir como base para outras páginas referênciar--}}
    {{--Menu Topo--}}
    <nav>{{--Esse menu é basiado na documentação do materialize--}}
        <div class="container">
            <div class="nav-wrapper">
                <a href="/" class="brand-logo">Best Imóveis</a>
                <ul class="right">
                    <li>
                        <a href="#">Imóveis</a>
                    </li>
                    <li>
                        <a href="#">Cidades</a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>

    {{--Conteudo Principal--}}
    <div class="container">
        {{--Nessa parte, td vez que uma página quiser referenciar essa base é só colocar conteudo-principal--}}
        @yield('conteudo-principal')
    </div>

    <!--Essa é uma configuração do materialize - CSS para a parte do javascript-->
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
