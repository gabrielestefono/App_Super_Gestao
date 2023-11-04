@extends('app.layouts.basico')
@section('titulo', 'Produto')
@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Editar    Produto</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{route('produto.index')}}">Voltar</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
            <form action="{{route('produto.update', ['produto' => $produto])}}" method="post">
                @csrf
                @method('PUT')
                <input type="text" value="{{$produto->nome ?? old('nome')}}" name="nome" class="borda-preta" placeholder="Nome">
                {{$errors->has('nome') ? $errors->first('nome') : ''}}
                <input type="text" value="{{$produto->descricao ?? old('descricao')}}" name="descricao" class="borda-preta" placeholder="Descrição">
                {{$errors->has('descricao') ? $errors->first('descricao') : ''}}
                <input type="text" value="{{$produto->peso ?? old('peso')}}" name="peso" class="borda-preta" placeholder="Peso">
                {{$errors->has('peso') ? $errors->first('peso') : ''}}
                <select name="unidade_id" id="">
                    <option value="">Selecione a Unidade de Medida</option>
                    @foreach ($unidades as $unidade)
                        <option value="{{$unidade->id ?? old('unidade_id')}}" {{ ($produto->unidade_id ?? old('unidade_id')) == $unidade->id ? 'selected' : ''}}>{{ $unidade->descricao }}</option>
                    @endforeach
                </select>
                {{$errors->has('unidade_id') ? $errors->first('unidade_id') : ''}}
                <button type="submit" class="borda-preta">Cadastrar</button>
            </form>
        </div>
        </div>
    </div>
@endsection