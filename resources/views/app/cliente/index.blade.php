@extends('app.layouts.basico')
@section('titulo', 'Cliente')
@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Listagem de Clientes</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{route('cliente.create')}}">Novo</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div style="width: 90%; margin-left: auto; margin-right: auto;">
                <table border="1" width="100%">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cliente)
                            <tr>
                                <td>{{$cliente->nome}}</td>
                                <td><a href="{{route('cliente.show', ['cliente' => $cliente])}}">Visualizar</a></td>
                                <td>
                                    <form id="form_{{$cliente->id}}" method="POST" action="{{route('cliente.destroy', ['cliente' => $cliente->id])}}">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" onclick="document.querySelector('#form_{{$cliente->id}}').submit()">Excluir</a></td>
                                    </form>
                                <td><a href="{{route('cliente.edit', ['cliente' => $cliente->id])}}" >Editar</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{$clientes->appends($request)->links()}}
                <br>
                Exibindo {{$clientes->count()}} clientes de {{$clientes->total()}}
                ({{$clientes->firstItem() ?? 0}} a {{$clientes->lastItem() ?? 0}})
        </div>
        </div>
    </div>
@endsection
