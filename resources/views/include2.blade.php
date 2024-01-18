<h1>Include</h1>


{{-- Pelo component fica melhor pra escreve o HTML --}}
@component('components.component2')
    <hr>
    <h1> O Uso do Slot</h1>
    <p> Imprimi tudo que foi passado na tag html </p>
@endcomponent


@component('components.component2')
    <hr>
    <h2> Usando o: includeIf | includeWhen </h2>
@endcomponent

