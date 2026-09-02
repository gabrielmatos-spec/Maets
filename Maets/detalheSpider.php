```php
<?php include "header.php"; ?>

<div class="container my-4 text-white">

    <!-- Botão de Voltar -->
    <a href="acao.php" class="btn btn-outline-secondary mb-3">
        &leftarrow; Voltar para os Jogos de ação
    </a>

    <div class="row p-4 rounded shadow-lg"
         style="background-color: #0f1922; border: 1px solid #2a475e;">

        <!-- Carrossel de Screenshots -->
        <div class="col-md-7 mb-3 mb-md-0">

            <!-- Slider Principal -->
            <div id="carouselSpider"
                 class="carousel slide rounded overflow-hidden shadow mb-2"
                 data-bs-ride="carousel">

                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <img src="img/spider1.jpg"
                             class="d-block w-100"
                             style="height: 380px; object-fit: cover;"
                             alt="Marvel's Spider-Man II">
                    </div>

                    <div class="carousel-item">
                        <img src="img/spider2.jpg"
                             class="d-block w-100"
                             style="height: 380px; object-fit: cover;"
                             alt="Marvel's Spider-Man II">
                    </div>

                    <div class="carousel-item">
                        <img src="img/spider3.jpg"
                             class="d-block w-100"
                             style="height: 380px; object-fit: cover;"
                             alt="Marvel's Spider-Man II">
                    </div>

                </div>

                <!-- Botão Anterior -->
                <button class="carousel-control-prev"
                        type="button"
                        data-bs-target="#carouselSpider"
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
                        data-bs-target="#carouselSpider"
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

                <img src="img/spider1.jpg"
                     data-bs-target="#carouselSpider"
                     data-bs-slide-to="0"
                     class="img-thumbnail bg-dark border-secondary active"
                     style="width: 30%; height: 75px; object-fit: cover; cursor: pointer;"
                     alt="Spider-Man 1">

                <img src="img/spider2.jpg"
                     data-bs-target="#carouselSpider"
                     data-bs-slide-to="1"
                     class="img-thumbnail bg-dark border-secondary"
                     style="width: 30%; height: 75px; object-fit: cover; cursor: pointer;"
                     alt="Spider-Man 2">

                <img src="img/spider3.jpg"
                     data-bs-target="#carouselSpider"
                     data-bs-slide-to="2"
                     class="img-thumbnail bg-dark border-secondary"
                     style="width: 30%; height: 75px; object-fit: cover; cursor: pointer;"
                     alt="Spider-Man 3">

            </div>

        </div>


        <!-- Painel Lateral de Informações e Compra -->
        <div class="col-md-5 d-flex flex-column justify-content-between">

            <div>

                <h1 class="fw-bold text-white mb-2">
                    Marvel's Spider-Man
                </h1>

                <span class="badge bg-secondary mb-3">
                    Ação / Aventura / Mundo Aberto
                </span>

                <p class="text-secondary mt-1 mb-3">
                    Vista o traje do Homem-Aranha e proteja Nova York
                    enquanto Peter Parker enfrenta perigosos vilões
                    e tenta equilibrar sua vida pessoal com sua missão.
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
                            12/Ago/2022
                        </span>
                    </div>

                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-secondary">
                            Desenvolvedora:
                        </span>

                        <span class="text-light">
                            Insomniac Games
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
                    R$ 199,90
                </span>

                <a href="https://store.steampowered.com/app/1817070/Marvels_SpiderMan_Remastered/"
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

                Em Marvel's Spider-Man, acompanhe Peter Parker em uma
                aventura repleta de ação pelas ruas de Nova York.
                Explore a cidade livremente, balance-se entre os prédios,
                enfrente criminosos e enfrente alguns dos maiores vilões
                do universo do Homem-Aranha. Desenvolva novas habilidades,
                desbloqueie diferentes trajes e descubra uma história
                emocionante sobre responsabilidade, amizade e heroísmo.

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
                        Intel Core i3-4160 / AMD equivalente
                    </p>

                    <p class="mb-1">
                        <strong>Memória:</strong>
                        8 GB de RAM
                    </p>

                    <p class="mb-1">
                        <strong>Placa de vídeo:</strong>
                        NVIDIA GTX 950 / AMD Radeon RX 470
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
                        Intel Core i5-4670 / AMD Ryzen 5 1600
                    </p>

                    <p class="mb-1">
                        <strong>Memória:</strong>
                        16 GB de RAM
                    </p>

                    <p class="mb-1">
                        <strong>Placa de vídeo:</strong>
                        NVIDIA GTX 1060 6GB / AMD RX 580
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
