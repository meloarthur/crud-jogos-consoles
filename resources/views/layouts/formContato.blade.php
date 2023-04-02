{{ $slot }}
<form action="{{ route('site.index') }}" method="POST">
    @csrf
    <input name="nome" type="text" placeholder="Nome *" class="borda-preta" required>
    <br>
    <input name="telefone" type="text" placeholder="Telefone *" class="borda-preta" required>
    <br>
    <input name="email" type="text" placeholder="E-mail *" class="borda-preta" required>
    <br>
    <select class="borda-preta" required>
        <option value="" selected>Qual o motivo do contato? *</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <br>
    <textarea class="borda-preta" name="mensagem" placeholder="Preencha aqui a sua mensagem"></textarea>
    <br>
    <button type="submit" class="borda-preta">ENVIAR</button>
</form>