<?php include "header.php"; ?>

<div class="container my-4 text-white">

    <!-- Botão de Voltar -->
    <a href="index.php" class="btn btn-outline-secondary mb-3">
        &leftarrow; Voltar para a loja
    </a>

    <div class="row p-4 rounded shadow-lg"
         style="background-color: #0f1922; border: 1px solid #2a475e;">

        <!-- Carrossel de Screenshots -->
        <div class="col-md-7 mb-3 mb-md-0">

            <div id="carouselCyber"
                 class="carousel slide rounded overflow-hidden shadow mb-2"
                 data-bs-ride="carousel">

                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <img src="img/cyber1.jpg"
                             class="d-block w-100"
                             style="height: 380px; object-fit: cover;"
                             alt="Cyberpunk 2077 Screenshot 1">
                    </div>

                    <div class="carousel-item">
                        <img src="img/cyber2.jpg"
                             class="d-block w-100"
                             style="height: 380px; object-fit: cover;"
                             alt="Cyberpunk 2077 Screenshot 2">
                    </div>

                    <div class="carousel-item">
                        <img src="img/cyber3.jpg"
                             class="d-block w-100"
                             style="height: 380px; object-fit: cover;"
                             alt="Cyberpunk 2077 Screenshot 3">
                    </div>

                </div>

                <!-- Botão Anterior -->
                <button class="carousel-control-prev"
                        type="button"
                        data-bs-target="#carouselCyber"
                        data-bs-slide="prev">

                    <span class="carousel-control-prev-icon"
                          aria-hidden="true">
                    </span>

                    <span class="visually-hidden">
                        Anterior
                    </span>

                </button>

                <!-- Botão Próximo -->
                <button class="carousel-control-next"
                        type="button"
                        data-bs-target="#carouselCyber"
                        data-bs-slide="next">

                    <span class="carousel-control-next-icon"
                          aria-hidden="true">
                    </span>

                    <span class="visually-hidden">
                        Próximo
                    </span>

                </button>

            </div>


            <!-- Miniaturas -->
            <div class="d-flex gap-2 justify-content-start">

                <img src="img/cyber1.jpg"
                     data-bs-target="#carouselCyber"
                     data-bs-slide-to="0"
                     class="img-thumbnail bg-dark border-secondary active"
                     style="width: 30%; height: 75px; object-fit: cover; cursor: pointer;"
                     alt="Thumb 1">

                <img src="img/cyber2.jpg"
                     data-bs-target="#carouselCyber"
                     data-bs-slide-to="1"
                     class="img-thumbnail bg-dark border-secondary"
                     style="width: 30%; height: 75px; object-fit: cover; cursor: pointer;"
                     alt="Thumb 2">

                <img src="img/cyber3.jpg"
                     data-bs-target="#carouselCyber"
                     data-bs-slide-to="2"
                     class="img-thumbnail bg-dark border-secondary"
                     style="width: 30%; height: 75px; object-fit: cover; cursor: pointer;"
                     alt="Thumb 3">

            </div>

        </div>


        <!-- Painel de Informações -->
        <div class="col-md-5 d-flex flex-column justify-content-between">

            <div>

                <h1 class="fw-bold text-white mb-2">
                    Cyberpunk 2077
                </h1>

                <span class="badge bg-secondary mb-3">
                    RPG / Ação / Mundo Aberto
                </span>

                <p class="text-secondary mt-1 mb-3">
                    Explore Night City em uma aventura futurista
                    cheia de ação, tecnologia e escolhas.
                </p>


                <!-- Ficha Técnica -->
                <div class="p-3 rounded my-3"
                     style="background-color: #121e2b; border: 1px solid #1e3548; font-size: 0.9rem;">

                    <div class="d-flex justify-content-between mb-2">

                        <span class="text-secondary">
                            Análises Gerais:
                        </span>

                        <span class="text-info fw-bold">
                            Muito Positivas
                        </span>

                    </div>


                    <div class="d-flex justify-content-between mb-2">

                        <span class="text-secondary">
                            Data de Lançamento:
                        </span>

                        <span class="text-light">
                            10/Dez/2020
                        </span>

                    </div>


                    <div class="d-flex justify-content-between mb-2">

                        <span class="text-secondary">
                            Desenvolvedor:
                        </span>

                        <span class="text-light">
                            CD PROJEKT RED
                        </span>

                    </div>


                    <div class="d-flex justify-content-between mb-0">

                        <span class="text-secondary">
                            Distribuidora:
                        </span>

                        <span class="text-light">
                            CD PROJEKT RED
                        </span>

                    </div>

                </div>

            </div>


            <!-- Caixa de Preço e Botão -->
            <div class="p-3 rounded d-flex justify-content-between align-items-center"
                 style="background-color: #000000; border: 1px solid #364653;">

                <span class="fs-4 text-success fw-bold">
                    R$ 199,90
                </span>

                <a href="https://store.steampowered.com/app/1091500/Cyberpunk_2077/"
                   target="_blank"
                   class="btn btn-success fw-bold px-4 py-2">

                    Comprar Agora

                </a>

            </div>

        </div>


        <!-- Descrição -->
        <div class="col-12 mt-4 pt-3"
             style="border-top: 1px solid #364653;">

            <h4 class="text-white fw-bold mb-3">
                Sobre este jogo
            </h4>

            <p class="text-light fs-6"
               style="line-height: 1.6;">

                Cyberpunk 2077 é um RPG de ação e aventura
                ambientado em Night City, uma enorme cidade
                futurista onde tecnologia avançada e grandes
                corporações fazem parte da vida cotidiana.

                Assuma o papel de V, um mercenário que busca
                sobreviver enquanto enfrenta diferentes missões,
                personagens e escolhas que podem mudar sua jornada.

            </p>

        </div>


        <!-- Requisitos do Sistema -->
        <div class="col-12 mt-4 pt-3"
             style="border-top: 1px solid #364653;">

            <h4 class="text-white fw-bold mb-3">
                Requisitos do Sistema
            </h4>


            <div class="row text-secondary small">

                <!-- Mínimos -->
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
                        Core i7-6700 / Ryzen 5 1600
                    </p>

                    <p class="mb-1">
                        <strong>Memória:</strong>
                        12 GB de RAM
                    </p>

                    <p class="mb-1">
                        <strong>Placa de vídeo:</strong>
                        GTX 1060 6GB / RX 580 8GB
                    </p>

                    <p class="mb-1">
                        <strong>Armazenamento:</strong>
                        70 GB de espaço disponível
                    </p>

                </div>


                <!-- Recomendados -->
                <div class="col-md-6">

                    <h6 class="text-light fw-bold">
                        RECOMENDADOS:
                    </h6>

                    <p class="mb-1">
                        <strong>SO:</strong>
                        Windows 10/11 64-bit
                    </p>

                    <p class="mb-1">
                        <strong>Processador:</strong>
                        Core i7-12700 / Ryzen 7 7800X3D
                    </p>

                    <p class="mb-1">
                        <strong>Memória:</strong>
                        16 GB de RAM
                    </p>

                    <p class="mb-1">
                        <strong>Placa de vídeo:</strong>
                        RTX 2060 Super / RX 5700 XT
                    </p>

                    <p class="mb-1">
                        <strong>Armazenamento:</strong>
                        70 GB SSD
                    </p>

                </div>

            </div>

        </div>

    </div>

</div>

<?php include "footer.php"; ?>