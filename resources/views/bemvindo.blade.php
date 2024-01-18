<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <!-- Uso do Blade -->
    <h1>Bem vindo {{$nome_apelido}}</h1>
    <h2>Idade: {{$idade}}</h2>

    <!-- OPERAÇÃO -->
    1 + 1 é {{1+1}}

    <!-- COMENTARIO -->
    Comentario {{-- comentario --}}

    <!-- INTERPRETAR CSS -->
    <p>Codigo HTML {{$html}}</p>
    <p>Codigo HTML interpretado {!!$html!!}</p>

    <!-- CONDICIONAL -->

    <h1>{{$nome_apelido == 'Miquéias' ? 'Sim': 'Não'}}</h1>

    @if($nome_apelido == 'Miquéias')
    <h2>SIM É O NOME</h2>
    @elseif($nome_apelido == 'Dariel')
        <h2>Sim é Dariel</h2>
    @else
        <h2>Não é nenhum dos dois</h2>
    @endif

    <!-- LAÇO DE REPETIÇÃO -->

    @for($i=1;$i<3;$i++)
        <p> Mensagem de <b> Fulano </b></p>
        <p> Esta é uma mensagem qualquer </p> <hr />
    @endfor I

    @foreach($ingredientes as $ing)
        <p>{{$ing}} <span>DELETAR</span> </p>
    @endforeach

    <!-- COMPONENTE -->

    @foreach($ingredientes as $a => $ing)
        </p>
        {{-- Imprimir com a chave --}}
        {{$a+1}} -
        {{$ing}} -
        @component('components.botao')

        @endcomponent
        </p>
    @endforeach

    <h3>Utilizando o Slot</h3>
    @foreach($ingredientes as $ing)
    <p>
    {{$ing}} -
    @component('components.botao2')
        @slot('href')
        http://google.com.br
        @endslot
        @slot('cor')
            blue
        @endslot
        Editar
    @endcomponent

    @component('components.botao2')
        @slot('href')
        http://google.com.br
        @endslot
        @slot('cor')
            red
        @endslot
        Deletar
    @endcomponent
    </p>

    @endforeach






</body>
</html>
