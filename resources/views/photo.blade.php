
<div style="
    display: flex;
    flex-direction: row"
>
@foreach($pessoas as $p)

    {{-- Utilizando o @component --}}

    {{-- @component('components.avatar')
            @slot('image')
                {{$p['image']}}
            @endslot
            @slot('nome')
                {{$p['nome']}}
            @endslot
            @slot('idade')
                {{$p['idade']}}
            @endslot
            @slot('birth')
                {{$p['birth']}}
            @endslot
        @endcomponent --}}

    {{-- UTILIZANDO O INCLUDE - É ideal para dados staticos --}}

    @include('components.avatar',$p)


@endforeach

