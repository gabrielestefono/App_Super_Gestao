{{ $slot }}
<form action={{ route('site.contato') }} method="post">
    @csrf
    <input type="text" value="{{old('nome')}}" placeholder="Nome" class="{{ $classe }}" name="nome">
    <br>
    <input type="text" value="{{old('telefone')}}" placeholder="Telefone" class="{{ $classe }}" name="telefone">
    <br>
    <input type="text" value="{{old('email')}}" placeholder="E-mail" class="{{ $classe }}" name="email">
    <br>
    <select class="{{ $classe }}" name="motivo_contato">
        <option value="">Qual o motivo do contato?</option>
        @foreach ($motivo_contatos as $key => $motivo_contato)
            <option value="{{$motivo_contato->id}}" {{old('motivo_contato')== $motivo_contato->id ? 'selected' : ""}}>{{$motivo_contato->motivo_contato}}</option>
        @endforeach
    </select>
    <br>
    <textarea  name="mensagem" class="{{ $classe }}">{{ (old('mensagem') != '') ? old('mensagem') : 'Preencha aqui  a sua mensagem'}} </textarea>
    <br>
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>

<div style="position: absolute; top: 0; left: 0; width: 100%; background: #c96868; color:white;">
    <pre>
        {{ print_r($errors) }}
    </pre>
</div>
