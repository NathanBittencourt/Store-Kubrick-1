<?= $this->loadView('comuns/cabecalho') ?>
<?= $this->loadView('comuns/menu') ?>

<div class="container mx-auto " style="max-width: 700px; padding: 70px;">

    <a href="<?= baseUrl() ?>Home/categoriaProdutos">
        <i class="fa-solid fa-list fa-2xl mx-2" style="color: #000000;"></i>
    </a>
    <h2 class="text-center my-5">Categorias de Produtos - Novo</h2>

    <div class="row">
        <div class="form-group col-12 col-md-8 mx-auto my-2">
            <label for="descricao" class="form-label">Descrição</label>
            <input type="text" name="descricao" id="descricao" class="form-control border-dark" maxlength="50" required autofocus placeholder="Descrição da categoria">
        </div>
        <div class="form-group col-12 col-md-8 mx-auto my-2">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-control border-dark" required>
                <option value="" disabled selected>Selecione o status da categoria</option>
                <option value="1">Ativo</option>
                <option value="2">Inativo</option>
            </select>
        </div>
        <div class="row my-5">
            <div class="col-12 text-center">
                <a type="button" class="btn btn-outline-primary">Gravar</a>
                <a type="button" class="btn btn-outline-danger" href="<?= baseUrl() ?>Home/categoriaProdutos">Voltar</a>
            </div>
            <div class="col-1 mx-auto">

            </div>
        </div>
    </div>
</div>



<?= $this->loadView('comuns/rodape') ?>