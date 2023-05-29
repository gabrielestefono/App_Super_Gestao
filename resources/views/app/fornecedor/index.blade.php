<h3>Fornecedores</h3>

@isset($fornecedores)
    @for($i = 0; isset($fornecedores[$i]); $i++)
        <p>Fornecedor: {{$fornecedores[$i]['nome']}}</p>
        <p>Status: {{$fornecedores[$i]['status']}}</p>
        <p>CNPJ: {{$fornecedores[$i]['cnpj']  ?? "Dado não foi preenchido" }}</p>
        <p>Telefone: {{$fornecedores[$i]['ddd']  ?? "Dado não foi preenchido" }} {{$fornecedores[$i]['telefone']  ?? "Dado não foi preenchido" }}</p>
        <hr>
    @endfor
@endisset