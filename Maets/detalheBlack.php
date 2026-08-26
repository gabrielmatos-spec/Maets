<?php include "header.php"; ?>

<div class="container my-4 text-white">
    <!-- Botão de Voltar estilo Steam -->
    <a href="promocoes.php" class="btn btn-outline-secondary mb-3">&leftarrow; Voltar para as Promoções</a>

    <div class="row p-4 rounded shadow-lg" style="background-color: #0f1922; border: 1px solid #2a475e;">
        
        <!-- Carrossel de Screenshots (Esquerda) -->
        <div class="col-md-7 mb-3 mb-md-0">
            <!-- Slider Principal -->
            <div id="carouselBlack" class="carousel slide rounded overflow-hidden shadow mb-2" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/Black1.jpg" class="d-block w-100" style="height: 380px; object-fit: cover;" alt="Black Myth: Wukong Screenshot 1">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Black2.jpg" class="d-block w-100" style="height: 380px; object-fit: cover;" alt="Black Myth: Wukong Screenshot 2">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Black3.jpg" class="d-block w-100" style="height: 380px; object-fit: cover;" alt="Black Myth: Wukong Screenshot 3">
                    </div>
                </div>

                <!-- Botões Anterior / Próximo -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselBlack" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselBlack" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Próximo</span>
                </button>
            </div>

            <!-- Miniaturas Clicáveis (Thumbnails) -->
            <div class="d-flex gap-2 justify-content-start">
                <img src="img/Black1.jpg" data-bs-target="#carouselBlack" data-bs-slide-to="0" class="img-thumbnail bg-dark border-secondary active" style="width: 30%; height: 75px; object-fit: cover; cursor: pointer;" alt="Thumb 1">
                <img src="img/Black2.jpg" data-bs-target="#carouselBlack" data-bs-slide-to="1" class="img-thumbnail bg-dark border-secondary" style="width: 30%; height: 75px; object-fit: cover; cursor: pointer;" alt="Thumb 2">
                <img src="img/Black3.jpg" data-bs-target="#carouselBlack" data-bs-slide-to="2" class="img-thumbnail bg-dark border-secondary" style="width: 30%; height: 75px; object-fit: cover; cursor: pointer;" alt="Thumb 3">
            </div>
        </div>

        <!-- Painel Lateral de Informações e Compra (Direita) -->
        <div class="col-md-5 d-flex flex-column justify-content-between">
            <div>
                <h1 class="fw-bold text-white mb-2">Black Myth: Wukong</h1>
                <span class="badge bg-secondary mb-3">Ação / Aventura / RPG</span>
                <p class="text-secondary mt-1 mb-3">Parta em uma jornada pela mitologia chinesa como o Destinado.</p>

                <!-- FICHA TÉCNICA -->
                <div class="p-3 rounded my-3" style="background-color: #121e2b; border: 1px solid #1e3548; font-size: 0.9rem;">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-secondary">Análises Gerais:</span>
                        <span class="text-info fw-bold">Extremamente Positivas</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-secondary">Data de Lançamento:</span>
                        <span class="text-light">20/Ago/2024</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-secondary">Desenvolvedor:</span>
                        <span class="text-light">Game Science</span>
                    </div>
                    <div class="d-flex justify-content-between mb-0">
                        <span class="text-secondary">Distribuidora:</span>
                        <span class="text-light">Game Science</span>
                    </div>
                </div>
            </div>

            <!-- Caixas estilo Steam para Preço e Botão -->
            <div class="p-3 rounded d-flex justify-content-between align-items-center" style="background-color: #000000; border: 1px solid #364653;">
                <span class="fs-4 text-success fw-bold">R$ 229,99</span>
                
                <a href="https://store.steampowered.com/app/2358720/Black_Myth_Wukong/" 
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
                Black Myth: Wukong é um RPG de ação baseado na mitologia chinesa. A história é inspirada em "Jornada ao Oeste", um dos quatro grandes romances clássicos da literatura chinesa. Você partirá como o Destinado para encarar os desafios e as maravilhas à frente, descobrindo a verdade oculta por trás do véu de uma lenda gloriosa do passado.
            </p>
        </div>

        <!-- Requisitos do Sistema -->
        <div class="col-12 mt-4 pt-3" style="border-top: 1px solid #364653;">
            <h4 class="text-white fw-bold mb-3">Requisitos do Sistema</h4>
            <div class="row text-secondary small">
                <div class="col-md-6 mb-3 mb-md-0">
                    <h6 class="text-light fw-bold">MÍNIMOS:</h6>
                    <p class="mb-1"><strong>SO:</strong> Windows 10 64-bit</p>
                    <p class="mb-1"><strong>Processador:</strong> Intel Core i5-8400 / AMD Ryzen 5 1600</p>
                    <p class="mb-1"><strong>Memória:</strong> 16 GB de RAM</p>
                    <p class="mb-1"><strong>Placa de vídeo:</strong> NVIDIA GeForce GTX 1060 (6GB) / AMD Radeon RX 580 (8GB)</p>
                    <p class="mb-1"><strong>Armazenamento:</strong> 130 GB de espaço disponível</p>
                </div>
                <div class="col-md-6">
                    <h6 class="text-light fw-bold">RECOMENDADOS:</h6>
                    <p class="mb-1"><strong>SO:</strong> Windows 10 64-bit</p>
                    <p class="mb-1"><strong>Processador:</strong> Intel Core i7-8700K / AMD Ryzen 5 3600X</p>
                    <p class="mb-1"><strong>Memória:</strong> 16 GB de RAM</p>
                    <p class="mb-1"><strong>Placa de vídeo:</strong> NVIDIA GeForce RTX 2060 / AMD Radeon RX 5700 XT</p>
                    <p class="mb-1"><strong>Armazenamento:</strong> 130 GB de espaço disponível (SSD recomendado)</p>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include "footer.php"; ?>