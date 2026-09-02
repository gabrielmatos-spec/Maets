<?php include "header.php"; ?>

<div class="container my-4 text-white">

```
<!-- Botão de Voltar estilo Steam -->
<a href="acao.php" class="btn btn-outline-secondary mb-3">
    &leftarrow; Voltar para os Jogos de ação 
</a>

<div class="row p-4 rounded shadow-lg"
     style="background-color: #0f1922; border: 1px solid #2a475e;">

    <!-- Carrossel de Screenshots (Esquerda) -->
    <div class="col-md-7 mb-3 mb-md-0">

        <!-- Slider Principal -->
        <div id="carouselGod"
             class="carousel slide rounded overflow-hidden shadow mb-2"
             data-bs-ride="carousel">

            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="img/gow1.jpg"
                         class="d-block w-100"
                         style="height: 380px; object-fit: cover;"
                         alt="Gow1">
                </div>

                <div class="carousel-item">
                    <img src="img/gow2.jpg"
                         class="d-block w-100"
                         style="height: 380px; object-fit: cover;"
                         alt="Gow2">
                </div>

                <div class="carousel-item">
                    <img src="img/gow3.jpg"
                         class="d-block w-100"
                         style="height: 380px; object-fit: cover;"
                         alt="Gow3">
                </div>

            </div>

            <!-- Botão Anterior -->
            <button class="carousel-control-prev"
                    type="button"
                    data-bs-target="#carouselGow"
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
                    data-bs-target="#carouselGow"
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

            <img src="img/gow1.jpg"
                 data-bs-target="#carouselGod"
                 data-bs-slide-to="0"
                 class="img-thumbnail bg-dark border-secondary active"
                 style="width: 30%; height: 75px; object-fit: cover; cursor: pointer;"
                 alt="Gow1">

            <img src="img/gow2.jpg"
                 data-bs-target="#carouselGod"
                 data-bs-slide-to="1"
                 class="img-thumbnail bg-dark border-secondary"
                 style="width: 30%; height: 75px; object-fit: cover; cursor: pointer;"
                 alt="Gow2">

            <img src="img/gow3.jpg"
                 data-bs-target="#carouselGod"
                 data-bs-slide-to="2"
                 class="img-thumbnail bg-dark border-secondary"
                 style="width: 30%; height: 75px; object-fit: cover; cursor: pointer;"
                 alt="Gow3">

        </div>

    </div>


    <!-- Painel Lateral de Informações e Compra -->
    <div class="col-md-5 d-flex flex-column justify-content-between">

        <div>

            <h1 class="fw-bold text-white mb-2">
                God of War
            </h1>

            <span class="badge bg-secondary mb-3">
                Ação / Aventura / RPG
            </span>

            <p class="text-secondary mt-1 mb-3">
                Embarque em uma jornada épica pela mitologia nórdica
                ao lado de Kratos e seu filho Atreus.
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
                        14/Jan/2022
                    </span>
                </div>

                <div class="d-flex justify-content-between mb-2">
                    <span class="text-secondary">
                        Desenvolvedora:
                    </span>

                    <span class="text-light">
                        Santa Monica Studio
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

            <a href="https://store.steampowered.com/app/1593500/God_of_War/"
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

            Vivencie uma nova perspectiva sobre a jornada de Kratos.
            Agora vivendo entre os deuses e monstros da mitologia nórdica,
            Kratos precisa aprender a controlar sua raiva enquanto guia
            seu filho Atreus através de uma jornada perigosa. Explore
            paisagens impressionantes, enfrente criaturas mitológicas
            e descubra uma história emocionante sobre família, perda
            e redenção.

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
                    Intel Core i5-2500k / AMD Ryzen 3 1200
                </p>

                <p class="mb-1">
                    <strong>Memória:</strong>
                    8 GB de RAM
                </p>

                <p class="mb-1">
                    <strong>Placa de vídeo:</strong>
                    NVIDIA GTX 960 4GB / AMD R9 290X 4GB
                </p>

                <p class="mb-1">
                    <strong>Armazenamento:</strong>
                    70 GB de espaço disponível
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
                    Intel Core i5-6600k / AMD Ryzen 5 2400G
                </p>

                <p class="mb-1">
                    <strong>Memória:</strong>
                    8 GB de RAM
                </p>

                <p class="mb-1">
                    <strong>Placa de vídeo:</strong>
                    NVIDIA GTX 1060 6GB / AMD RX 570 4GB
                </p>

                <p class="mb-1">
                    <strong>Armazenamento:</strong>
                    70 GB de espaço disponível
                </p>

            </div>

        </div>

    </div>

</div>
```

</div>

<?php include "footer.php"; ?>
