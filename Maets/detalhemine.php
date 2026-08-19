<?php include "header.php"; ?>

<div class="container my-4 text-white">
    <!-- Botão de Voltar estilo Steam -->
    <a href="index.php" class="btn btn-outline-secondary mb-3">&leftarrow; Voltar para a loja</a>

    <div class="row p-4 rounded shadow-lg" style="background-color: #0f1922; border: 1px solid #2a475e;">
        
        <!-- Carrossel de Screenshots (Esquerda) -->
        <div class="col-md-7 mb-3 mb-md-0">
            <!-- Slider Principal -->
            <div id="carouselMine" class="carousel slide rounded overflow-hidden shadow mb-2" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/mine1.jpg" class="d-block w-100" style="height: 380px; object-fit: cover;" alt="Minecraft Screenshot 1">
                    </div>
                    <div class="carousel-item">
                        <img src="img/mine2.jpg" class="d-block w-100" style="height: 380px; object-fit: cover;" alt="Minecraft Screenshot 2">
                    </div>
                    <div class="carousel-item">
                        <img src="img/mine3.jpg" class="d-block w-100" style="height: 380px; object-fit: cover;" alt="Minecraft Screenshot 3">
                    </div>
                </div>

                <!-- Botões Anterior / Próximo -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselMine" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselMine" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Próximo</span>
                </button>
            </div>

            <!-- Miniaturas Clicáveis (Thumbnails) -->
            <div class="d-flex gap-2 justify-content-start">
                <img src="img/mine1.jpg" data-bs-target="#carouselMine" data-bs-slide-to="0" class="img-thumbnail bg-dark border-secondary active" style="width: 30%; height: 75px; object-fit: cover; cursor: pointer;" alt="Thumb 1">
                <img src="img/mine2.jpg" data-bs-target="#carouselMine" data-bs-slide-to="1" class="img-thumbnail bg-dark border-secondary" style="width: 30%; height: 75px; object-fit: cover; cursor: pointer;" alt="Thumb 2">
                <img src="img/mine3.jpg" data-bs-target="#carouselMine" data-bs-slide-to="2" class="img-thumbnail bg-dark border-secondary" style="width: 30%; height: 75px; object-fit: cover; cursor: pointer;" alt="Thumb 3">
            </div>
        </div>

        <!-- Painel Lateral de Informações e Compra (Direita) -->
        <div class="col-md-5 d-flex flex-column justify-content-between">
            <div>
                <h1 class="fw-bold text-white mb-2">Minecraft</h1>
                <span class="badge bg-secondary mb-3">Sobrevivência / Sandbox</span>
                <p class="text-secondary mt-2">Construa, explore e sobreviva em mundos infinitos de blocos.</p>
            </div>

            <!-- Caixas estilo Steam para Preço e Botão -->
            <div class="p-3 rounded d-flex justify-content-between align-items-center" style="background-color: #000000; border: 1px solid #364653;">
                <span class="fs-4 text-success fw-bold">R$ 99,90</span>
                <button class="btn btn-success fw-bold px-4 py-2">Comprar Agora</button>
            </div>
        </div>

        <!-- Descrição Completa na Parte Inferior -->
        <div class="col-12 mt-4 pt-3" style="border-top: 1px solid #364653;">
            <h4 class="text-white fw-bold mb-3">Sobre este jogo</h4>
            <p class="text-light fs-6" style="line-height: 1.6;">
                Explore mundos gerados aleatoriamente e construa das casas mais simples aos castelos mais grandiosos. Jogue no modo criativo com recursos ilimitados ou escave fundo no mundo no modo sobrevivência, criando armas e armaduras para se defender das criaturas perigosas.
            </p>
        </div>

    </div>
</div>

<?php include "footer.php"; ?>