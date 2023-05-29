<h3>Fornecedores</h3>

@isset($fornecedores)
    @foreach ($fornecedores as $fornecedor)
        <p>Fornecedor: {{$fornecedor['nome']}}</p>
        <p>Status: {{$fornecedor['status']}}</p>
        <p>CNPJ: {{$fornecedor['cnpj']  ?? "Dado não foi preenchido" }}</p>
        <p>Telefone: {{$fornecedor['ddd']  ?? "Dado não foi preenchido" }} {{$fornecedor['telefone']  ?? "Dado não foi preenchido" }}</p>
        <hr>
    @endforeach
@endisset