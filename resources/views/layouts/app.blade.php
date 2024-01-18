<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Layouts</title>

</head>

<body style="margin:0; padding:0;">

    <x-nav>
    </x-nav>

    {{-- <h1> Header </h1> --}}
    {{-- Utilizar o show pra renderizar --}}
    {{-- @show --}}

    <main style="padding: 20px; height: 54vh">
        {{-- yeld por padrão já exibbe o conteúdo --}}
        @yield('content')
    </main>

    <x-footer>
    </x-footer>
    @show

</body>\


