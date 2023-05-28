<h3>Fornecedores</h3>

@php

// if(isset($variável)){} // Checa se a variável está definida

@endphp

@isset($fornecedores)
    <p>Fornecedor: {{$fornecedores[1]['nome']}}</p>
    <p>Status: {{$fornecedores[1]['status']}}</p>
    @isset($fornecedores[1]['cnpj'])
        <p>CPNJ: {{ $fornecedores[1]['cnpj'] }}
        @empty($fornecedores[1]['cnpj'])
            Vazio
        @endempty
        </p>
    @endisset
@endisset   