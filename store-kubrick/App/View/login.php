<?= $this->loadView('comuns/cabecalho') ?>
<?= $this->loadView('comuns/menu') ?>

<div class="container" style="max-width: 700px; padding: 50px;">
    <div class="row">
        <div class="col-12 col-lg-6">
            <div class="login_box_img">
                <div class="hover">
                    <h4>Ainda não tem conta?</h4>
                    <p>
                        Crie uma conta para poder aproveitar toda a experiência do nosso conteúdo!
                    </p>
                    <a class="btn btn-dark my-3" href="<?= baseUrl() ?>Home/criarConta">Crie sua conta aqui</a>
                </div>
            </div>
        </div>


        <div class="col">
            <div class="text-center">
                <h3>Entre com seu Login</h3>

                <form>

                    <div class="col-md-12 form-group my-4">
                        <input type="email" class="form-control border-dark" id="email" name="email" placeholder="E-mail" onfocus="this.placeholder = ''" onblur="this.placeholder = 'E-mail'" required>
                    </div>
                    <div class="col-md-12 form-group my-4">
                        <input type="password" class="form-control border-dark" id="senha" name="senha" placeholder="Senha" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Senha'" required>
                    </div>


                    <div class="col-12 form-group ">
                        <div class="row ">
                            <div class="col-6 mx-auto">
                                <button type="submit" value="submit" class="btn btn-dark">Entrar</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 mx-auto my-5">
                                <a href="#" class="h6" style="color: blue;">Esqueceu a senha?</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->loadView('comuns/rodape') ?>