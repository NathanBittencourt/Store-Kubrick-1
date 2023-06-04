<?= $this->loadView('comuns/cabecalho') ?>
<?= $this->loadView('comuns/menu') ?>

<div class="container text-center" style="max-width: 700px; padding: 50px;">
    <div class="row">
        <div class="col-12">
            <h2 class="contact-title">Entre em contato conosco</h2>
        </div>
        <div class="col-lg-8 mx-auto">
            <form class="form-contact contact_form" action="<?= baseUrl() ?>Home/contato" method="post" id="contactForm" novalidate="novalidate">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group my-2 ">
                            <input class="form-control border-dark" name="assunto" id="assunto" type="text" placeholder="Assunto a ser tratado">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group my-2">
                            <textarea class="form-control w-100 border-dark" name="mensagem" id="mensagem" cols="30" rows="9" placeholder="Escreva sua mensagem"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group my-2">
                            <input class="form-control border-dark" name="nome" id="nome" type="text" placeholder="Seu nome">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group my-2">
                            <input class="form-control border-dark" name="email" id="email" type="email" placeholder="Seu e-mail">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group my-2">
                            <input class="form-control border-dark" name="telefone" id="telefone" type="text" placeholder="Seu Telefone de contato">
                        </div>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-dark">Enviar Mensagem</button>
                </div>
            </form>

        </div>
    </div>
</div>

<?= $this->loadView('comuns/rodape') ?>