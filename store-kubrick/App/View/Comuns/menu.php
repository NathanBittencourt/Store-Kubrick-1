<header>
    <div class="logo">
        <img src="<?= baseUrl() ?>/assets/img/StoreKubrick-cabecalho.png" alt="Logo" style="width: 35%; height: 25%;">
    </div>
    <nav class="links">
        <a href="<?= baseUrl() ?>">Home</a>
        <a href="<?= baseUrl() ?>Home/quemsomos">Quem Somos</a>
        <a href="<?= baseUrl() ?>Home/idealizador">Idealizador</a>
        <a href="<?= baseUrl() ?>Home/produtos">Produtos</a>
        <a href="<?= baseUrl() ?>Home/contato">Contato</a>
        <a href="<?= baseUrl() ?>Home/login">Login</a>
        <div class="dropdown">
            <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Administrador
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" style="color: black" type="button" href="<?= baseUrl() ?>Home">Página Home</a></li>
                <li><a class="dropdown-item" style="color: black" type="button" href="<?= baseUrl() ?>Home/quemsomos">Página Quem Somos</a></li>
                <li><a class="dropdown-item" style="color: black" type="button" href="<?= baseUrl() ?>Home/idealizador">Página Idealizador</a></li>
                <li><a class="dropdown-item" style="color: black" type="button" href="<?= baseUrl() ?>Home/produtos">Página Produtos</a></li>
                <li><a class="dropdown-item" style="color: black" type="button" href="<?= baseUrl() ?>Home/contato">Página Contato</a></li>
                <li><a class="dropdown-item" style="color: black" type="button" href="<?= baseUrl() ?>Home/erros">Página Erro</a></li>
                <li><a class="dropdown-item" style="color: black" type="button" href="<?= baseUrl() ?>Home/categoriaProdutos">Categoria Produtos</a></li>
            </ul>
        </div>
        <a href="<?= baseUrl() ?>Home/carrinho">
            <i class="fa-solid fa-cart-shopping fa-lg mx-2" style="color: #ffffff;"></i>
        </a>
    </nav>
</header>