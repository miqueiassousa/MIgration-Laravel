<h1>Include 1</h1>

{{-- Passando o html dentro do include --}}
@include(
    'components.component1', [
            'pessoas' => [
                'Nome' => 'Miquéias',
                'Idade' => '35',
                'Cidade' => 'Conquista',
                'Curso' => 'TI'
            ]
    ]

)


