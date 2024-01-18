@extends('layouts.app')

@section('header')
    {{-- parente é pra dizer que existe um conteúdo do layout --}}
    {{-- @parent --}}
    <x-nav>
    </x-nav>
@endsection

@section('content')
    <h1>Conteudo principal</h1>
@endsection

@section('footer')
    <x-footer>
    </x-footer>
@endsection
