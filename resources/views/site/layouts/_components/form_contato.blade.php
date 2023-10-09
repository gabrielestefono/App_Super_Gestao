{{ $slot }}
<form action={{ route('site.contato') }} method="post">
    @csrf
    <input type="text" value="{{old('nome')}}" placeholder="Nome" class="{{ $classe }}" name="nome">
    {{$errors->first('nome') ? $errors->first('nome') : ''}}
    <br>
    <input type="text" value="{{old('telefone')}}" placeholder="Telefone" class="{{ $classe }}" name="telefone">
    {{$errors->first('telefone') ? $errors->first('telefone') : ''}}
    <br>
    <input type="text" value="{{old('email')}}" placeholder="E-mail" class="{{ $classe }}" name="email">
    {{$errors->first('email') ? $errors->first('email') : ''}}
    <br>
    <select class="{{ $classe }}" name="motivo_contatos_id">
        <option value="">Qual o motivo do contato?</option>
        @foreach ($motivo_contatos as $key => $motivo_contato)
            <option value="{{$motivo_contato->id}}" {{old('motivo_contatos_id')== $motivo_contato->id ? 'selected' : ""}}>{{$motivo_contato->motivo_contato}}</option>
        @endforeach
    </select>
    {{$errors->first('motivo_contatos_id') ? $errors->first('motivo_contatos_id') : ''}}
    <br>
    <textarea  name="mensagem" class="{{ $classe }}">{{ (old('mensagem') != '') ? old('mensagem') : 'Preencha aqui  a sua mensagem'}} </textarea>
    {{$errors->first('mensagem') ? $errors->first('mensagem') : ''}}
    <br>
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>

@if($errors->any())
    <div style="position: absolute; top: 0; left: 0; width: 100%; background: #c96868; color:white;">
        @foreach ($errors->all() as $erro)
            {{$erro}} <br>
        @endforeach
    </div>
@endif
