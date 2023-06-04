<?= $this->loadView("comuns/cabecalho") ?>
<?= $this->loadView("comuns/menu") ?>

<div class="card mx-auto my-5">

  <div class="text-center">
    <img src="<?= baseUrl() ?>/assets/gifs/fraseCarrinho.gif" alt="fraseCarrinho" class="w-50 rounded">
  </div>
  <div class="row mx-auto">
    <div class="col my-5">
      <div class="card border-dark" style="width: 18rem;">
        <img class="card-img-top" src="<?= baseUrl() ?>/assets/img/camisas/duna.png">
        <div class="card-body">
          <h6 class="card-title">Camiseta - Duna 2</h6>
          <p class="card-text">R$ 80,00</p>
          <a href="#" class="btn btn-dark">Comprar</a>
        </div>
      </div>
    </div>
    <div class="col my-5">
      <div class="card border-dark" style="width: 18rem;">
        <img class="card-img-top" src="<?= baseUrl() ?>/assets/img/camisas/cidadedeDeus.png">
        <div class="card-body">
          <h6 class="card-title">Camiseta - Cidade de Deus</h6>
          <p class="card-text">R$ 50,00</p>
          <a href="#" class="btn btn-dark">Comprar</a>
        </div>
      </div>
    </div>
    <div class="col my-5">
      <div class="card border-dark" style="width: 18rem;">
        <img class="card-img-top" src="<?= baseUrl() ?>/assets/img/aneis/anelV.png">
        <div class="card-body">
          <h6 class="card-title">Anel - V de Vingança</h6>
          <p class="card-text">R$ 20,00</p>
          <a href="#" class="btn btn-dark">Comprar</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->loadView("comuns/rodape") ?>