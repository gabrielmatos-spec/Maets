<?php include "header.php"; ?>

<h2 class="mb-4">Categorias</h2>

<div class="row">

    <div class="col-md-3 mb-4">
        <a href="acao.php" class="btn btn-light w-100 py-4 fs-4 border categoria-btn">
            Ação
        </a>
    </div>

    <div class="col-md-3 mb-4">
        <a href="esportes.php" class="btn btn-light w-100 py-4 fs-4 border categoria-btn">
            Esportes
        </a>
    </div>

    <div class="col-md-3 mb-4">
        <a href="rpg.php" class="btn btn-light w-100 py-4 fs-4 border categoria-btn">
            RPG
        </a>
    </div>

    <div class="col-md-3 mb-4">
        <a href="indie.php" class="btn btn-light w-100 py-4 fs-4 border categoria-btn">
            Indie
        </a>
    </div>

</div>
<h2 class="mb-4">Jogos em Destaque</h2>
<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
    
    <!-- Card GTA V -->
    <div class="col">
        <div class="card h-100 shadow-sm">
            <img src="img/gtaV.jpeg" class="card-img-top" style="height: 280px; object-fit: cover; object-position: center;" alt="GTA V">
            <div class="card-body d-flex flex-column justify-content-between">
                <div>
                    <h5 class="card-title fw-bold">Grand Theft Auto V</h5>
                    <p class="card-text text-muted small">Explore Los Santos em um dos maiores sucessos da Rockstar.</p>
                </div>
                <div>
                    <p class="fw-bold text-success fs-5 mb-2">R$ 149,90</p>
                    <a href="detalhegta.php" class="btn btn-primary w-100">Ver Jogo</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Card Minecraft -->
    <div class="col">
        <div class="card h-100 shadow-sm">
            <img src="img/mine.jpg.jpeg" class="card-img-top" style="height: 280px; object-fit: cover; object-position: center;" alt="Minecraft">
            <div class="card-body d-flex flex-column justify-content-between">
                <div>
                    <h5 class="card-title fw-bold">Minecraft</h5>
                    <p class="card-text text-muted small">Construa, explore e sobreviva em mundos infinitos.</p>
                </div>
                <div>
                    <p class="fw-bold text-success fs-5 mb-2">R$ 99,90</p>
                    <a href="detalhemine.php" class="btn btn-primary w-100">Ver Jogo</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Card EA Sports FC 26 -->
    <div class="col">
        <div class="card h-100 shadow-sm">
            <img src="img/fc26.jpeg" class="card-img-top" style="height: 280px; object-fit: cover; object-position: center;" alt="EA Sports FC 26">
            <div class="card-body d-flex flex-column justify-content-between">
                <div>
                    <h5 class="card-title fw-bold">EA Sports FC 26</h5>
                    <p class="card-text text-muted small">O futebol mais realista da nova geração.</p>
                </div>
                <div>
                    <p class="fw-bold text-success fs-5 mb-2">R$ 125,00</p>
                    <a href="detalhefifa.php" class="btn btn-primary w-100">Ver Jogo</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Card Cyberpunk 2077 -->
    <div class="col">
        <div class="card h-100 shadow-sm">
            <img src="img/ciberpunk.jpeg" class="card-img-top" style="height: 280px; object-fit: cover; object-position: center;" alt="Cyberpunk 2077">
            <div class="card-body d-flex flex-column justify-content-between">
                <div>
                    <h5 class="card-title fw-bold">Cyberpunk 2077</h5>
                    <p class="card-text text-muted small">Viva aventuras futuristas em Night City.</p>
                </div>
                <div>
                    <p class="fw-bold text-success fs-5 mb-2">R$ 159,90</p>
                    <a href="detalhecyberpunk.php" class="btn btn-primary w-100">Ver Jogo</a>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include "footer.php"; ?>