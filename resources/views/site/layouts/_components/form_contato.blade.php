{{ $slot }}
<form action={{ route('site.contato') }} method="post">
    @csrf
    <input type="text" placeholder="Nome" class="{{ $classe }}" name="nome">
    <br>
    <input type="text" placeholder="Telefone" class="{{ $classe }}" name="telefone">
    <br>
    <input type="text" placeholder="E-mail" class="{{ $classe }}" name="email">
    <br>
    <select class="{{ $classe }}" name="motivoContato">
        <option value="">Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <br>
    <textarea  name="mensagem" class="{{ $classe }}">Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>

<div style="position: absolute; top: 0; left: 0; width: 100%; background: #c96868; color:white;">
    <pre>
        {{print_r($errors)}}
    </pre>
</div>