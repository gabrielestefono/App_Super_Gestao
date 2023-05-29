<h3>Fornecedores</h3>

@php

// if(isset($variável)){} // Checa se a variável está definida

@endphp

@isset($fornecedores)
    <p>Fornecedor: {{$fornecedores[0]['nome']}}</p>
    <p>Status: {{$fornecedores[0]['status']}}</p>
    <p>CNPJ: {{$fornecedores[0]['cnpj']  ?? "Dado não foi preenchido" }}</p>
    <p>Telefone: {{$fornecedores[0]['ddd']  ?? "Dado não foi preenchido" }} {{$fornecedores[0]['telefone']  ?? "Dado não foi preenchido" }}</p>
    <p>
    @switch($fornecedores[0]['ddd'])
        @case('11')
            São Paulo - SP
            @break
        @case('85')
            Fortaleza - CE
            @break
        @case('32')
            Juiz de fora - MG
            @break
        @default
            Estado não identificado
    @endswitch
    </p>
@endisset