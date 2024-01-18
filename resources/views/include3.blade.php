<h1>Include</h1>


{{-- EXIBE --}}
<hr>
@includeWhen(true,'components.component3', ['html' => '<p>Include when True</p>'])

{{-- NÃO EXIBE --}}
@includeWhen(false,'components.component3', ['html' => '<p>Include When False</p>'])

{{-- Comportamento ao contrário do Whes --}}

<hr>
{{-- NÃO EXIBE --}}
@includeUnless(true,'components.component3', ['html' => '<p>Include Unless True</p>'])

{{-- EXIBE --}}
@includeUnless(false,'components.component3', ['html' => '<p>Include Unless False</p>'])

{{-- Exibe o primieiro que existe --}}
<hr>
@includeFirst(
    ['components.componentX', 'components.component3'],
    ['html' => '<p>Exemplo do First</p>']

    )
