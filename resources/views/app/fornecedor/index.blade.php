<h3>Fornecedores</h3>

@isset($fornecedores)
    @php $i = 0 @endphp
    @while(isset($fornecedores[$i]))
        <p>Fornecedor: {{$fornecedores[$i]['nome']}}</p>
        <p>Status: {{$fornecedores[$i]['status']}}</p>
        <p>CNPJ: {{$fornecedores[$i]['cnpj']  ?? "Dado não foi preenchido" }}</p>
        <p>Telefone: {{$fornecedores[$i]['ddd']  ?? "Dado não foi preenchido" }} {{$fornecedores[$i]['telefone']  ?? "Dado não foi preenchido" }}</p>
        <hr>
        @php $i++ @endphp
    @endwhile
@endisset