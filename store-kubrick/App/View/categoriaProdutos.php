<?= $this->loadView('comuns/cabecalho') ?>
<?= $this->loadView('comuns/menu') ?>

<div class="container mx-auto " style="max-width: 1500px; padding: 70px;">
    <a href="<?= baseUrl() ?>Home/formCategoriaProdutos">
        <i class="fa-sharp fa-solid fa-circle-plus fa-2xl mx-2" style="color: #000000;"></i>
    </a>
    <a href="<?= baseUrl() ?>Home/categoriaProdutos">
        <i class="fa-solid fa-list fa-2xl mx-2" style="color: #000000;"></i>
    </a>
    <h2 class="text-center my-5">Categorias de Produtos</h2>

    <section>
        <table class="table table-hover table-striped table-bordered table-sm border-black text-center">
            <thead>
                <tr>
                    <th class="h4">Id</th>
                    <th class="h4">Descrição</th>
                    <th class="h4">Status</th>
                    <th class="h4">Opções</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="h5">1</td>
                    <td class="h5">Camisetas</td>
                    <td class="h5">Ativo</td>
                    <td>
                        <a href="#" class="btn btn-link" data-toggle="tooltip" data-placement="top" title="Visualizar">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="#" class="btn btn-link" data-toggle="tooltip" data-placement="top" title="Editar">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                        <a href="#" class="btn btn-link" data-toggle="tooltip" data-placement="top" title="Excluir">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="h5">2</td>
                    <td class="h5">Bonés</td>
                    <td class="h5">Ativo</td>
                    <td>
                        <a href="#" class="btn btn-link" data-toggle="tooltip" data-placement="top" title="Visualizar">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="#" class="btn btn-link" data-toggle="tooltip" data-placement="top" title="Editar">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                        <a href="#" class="btn btn-link" data-toggle="tooltip" data-placement="top" title="Excluir">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="h5">3</td>
                    <td class="h5">Anéis</td>
                    <td class="h5">Ativo</td>
                    <td>
                        <a href="#" class="btn btn-link" data-toggle="tooltip" data-placement="top" title="Visualizar">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="#" class="btn btn-link" data-toggle="tooltip" data-placement="top" title="Editar">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                        <a href="#" class="btn btn-link" data-toggle="tooltip" data-placement="top" title="Excluir">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </section>
</div>


<?= $this->loadView('comuns/rodape') ?>