<?php include "header.php"; ?>

<div class="container my-5">

    <!-- Título da loja -->
    <div class="text-center mb-5">

        <h1 class="fw-bold">
            Loja De Jogos
        </h1>

        <p class="text-muted">
            Encontre seus jogos favoritos
        </p>

    </div>


    <!-- Pesquisa -->
    <div class="row justify-content-center mb-5">

        <div class="col-md-8">

            <form>

                <div class="input-group">

                    <input type="text"
                           class="form-control"
                           placeholder="Pesquisar jogo...">

                    <button class="btn btn-dark" type="submit">
                        <i class="bi bi-search"></i>
                        Pesquisar
                    </button>

                </div>

            </form>

        </div>

    </div>


    <!-- Categorias -->
    <h2 class="mb-4">
        Categorias
    </h2>

    <div class="row mb-5">

        <div class="col-md-3 mb-3">

            <a href="categoria.php?categoria=acao"
               class="btn btn-light w-100 py-3"
               style="cursor:pointer;">

                <i class="bi bi-lightning"></i>
                Ação

            </a>

        </div>


        <div class="col-md-3 mb-3">

            <a href="categoria.php?categoria=esportes"
               class="btn btn-light w-100 py-3"
               style="cursor:pointer;">

                <i class="bi bi-trophy"></i>
                Esportes

            </a>

        </div>


        <div class="col-md-3 mb-3">

            <a href="categoria.php?categoria=corrida"
               class="btn btn-light w-100 py-3"
               style="cursor:pointer;">

                <i class="bi bi-car-front"></i>
                Corrida

            </a>

        </div>


        <div class="col-md-3 mb-3">

            <a href="categoria.php?categoria=rpg"
               class="btn btn-light w-100 py-3"
               style="cursor:pointer;">

                <i class="bi bi-controller"></i>
                RPG

            </a>

        </div>

    </div>


    <!-- Jogos -->
    <h2 class="mb-4">
        Jogos em destaque
    </h2>

    <div class="row">


        <!-- GTA V -->
        <div class="col-md-4 mb-4">

            <div class="card h-100 shadow-sm">

                <img src="img/gtaV.jpeg"
                     class="card-img-top"
                     style="height:220px; object-fit:contain; background-color:#eee;"
                     alt="Grand Theft Auto V">

                <div class="card-body d-flex flex-column">

                    <h5 class="card-title">
                        Grand Theft Auto V
                    </h5>

                    <p class="text-muted">
                        Ação / Mundo Aberto
                    </p>

                    <p>
                        Explore Los Santos em uma grande aventura
                        de mundo aberto.
                    </p>

                    <div class="mt-auto">

                        <h5 class="text-success">
                            R$ 149,90
                        </h5>

                        <a href="gta.php"
                           class="btn btn-dark w-100 mb-2">

                            Ver jogo

                        </a>

                    <a href="gta.php" class="btn btn-dark w-100">
                        Comprar
                    </a>

                    </div>

                </div>

            </div>

        </div>


        <!-- Minecraft -->
        <div class="col-md-4 mb-4">

            <div class="card h-100 shadow-sm">

                <img src="img/mine.jpg.jpeg"
                     class="card-img-top"
                     style="height:220px; object-fit:contain; background-color:#eee;"
                     alt="Minecraft">

                <div class="card-body d-flex flex-column">

                    <h5 class="card-title">
                        Minecraft
                    </h5>

                    <p class="text-muted">
                        Sobrevivência / Sandbox
                    </p>

                    <p>
                        Construa, explore e sobreviva
                        em mundos de blocos.
                    </p>

                    <div class="mt-auto">

                        <h5 class="text-success">
                            R$ 99,90
                        </h5>

                        <a href="minecraft.php"
                           class="btn btn-dark w-100 mb-2">

                            Ver jogo

                        <a href="minecraft.php" class="btn btn-dark w-100">
                            Comprar
                        </a>

                    </div>

                </div>

            </div>

        </div>


        <!-- Cyberpunk 2077 -->
        <div class="col-md-4 mb-4">

            <div class="card h-100 shadow-sm">

                <img src="img/ciberpunk.jpeg"
                     class="card-img-top"
                     style="height:220px; object-fit:contain; background-color:#eee;"
                     alt="Cyberpunk 2077">

                <div class="card-body d-flex flex-column">

                    <h5 class="card-title">
                        Cyberpunk 2077
                    </h5>

                    <p class="text-muted">
                        RPG / Ação / Mundo Aberto
                    </p>

                    <p>
                        Explore Night City em uma
                        aventura futurista.
                    </p>

                    <div class="mt-auto">

                        <h5 class="text-success">
                            R$ 159,90
                        </h5>

                        <a href="cyberpunk.php"
                           class="btn btn-dark w-100 mb-2">

                            Ver jogo

                        </a>

                       <a href="cyberpunk.php" class="btn btn-dark w-100">
                            Comprar
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<?php include "footer.php"; ?>