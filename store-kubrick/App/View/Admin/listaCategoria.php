<?php

use App\Library\Session;
use App\Library\Formulario;

    echo $this->loadView("comuns/cabecalho");
    echo $this->loadView("comuns/menu");

    echo Formulario::titulo('Categoria');

?>

<table border="1" style="width: 100%;">
    <thead>
        <tr>
            <th>Id</th>
            <th>Descrição</th>
            <th>Status</th>
            <th>Opções</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($aData as $categoria): ?>
            <tr>
                <td><?= $categoria['id'] ?></td>
                <td><?= $categoria['descricao'] ?></td>
                <td><?= getStatusDescricao($categoria['statusRegistro']) ?></td>
                <td>
                    <?= Formulario::botao("view", $categoria['id']) ?>
                    <?= Formulario::botao("update", $categoria['id']) ?>
                    <?= Formulario::botao("delete", $categoria['id']) ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->loadView("comuns/rodape") ?>