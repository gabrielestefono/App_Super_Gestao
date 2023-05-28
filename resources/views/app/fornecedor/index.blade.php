<h3>Fornecedores</h3>

<p>Fornecedor: {{$fornecedores[0]['nome']}}</p>
<p>Status: {{$fornecedores[0]['status']}}</p>

@unless($fornecedores[0]['status'] == 'S')
<p> Fornecedor Inativo </p>
@endunless