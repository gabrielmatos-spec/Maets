```php
<?php include "header.php"; ?>

<div class="container my-4 text-white">

    <!-- Botão de Voltar estilo Steam -->
    <a href="acao.php" class="btn btn-outline-secondary mb-3">
        &leftarrow; Voltar para os Jogos de ação
    </a>

    <div class="row p-4 rounded shadow-lg"
         style="background-color: #0f1922; border: 1px solid #2a475e;">

        <!-- Carrossel de Screenshots (Esquerda) -->
        <div class="col-md-7 mb-3 mb-md-0">

            <!-- Slider Principal -->
            <div id="carouselGhost"
                 class="carousel slide rounded overflow-hidden shadow mb-2"
                 data-bs-ride="carousel">

                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <img src="img/ghost1.jpg"
                             class="d-block w-100"
                             style="height: 380px; object-fit: cover;"
                             alt="Ghost of Tsushima">
                    </div>

                    <div class="carousel-item">
                        <img src="img/ghost2.jpg"
                             class="d-block w-100"
                             style="height: 380px; object-fit: cover;"
                             alt="Ghost of Tsushima">
                    </div>

                    <div class="carousel-item">
                        <img src="img/ghost3.jpg"
                             class="d-block w-100"
                             style="height: 380px; object-fit: cover;"
                             alt="Ghost of Tsushima">
                    </div>

                </div>

                <!-- Botão Anterior -->
                <button class="carousel-control-prev"
                        type="button"
                        data-bs-target="#carouselGhost"
                        data-bs-slide="prev">

                    <span class="carousel-control-prev-icon"
                          aria-hidden="true"></span>

                    <span class="visually-hidden">
                        Anterior
                    </span>

                </button>

                <!-- Botão Próximo -->
                <button class="carousel-control-next"
                        type="button"
                        data-bs-target="#carouselGhost"
                        data-bs-slide="next">

                    <span class="carousel-control-next-icon"
                          aria-hidden="true"></span>

                    <span class="visually-hidden">
                        Próximo
                    </span>

                </button>

            </div>

            <!-- Miniaturas Clicáveis -->
            <div class="d-flex gap-2 justify-content-start">

                <img src="img/ghost1.jpg"
                     data-bs-target="#carouselGhost"
                     data-bs-slide-to="0"
                     class="img-thumbnail bg-dark border-secondary active"
                     style="width: 30%; height: 75px; object-fit: cover; cursor: pointer;"
                     alt="Ghost of Tsushima 1">

                <img src="img/ghost2.jpg"
                     data-bs-target="#carouselGhost"
                     data-bs-slide-to="1"
                     class="img-thumbnail bg-dark border-secondary"
                     style="width: 30%; height: 75px; object-fit: cover; cursor: pointer;"
                     alt="Ghost of Tsushima 2">

                <img src="img/ghost3.jpg"
                     data-bs-target="#carouselGhost"
                     data-bs-slide-to="2"
                     class="img-thumbnail bg-dark border-secondary"
                     style="width: 30%; height: 75px; object-fit: cover; cursor: pointer;"
                     alt="Ghost of Tsushima 3">

            </div>

        </div>


        <!-- Painel Lateral de Informações e Compra -->
        <div class="col-md-5 d-flex flex-column justify-content-between">

            <div>

                <h1 class="fw-bold text-white mb-2">
                    Ghost of Tsushima
                </h1>

                <span class="badge bg-secondary mb-3">
                    Ação / Aventura / Mundo Aberto
                </span>

                <p class="text-secondary mt-1 mb-3">
                    Torne-se o Fantasma e lute para proteger a ilha de
                    Tsushima durante a invasão mongol, dominando a arte
                    da katana, do arco e da furtividade.
                </p>


                <!-- FICHA TÉCNICA -->
                <div class="p-3 rounded my-3"
                     style="background-color: #121e2b;
                            border: 1px solid #1e3548;
                            font-size: 0.9rem;">

                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-secondary">
                            Análises Gerais:
                        </span>

                        <span class="text-info fw-bold">
                            Extremamente Positivas
                        </span>
                    </div>

                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-secondary">
                            Data de Lançamento:
                        </span>

                        <span class="text-light">
                            16/Mai/2024
                        </span>
                    </div>

                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-secondary">
                            Desenvolvedora:
                        </span>

                        <span class="text-light">
                            Sucker Punch Productions
                        </span>
                    </div>

                    <div class="d-flex justify-content-between mb-0">
                        <span class="text-secondary">
                            Distribuidora:
                        </span>

                        <span class="text-light">
                            PlayStation Publishing LLC
                        </span>
                    </div>

                </div>

            </div>


            <!-- Caixa de Preço e Botão -->
            <div class="p-3 rounded d-flex justify-content-between align-items-center"
                 style="background-color: #000000;
                        border: 1px solid #364653;">

                <span class="fs-4 text-success fw-bold">
                    R$ 249,90
                </span>

                <a href="https://store.steampowered.com/app/2215430/Ghost_of_Tsushima_DIRECTORS_CUT/"
                   target="_blank"
                   class="btn btn-success fw-bold px-4 py-2">

                    Comprar Agora

                </a>

            </div>

        </div>


        <!-- Descrição Completa -->
        <div class="col-12 mt-4 pt-3"
             style="border-top: 1px solid #364653;">

            <h4 class="text-white fw-bold mb-3">
                Sobre este jogo
            </h4>

            <p class="text-light fs-6"
               style="line-height: 1.6;">

                No final do século XIII, o Império Mongol devastou
                diversas regiões durante sua campanha de conquista
                pelo Oriente. A ilha de Tsushima é um dos últimos
                territórios entre o Japão e uma invasão em larga escala.

                Assuma o papel de Jin Sakai, um samurai que precisa
                abandonar parte de suas tradições para proteger seu
                povo. Explore uma enorme ilha, enfrente invasores,
                domine diferentes técnicas de combate e descubra uma
                história marcada por honra, sacrifício e vingança.

            </p>

        </div>


        <!-- Requisitos do Sistema -->
        <div class="col-12 mt-4 pt-3"
             style="border-top: 1px solid #364653;">

            <h4 class="text-white fw-bold mb-3">
                Requisitos do Sistema
            </h4>

            <div class="row text-secondary small">

                <!-- MÍNIMOS -->
                <div class="col-md-6 mb-3 mb-md-0">

                    <h6 class="text-light fw-bold">
                        MÍNIMOS:
                    </h6>

                    <p class="mb-1">
                        <strong>SO:</strong>
                        Windows 10 64-bit
                    </p>

                    <p class="mb-1">
                        <strong>Processador:</strong>
                        Intel Core i3-7100 / AMD Ryzen 3 1200
                    </p>

                    <p class="mb-1">
                        <strong>Memória:</strong>
                        8 GB de RAM
                    </p>

                    <p class="mb-1">
                        <strong>Placa de vídeo:</strong>
                        NVIDIA GTX 960 4GB / AMD Radeon RX 5500 XT
                    </p>

                    <p class="mb-1">
                        <strong>Armazenamento:</strong>
                        75 GB de espaço disponível
                    </p>

                </div>


                <!-- RECOMENDADOS -->
                <div class="col-md-6">

                    <h6 class="text-light fw-bold">
                        RECOMENDADOS:
                    </h6>

                    <p class="mb-1">
                        <strong>SO:</strong>
                        Windows 10 64-bit
                    </p>

                    <p class="mb-1">
                        <strong>Processador:</strong>
                        Intel Core i5-8600 / AMD Ryzen 5 3600
                    </p>

                    <p class="mb-1">
                        <strong>Memória:</strong>
                        16 GB de RAM
                    </p>

                    <p class="mb-1">
                        <strong>Placa de vídeo:</strong>
                        NVIDIA RTX 2060 / AMD Radeon RX 5600 XT
                    </p>

                    <p class="mb-1">
                        <strong>Armazenamento:</strong>
                        75 GB de espaço disponível
                    </p>

                </div>

            </div>

        </div>

    </div>

</div>

<?php include "footer.php"; ?>
```
