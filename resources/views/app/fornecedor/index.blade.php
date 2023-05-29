<h3>Fornecedores</h3>

@php

// if(isset($variável)){} // Checa se a variável está definida

@endphp

@isset($fornecedores)
    <p>Fornecedor: {{$fornecedores[0]['nome']}}</p>
    <p>Status: {{$fornecedores[0]['status']}}</p>
    <p>CNPJ: {{$fornecedores[0]['cnpj']  ?? "Dado não foi preenchido" }}</p>
@endisset