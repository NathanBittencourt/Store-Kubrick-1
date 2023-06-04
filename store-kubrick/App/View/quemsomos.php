<?= $this->loadView("comuns/cabecalho") ?>
<?= $this->loadView("comuns/menu") ?>

<div class="container mx-auto" style="max-width: 800px; padding: 50px;">
    <div class="row">
        <div class="col-md-6">
            <img src="<?= baseUrl() ?>/assets/img/Oppenheimer.jpeg" class="img-fluid rounded">
            <img src="<?= baseUrl() ?>/assets/img/Logo.png" class="img-fluid rounded my-5">
            <img src="<?= baseUrl() ?>/assets/img/2001.jpg" class="img-fluid rounded">
        </div>
        <div class="col-md-6">
            <h3>Store Kubrick: Onde o Cinema Vive</h3>

            <p class="text-justify h4">
                Se você é um amante do cinema,
                e busca produtos com personalidade,
                a Store Kubrick é o lugar perfeito
                para saciar sua paixão cinematográfica.
            </p>
            <p class="text-justify h4">
                Com camisetas que celebram os clássicos,
                e homenageiam diretores lendários,
                a loja é um paraíso para os cinéfilos,
                que procuram produtos exclusivos e estilosos.
            </p>
            <p class="text-justify h4">
                Stanley Kubrick é a inspiração
                que dá nome a essa loja singular,
                onde o cinema vive em cada item,
                e a paixão pela sétima arte não para de pulsar.
            </p>
            <p class="text-justify h4">
                Seja você um fã de sci-fi, drama ou terror,
                a Store Kubrick tem algo para você,
                ela é um lugar onde a magia do cinema
                se mantém viva, presente e sempre a florescer.
            </p>
        </div>
    </div>
</div>

<?= $this->loadView("comuns/rodape") ?>