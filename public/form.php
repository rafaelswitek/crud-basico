<!DOCTYPE html>
<html>

<head>
    <title>Cadastro de cliente</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">CRUD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cadastrar</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
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