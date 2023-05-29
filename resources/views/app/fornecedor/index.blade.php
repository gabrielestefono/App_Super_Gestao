<h3>Fornecedores</h3>

@isset($fornecedores)
    @forelse ($fornecedores as $fornecedor)
        <p>Fornecedor: @{{$fornecedor['nome']}}</p>
        <p>Status: {{$fornecedor['status']}}</p>
        <p>CNPJ: {{$fornecedor['cnpj']  ?? "Dado não foi preenchido" }}</p>
        <p>Telefone: {{$fornecedor['ddd']  ?? "Dado não foi preenchido" }} {{$fornecedor['telefone']  ?? "Dado não foi preenchido" }}</p>
        <hr>
        @empty
            <p> Não existem fornecedores cadastrados!</p>
    @endforelse
@endisset