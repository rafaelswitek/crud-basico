<?php include __DIR__ . '/header.php'; ?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">CPF</th>
            <th scope="col">Telefone</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($clients as $row) : ?>
            <tr>
                <th scope="row"><?= $row->getID(); ?></th>
                <td><?= $row->getName(); ?></td>
                <td><?= $row->getEmail(); ?></td>
                <td><?= $row->getCpf(); ?></td>
                <td><?= $row->getPhone(); ?></td>
                <td>
                    <a href="/editar?id=<?= $row->getID(); ?>" class="btn btn-primary">Editar</a>
                    <a href="/excluir?id=<?= $row->getID(); ?>" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>

</body>

</html>