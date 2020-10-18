<?php include __DIR__ . '/header.php'; ?>

<h1 class="text-center">Formulario</h1>

<form method="POST" action="#">
    <div class="form-group">
        <label for="name">Nome*</label>
        <input type="text" class="form-control" name="name" placeholder="Nome completo" required>
    </div>
    <div class="form-group">
        <label for="email">Email*</label>
        <input type="email" class="form-control" name="email" placeholder="exemplo@email.com" required>
    </div>
    <div class="form-group">
        <label for="cpf">CPF*</label>
        <input type="text" class="form-control" name="cpf" placeholder="000.000.000-00" required>
    </div>
    <div class="form-group">
        <label for="phone">Telefone</label>
        <input type="text" class="form-control" name="phone" placeholder="(00) 0000-0000">
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
</div>

</body>

</html>