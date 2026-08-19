<?php include "header.php"; ?>

<div class="container my-4 text-white">
    <!-- Botão de Voltar estilo Steam -->
    <a href="index.php" class="btn btn-outline-secondary mb-3">← Voltar para a loja</a>

    <div class="row p-4 rounded shadow-lg" style="background-color: #0f1922; border: 1px solid #2a475e;">
        
        <!-- Banner / Imagem Principal (Esquerda) -->
        <div class="col-md-7 mb-3 mb-md-0">
            <img src="img/ciberpunk.jpeg" 
                 alt="Cyberpunk 2077" 
                 class="img-fluid rounded w-100 shadow" 
                 style="max-height: 400px; object-fit: cover;">
        </div>

        <!-- Painel Lateral de Informações e Compra (Direita) -->
        <div class="col-md-5 d-flex flex-column justify-content-between">
            <div>
                <h1 class="fw-bold text-white mb-2">Cyberpunk 2077</h1>
                <span class="badge bg-secondary mb-3">RPG / Ação em Mundo Aberto</span>
                <p class="text-secondary mt-2">Viva aventuras futuristas em Night City.</p>
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

    </div>
</div>

<?php include "footer.php"; ?>