<?php include "header.php"; ?>

<div class="container my-4 text-white">
    <!-- Botão de Voltar estilo Steam -->
    <a href="index.php" class="btn btn-outline-secondary mb-3">&leftarrow; Voltar para os Jogos em Destaque</a>

    <div class="row p-4 rounded shadow-lg" style="background-color: #0f1922; border: 1px solid #2a475e;">
        
        <!-- Carrossel de Screenshots (Esquerda) -->
        <div class="col-md-7 mb-3 mb-md-0">
            <!-- Slider Principal -->
            <div id="carouselFifa" class="carousel slide rounded overflow-hidden shadow mb-2" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/fifa1.jpg" class="d-block w-100" style="height: 380px; object-fit: cover;" alt="EA Sports FC 26 Screenshot 1">
                    </div>
                    <div class="carousel-item">
                        <img src="img/fifa2.jpg" class="d-block w-100" style="height: 380px; object-fit: cover;" alt="EA Sports FC 26 Screenshot 2">
                    </div>
                    <div class="carousel-item">
                        <img src="img/fifa3.jpg" class="d-block w-100" style="height: 380px; object-fit: cover;" alt="EA Sports FC 26 Screenshot 3">
                    </div>
                </div>

                <!-- Botões Anterior / Próximo -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselFifa" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselFifa" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Próximo</span>
                </button>
            </div>

            <!-- Miniaturas Clicáveis (Thumbnails) -->
            <div class="d-flex gap-2 justify-content-start">
                <img src="img/fifa1.jpg" data-bs-target="#carouselFifa" data-bs-slide-to="0" class="img-thumbnail bg-dark border-secondary active" style="width: 30%; height: 75px; object-fit: cover; cursor: pointer;" alt="Thumb 1">
                <img src="img/fifa2.jpg" data-bs-target="#carouselFifa" data-bs-slide-to="1" class="img-thumbnail bg-dark border-secondary" style="width: 30%; height: 75px; object-fit: cover; cursor: pointer;" alt="Thumb 2">
                <img src="img/fifa3.jpg" data-bs-target="#carouselFifa" data-bs-slide-to="2" class="img-thumbnail bg-dark border-secondary" style="width: 30%; height: 75px; object-fit: cover; cursor: pointer;" alt="Thumb 3">
            </div>
        </div>

        <!-- Painel Lateral de Informações e Compra (Direita) -->
        <div class="col-md-5 d-flex flex-column justify-content-between">
            <div>
                <h1 class="fw-bold text-white mb-2">EA Sports FC 26</h1>
                <span class="badge bg-secondary mb-3">Esporte / Simulação</span>
                <p class="text-secondary mt-1 mb-3">O futebol mais realista da nova geração.</p>
                
                <!-- FICHA TÉCNICA -->
                <div class="p-3 rounded my-3" style="background-color: #121e2b; border: 1px solid #1e3548; font-size: 0.9rem;">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-secondary">Análises Gerais:</span>
                        <span class="text-warning fw-bold">Ligeiramente Positivas</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-secondary">Data de Lançamento:</span>
                        <span class="text-light">26/Set/2025</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-secondary">Desenvolvedor:</span>
                        <span class="text-light">EA Canada & EA Romania</span>
                    </div>
                    <div class="d-flex justify-content-between mb-0">
                        <span class="text-secondary">Distribuidora:</span>
                        <span class="text-light">Electronic Arts</span>
                    </div>
                </div>
            </div>

            <!-- Caixa de Preço e Botão -->
<div class="p-3 rounded d-flex justify-content-between align-items-center"
     style="background-color: #000000; border: 1px solid #364653;">

    <span class="fs-4 text-success fw-bold">
        R$ 125,00
    </span>

    <a href="https://store.steampowered.com/app/3405690/EA_SPORTS_FC_26/"
       target="_blank"
       class="btn btn-success fw-bold px-4 py-2">
        Comprar Agora
    </a>

</div>
        </div>

        <!-- Descrição Completa na Parte Inferior -->
        <div class="col-12 mt-4 pt-3" style="border-top: 1px solid #364653;">
            <h4 class="text-white fw-bold mb-3">Sobre este jogo</h4>
            <p class="text-light fs-6" style="line-height: 1.6;">
                Sinta a emoção do esporte rei com o EA Sports FC 26. Com mecânicas aprimoradas, física de bola ultra-realista e as maiores ligas e clubes do mundo, viva a experiência definitiva do futebol no modo carreira, Ultimate Team e partidas online com amigos.
            </p>
        </div>

        <!-- Requisitos do Sistema -->
        <div class="col-12 mt-4 pt-3" style="border-top: 1px solid #364653;">
            <h4 class="text-white fw-bold mb-3">Requisitos do Sistema</h4>
            <div class="row text-secondary small">
                <div class="col-md-6 mb-3 mb-md-0">
                    <h6 class="text-light fw-bold">MÍNIMOS:</h6>
                    <p class="mb-1"><strong>SO:</strong> Windows 10/11 64-bit</p>
                    <p class="mb-1"><strong>Processador:</strong> Intel Core i5-6600K / AMD Ryzen 5 1600</p>
                    <p class="mb-1"><strong>Memória:</strong> 8 GB de RAM</p>
                    <p class="mb-1"><strong>Placa de vídeo:</strong> NVIDIA GeForce GTX 1050 Ti 4GB / AMD Radeon RX 570 4GB</p>
                    <p class="mb-1"><strong>Armazenamento:</strong> 100 GB de espaço disponível</p>
                </div>
                <div class="col-md-6">
                    <h6 class="text-light fw-bold">RECOMENDADOS:</h6>
                    <p class="mb-1"><strong>SO:</strong> Windows 10/11 64-bit</p>
                    <p class="mb-1"><strong>Processador:</strong> Intel Core i7-8700 / AMD Ryzen 7 2700X</p>
                    <p class="mb-1"><strong>Memória:</strong> 12 GB de RAM</p>
                    <p class="mb-1"><strong>Placa de vídeo:</strong> NVIDIA GeForce GTX 1660 / AMD Radeon RX 5600 XT</p>
                    <p class="mb-1"><strong>Armazenamento:</strong> 100 GB de espaço disponível (SSD)</p>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include "footer.php"; ?>