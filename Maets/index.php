<?php include "header.php"; ?>

<h2 class="mb-4">Categorias</h2>

<div class="row">

    <div class="col-md-3 mb-4">
        <a href="#" class="btn btn-light w-100 py-4 fs-4 border categoria-btn">
            Ação
        </a>
    </div>

    <div class="col-md-3 mb-4">
        <a href="#" class="btn btn-light w-100 py-4 fs-4 border categoria-btn">
            Esportes
        </a>
    </div>

    <div class="col-md-3 mb-4">
        <a href="#" class="btn btn-light w-100 py-4 fs-4 border categoria-btn">
            Corrida
        </a>
    </div>

    <div class="col-md-3 mb-4">
        <a href="#" class="btn btn-light w-100 py-4 fs-4 border categoria-btn">
            RPG
        </a>
    </div>

</div>
<h2 class="mb-4">Jogos em Destaque</h2>

<div class="row">

    <!-- GTA V -->
    <div class="col-md-3 mb-4">

        <div class="card h-100">

            <img src="img/gtaV.jpeg" class="card-img-top" alt="GTA V">

            <div class="card-body">

                <h5 class="card-title">Grand Theft Auto V</h5>

                <p class="card-text">
                    Explore Los Santos em um dos maiores sucessos da Rockstar.
                </p>
                <a href="detalhejogo.php?id=<?php echo $dados['idAnuncio']; ?>" class="btn btn-primary">
                    Ver Jogo
                 </a>

            </div>

        </div>

    </div>

    <!-- Minecraft -->
    <div class="col-md-3 mb-4">

        <div class="card h-100">

            <img src="img/mine.jpg.jpeg" class="card-img-top" alt="Minecraft">

            <div class="card-body">

                <h5 class="card-title">Minecraft</h5>

                <p class="card-text">
                    Construa, explore e sobreviva em mundos infinitos.
                </p>

                <h5 class="text-success">R$ 99,90</h5>

                <a href="#" class="btn btn-primary w-100">
                    Ver Jogo
                </a>

            </div>

        </div>

    </div>

    <!-- EA Sports FC -->
    <div class="col-md-3 mb-4">

        <div class="card h-100">

            <img src="img/fc26.jpeg" class="card-img-top" alt="EA Sports FC">

            <div class="card-body">

                <h5 class="card-title">EA Sports FC 26</h5>

                <p class="card-text">
                    O futebol mais realista da nova geração.
                </p>

                <h5 class="text-success">R$ 249,90</h5>

                <a href="#" class="btn btn-primary w-100">
                    Ver Jogo
                </a>

            </div>

        </div>

    </div>

    <!-- Cyberpunk -->
    <div class="col-md-3 mb-4">

        <div class="card h-100">

            <img src="img/ciberpunk.jpeg" class="card-img-top" alt="Cyberpunk">

            <div class="card-body">

                <h5 class="card-title">Cyberpunk 2077</h5>

                <p class="card-text">
                    Viva aventuras futuristas em Night City.
                </p>

                <h5 class="text-success">R$ 159,90</h5>

                <a href="#" class="btn btn-primary w-100">
                    Ver Jogo
                </a>

            </div>

        </div>

    </div>

</div>

<hr class="my-5">

<h2>Sobre a MAETS</h2>

<p class="text-muted">

A MAETS é uma plataforma digital desenvolvida para compra, venda e distribuição de jogos digitais.
Nosso objetivo é oferecer uma experiência simples, organizada e segura para que os usuários encontrem seus jogos favoritos.

</p>

<?php include "footer.php"; ?>