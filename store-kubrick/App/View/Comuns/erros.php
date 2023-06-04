<?= $this->loadView('comuns/cabecalho') ?>
<?= $this->loadView('comuns/menu') ?>

<div class="alert alert-dange p-2 m-1" role="alert">
    <?php
    if (isset($dados['msgError'])) {
        echo $dados['msgError'];
    ?>
        <div class="text-center">
            <img src="<?= baseUrl() ?>/assets/gifs/erro.gif" alt="erro" class="rounded">
        </div>

    <?php

    } else {
        echo "<div class='alert alert-danger text-center my-5'>Página não localizada</div>";
    ?>
        <div class="text-center">
            <img src="<?= baseUrl() ?>/assets/gifs/erro.gif" alt="erro" class="rounded">
        </div>
    <?php
    }
    ?>
</div>

<?= $this->loadView('comuns/rodape') ?>