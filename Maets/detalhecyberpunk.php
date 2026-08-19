<?php include "header.php"; ?>

<div class="container my-4 text-white">
    <!-- Botão de Voltar estilo Steam -->
    <a href="index.php" class="btn btn-outline-secondary mb-3">&leftarrow; Voltar para a loja</a>

    <div class="row p-4 rounded shadow-lg" style="background-color: #0f1922; border: 1px solid #2a475e;">
        
        <!-- Carrossel de Screenshots (Esquerda) -->
        <div class="col-md-7 mb-3 mb-md-0">
            <!-- Slider Principal -->
            <div id="carouselCyberpunk" class="carousel slide rounded overflow-hidden shadow mb-2" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/ciber1.jpg" class="d-block w-100" style="height: 380px; object-fit: cover;" alt="Cyberpunk 2077 Screenshot 1">
                    </div>
                    <div class="carousel-item">
                        <img src="img/ciber2.jpg" class="d-block w-100" style="height: 380px; object-fit: cover;" alt="Cyberpunk 2077 Screenshot 2">
                    </div>
                    <div class="carousel-item">
                        <img src="img/ciber3.jpg" class="d-block w-100" style="height: 380px; object-fit: cover;" alt="Cyberpunk 2077 Screenshot 3">
                    </div>
                </div>

                <!-- Botões Anterior / Próximo -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselCyberpunk" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselCyberpunk" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Próximo</span>
                </button>
            </div>

            <!-- Miniaturas Clicáveis (Thumbnails) -->
            <div class="d-flex gap-2 justify-content-start">
                <img src="img/ciber1.jpg" data-bs-target="#carouselCyberpunk" data-bs-slide-to="0" class="img-thumbnail bg-dark border-secondary active" style="width: 30%; height: 75px; object-fit: cover; cursor: pointer;" alt="Thumb 1">
                <img src="img/ciber2.jpg" data-bs-target="#carouselCyberpunk" data-bs-slide-to="1" class="img-thumbnail bg-dark border-secondary" style="width: 30%; height: 75px; object-fit: cover; cursor: pointer;" alt="Thumb 2">
                <img src="img/ciber3.jpg" data-bs-target="#carouselCyberpunk" data-bs-slide-to="2" class="img-thumbnail bg-dark border-secondary" style="width: 30%; height: 75px; object-fit: cover; cursor: pointer;" alt="Thumb 3">
            </div>
        </div>

        <!-- Painel Lateral de Informações e Compra (Direita) -->
        <div class="col-md-5 d-flex flex-column justify-content-between">
            <div>
                <h1 class="fw-bold text-white mb-2">Cyberpunk 2077</h1>
                <span class="badge bg-secondary mb-3">RPG / Ação em Mundo Aberto</span>
                <p class="text-secondary mt-1 mb-3">Viva aventuras futuristas em Night City.</p>

                <!-- FICHA TÉCNICA -->
                <div class="p-3 rounded my-3" style="background-color: #121e2b; border: 1px solid #1e3548; font-size: 0.9rem;">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-secondary">Análises Gerais:</span>
                        <span class="text-info fw-bold">Muito Positivas</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-secondary">Data de Lançamento:</span>
                        <span class="text-light">10/Dez/2020</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-secondary">Desenvolvedor:</span>
                        <span class="text-light">CD PROJEKT RED</span>
                    </div>
                    <div class="d-flex justify-content-between mb-0">
                        <span class="text-secondary">Distribuidora:</span>
                        <span class="text-light">CD PROJEKT RED</span>
                    </div>
                </div>
            </div>

            <!-- Caixas estilo Steam para Preço e Botão -->
            <div class="p-3 rounded d-flex justify-content-between align-items-center" style="background-color: #000000; border: 1px solid #364653;">
                <span class="fs-4 text-success fw-bold">R$ 159,90</span>
                <button class="btn btn-success fw-bold px-4 py-2">Comprar Agora</button>
            </div>
        </div>

        <!-- Descrição Completa na Parte Inferior -->
        <div class="col-12 mt-4 pt-3" style="border-top: 1px solid #364653;">
            <h4 class="text-white fw-bold mb-3">Sobre este jogo</h4>
            <p class="text-light fs-6" style="line-height: 1.6;">
                Cyberpunk 2077 é um RPG de ação e aventura em mundo aberto ambientado em Night City, uma megalópole obcecada por poder, glamour e modificações corporais. Mude o visual, o conjunto de habilidades e o estilo de jogo do seu personagem e explore uma cidade vasta onde as suas escolhas moldam a história e o mundo ao seu redor.
            </p>
        </div>

        <!-- Requisitos do Sistema -->
        <div class="col-12 mt-4 pt-3" style="border-top: 1px solid #364653;">
            <h4 class="text-white fw-bold mb-3">Requisitos do Sistema</h4>
            <div class="row text-secondary small">
                <div class="col-md-6 mb-3 mb-md-0">
                    <h6 class="text-light fw-bold">MÍNIMOS:</h6>
                    <p class="mb-1"><strong>SO:</strong> Windows 10 64-bit</p>
                    <p class="mb-1"><strong>Processador:</strong> Intel Core i7-6700 / AMD Ryzen 5 1600</p>
                    <p class="mb-1"><strong>Memória:</strong> 12 GB de RAM</p>
                    <p class="mb-1"><strong>Placa de vídeo:</strong> NVIDIA GeForce GTX 1060 6GB / AMD Radeon RX 580 8GB</p>
                    <p class="mb-1"><strong>Armazenamento:</strong> 70 GB de espaço disponível (SSD recomendado)</p>
                </div>
                <div class="col-md-6">
                    <h6 class="text-light fw-bold">RECOMENDADOS:</h6>
                    <p class="mb-1"><strong>SO:</strong> Windows 10/11 64-bit</p>
                    <p class="mb-1"><strong>Processador:</strong> Intel Core i7-12700 / AMD Ryzen 7 7800X3D</p>
                    <p class="mb-1"><strong>Memória:</strong> 16 GB de RAM</p>
                    <p class="mb-1"><strong>Placa de vídeo:</strong> NVIDIA GeForce RTX 2060 SUPER / AMD Radeon RX 5700 XT</p>
                    <p class="mb-1"><strong>Armazenamento:</strong> 70 GB de espaço disponível (SSD obrigatório)</p>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include "footer.php"; ?>