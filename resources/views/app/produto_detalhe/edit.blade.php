@extends('app.layouts.basico')
@section('titulo', 'Produto')
@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Editar Detalhes de Produto</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="">Voltar</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                <h4>Produto</h4>
                <div>
                    Nome: {{$produtoDetalhe->item->nome}}
                </div>
                <br>
                <div>
                    Descrição: {{$produtoDetalhe->item->descricao}}
                </div>
                @component('app.produto_detalhe._components.form_create_edit', ['unidades' => $unidades, 'produto_detalhe' => $produtoDetalhe])
                @endcomponent
        </div>
        </div>
    </div>
@endsection
