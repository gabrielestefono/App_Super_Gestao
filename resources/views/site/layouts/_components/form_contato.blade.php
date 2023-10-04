{{ $slot }}
<form action={{ route('site.contato') }} method="post">
    @csrf
    <input type="text" value="{{old('nome')}}" placeholder="Nome" class="{{ $classe }}" name="nome">
    <br>
    <input type="text" value="{{old('telefone')}}" placeholder="Telefone" class="{{ $classe }}" name="telefone">
    <br>
    <input type="text" value="{{old('email')}}" placeholder="E-mail" class="{{ $classe }}" name="email">
    <br>
    <select class="{{ $classe }}" name="motivoContato">
        <option value="">Qual o motivo do contato?</option>
        @foreach ($motivoContato as $key => $motivo)
            <option value="{{$key}}" {{old('motivoContato')== $key ? 'selected' : ""}}>{{$motivo}}</option>
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
