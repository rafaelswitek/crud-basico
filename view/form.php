<?php include __DIR__ . '/header.php'; ?>

<h1 class="text-center">Formulario</h1>

<form method="POST" action="/store">
    <div class="form-group">
        <label for="name">Nome*</label>
        <input type="text" class="form-control" name="name" value="<?= isset($client) ? $client->getName() : ''; ?>" placeholder="Nome completo" required>
    </div>
    <div class="form-group">
        <label for="email">Email*</label>
        <input type="email" class="form-control" name="email" value="<?= isset($client) ? $client->getEmail() : ''; ?>" placeholder="exemplo@email.com" required>
    </div>
    <div class="form-group">
        <label for="cpf">CPF*</label>
        <input type="text" class="form-control" name="cpf" value="<?= isset($client) ? $client->getCpf() : ''; ?>" placeholder="000.000.000-00" required>
    </div>
    <div class="form-group">
        <label for="phone">Telefone</label>
        <input type="text" class="form-control" name="phone" value="<?= isset($client) ? $client->getPhone() : ''; ?>" placeholder="(00) 0000-0000">
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
</div>

</body>

</html>