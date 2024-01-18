<p> Include Hello World - INCLUDE 1  </p>

{{-- {{$nome}} <br>
{{$idade}} <br>
{{$cidade}} <br>
{{$curso}} <br> --}}

@foreach($pessoas as $chave => $valor)
        </p>
        {{-- Imprimir com a chave --}}

        {{$chave}} -
        {{$valor}}
        </p>
    @endforeach



