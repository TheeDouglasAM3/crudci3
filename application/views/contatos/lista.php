<div class="container mt-3">
    <a href="<?= base_url('contatos/index') ?>"><button type="button" class="btn btn-primary">Criar</button></a>
    <ul>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">nome</th>
                <th scope="col">email</th>
                <th scope="col">mensagem</th>
                <th scope="col">ações</th>
            </tr>
            </thead>
            <tbody>

            <?php foreach ($lista as $item): ?>
                <tr>
                    <th scope="row"><?=$item['id']?></th>
                    <td><?=$item['nome']?></td>
                    <td><?=$item['email']?></td>
                    <td><?=$item['mensagem']?></td>
                    <td>
                        <a href="<?= base_url('contatos/edicao/'.$item['id']) ?>"><button type="button" class="btn btn-primary">Editar</button></a>
                        <a href="<?= base_url('contatos/deletar/'.$item['id']) ?>"><button type="button" class="btn btn-danger">Deletar</button></a>
                    </td>
                </tr>
            <?php endforeach; ?>

            </tbody>
        </table>

    </ul>
</div>