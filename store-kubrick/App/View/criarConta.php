<?= $this->loadView('comuns/cabecalho') ?>
<?= $this->loadView('comuns/menu') ?>

<div class="container" style="max-width: 700px; padding: 50px;">
    <div class="row">

        <div class="col">
            <div class="text-center">
                <h3>Crie sua conta!</h3>

                <form>
                    <div class="col-md-12 form-group my-4">
                        <label class="col-sm-2 col-form-label h6">Nome de usuário</label>
                        <input class="form-control border-dark" type="text" placeholder="Nome de usuário" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nome de usuário'" required>
                    </div>

                    <div class="col-md-12 form-group my-4">
                        <label class="col-sm-2 col-form-label h6">E-mail</label>
                        <input type="email" class="form-control border-dark" id="email" name="email" placeholder="E-mail" onfocus="this.placeholder = ''" onblur="this.placeholder = 'E-mail'" required>
                    </div>
                    <div class="col-md-12 form-group my-4">
                        <label class="col-sm-2 col-form-label h6">Senha</label>
                        <input type="password" class="form-control border-dark" id="senha" name="senha" placeholder="Senha" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Senha'" required>
                    </div>

                    <div class="col-12 form-group ">
                        <div class="row ">
                            <div class="col-6 mx-auto">
                                <button type="submit" value="submit" class="btn btn-dark">Enviar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->loadView('comuns/rodape') ?>