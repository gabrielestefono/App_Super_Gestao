<form action={{ route('site.contato') }} method="post">
    @csrf
    <input type="text" placeholder="Nome" class="borda-preta" name="nome">
    <br>
    <input type="text" placeholder="Telefone" class="borda-preta" name="telefone">
    <br>
    <input type="text" placeholder="E-mail" class="borda-preta" name="email">
    <br>
    <select class="borda-preta" name="motivoContato">
        <option value="">Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <br>
    <textarea  name="mensagem" class="borda-preta"  name="">Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class="borda-preta">ENVIAR</button>
</form>