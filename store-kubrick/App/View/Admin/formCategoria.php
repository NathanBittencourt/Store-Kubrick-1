<?php

use App\Library\Formulario;

    echo $this->loadView("comuns/cabecalho");
    echo $this->loadView("comuns/menu");

    echo Formulario::titulo('Categoria', false, true);
?>

<form method="POST" action="<?= baseUrl() ?>Categoria/<?= $this->getAcao() ?>">

    <p>
        <label for="descricao">Descrição</label>
        <input type="text" name="descricao" id="descricao" 
            maxlength="50" placeholder="Informe a descrição da categoria"
            value="<?= setValor('descricao') ?>"
            required autofocus>
    </p>

    <p>
        <label for="statusRegistro">Status</label>
        <select name="statusRegistro" id="statusRegistro" required>
            <option value=""  <?= setValor('statusRegistro') == ""  ? "SELECTED": "" ?>>...</option>
            <option value="1" <?= setValor('statusRegistro') == "1" ? "SELECTED": "" ?>>Ativo</option>
            <option value="2" <?= setValor('statusRegistro') == "2" ? "SELECTED": "" ?>>Inativo</option>
        </select>
    </p>

    <input type="hidden" name="id" id="id" value="<?= setValor('id') ?>">

    <button type="submit">Gravar</button>&nbsp;&nbsp;
    <?= Formulario::botao('voltar') ?>

</form>

<?= $this->loadView("comuns/rodape") ?>