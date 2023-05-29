<h3>Fornecedores</h3>

@isset($fornecedores)
    @forelse ($fornecedores as $fornecedor)
        <p>Iteração Atual: {{ $loop->iteration }}</p>
        <p>Fornecedor: {{$fornecedor['nome']}}</p>
        <p>Status: {{$fornecedor['status']}}</p>
        <p>CNPJ: {{$fornecedor['cnpj']  ?? "Dado não foi preenchido" }}</p>
        <p>Telefone: {{$fornecedor['ddd']  ?? "Dado não foi preenchido" }} {{$fornecedor['telefone']  ?? "Dado não foi preenchido" }}</p>
        @if($loop->first)
            <p> Primeira Iteração do loop </p>
        @endif
        @if($loop->last)
            <p> Última Iteração do loop </p>
            <p> Total de registros {{$loop->count}} </p>
        @endif
        <hr>
        @empty
            <p> Não existem fornecedores cadastrados!</p>
    @endforelse
@endisset