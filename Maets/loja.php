<?php include "header.php"; ?>

<?php

$pesquisa = isset($_GET['pesquisa']) ? strtolower(trim($_GET['pesquisa'])) : "";

?>

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

            <form method="GET">

                <div class="input-group">

                    <input type="text"
                           name="pesquisa"
                           class="form-control"
                           placeholder="Pesquisar jogo..."
                           value="<?php echo htmlspecialchars($pesquisa); ?>">

                    <button class="btn btn-dark" type="submit">
                        <i class="bi bi-search"></i>
                        Pesquisar
                    </button>

                </div>

            </form>

        </div>

    </div>


    <!-- Jogos -->
    <h2 class="mb-4">
        Jogos em destaque
    </h2>


    <!-- Grade dos jogos -->
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">


        <!-- Card GTA V -->
        <?php if (
            $pesquisa == "" ||
            strpos("grand theft auto v", $pesquisa) !== false ||
            strpos("gta v", $pesquisa) !== false
        ): ?>

        <div class="col">

            <div class="card h-100 shadow-sm">

                <img src="img/gtaV.jpeg"
                     class="card-img-top"
                     style="height: 280px; object-fit: cover; object-position: center;"
                     alt="GTA V">

                <div class="card-body d-flex flex-column justify-content-between">

                    <div>

                        <h5 class="card-title fw-bold">
                            Grand Theft Auto V
                        </h5>

                        <p class="card-text text-muted small">
                            Explore Los Santos em um dos maiores sucessos da Rockstar.
                        </p>

                    </div>

                    <div>

                        <p class="fw-bold text-success fs-5 mb-2">
                            R$ 149,90
                        </p>

                        <a href="detalhegta.php"
                           class="btn btn-primary w-100">
                            Ver Jogo
                        </a>

                    </div>

                </div>

            </div>

        </div>

        <?php endif; ?>


        <!-- Card Minecraft -->
        <?php if (
            $pesquisa == "" ||
            strpos("minecraft", $pesquisa) !== false
        ): ?>

        <div class="col">

            <div class="card h-100 shadow-sm">

                <img src="img/mine.jpg.jpeg"
                     class="card-img-top"
                     style="height: 280px; object-fit: cover; object-position: center;"
                     alt="Minecraft">

                <div class="card-body d-flex flex-column justify-content-between">

                    <div>

                        <h5 class="card-title fw-bold">
                            Minecraft
                        </h5>

                        <p class="card-text text-muted small">
                            Construa, explore e sobreviva em mundos feitos de blocos.
                        </p>

                    </div>

                    <div>

                        <p class="fw-bold text-success fs-5 mb-2">
                            R$ 99,90
                        </p>

                        <a href="minecraft.php"
                           class="btn btn-primary w-100">
                            Ver Jogo
                        </a>

                    </div>

                </div>

            </div>

        </div>

        <?php endif; ?>


        <!-- Card Cyberpunk 2077 -->
        <?php if (
            $pesquisa == "" ||
            strpos("cyberpunk 2077", $pesquisa) !== false ||
            strpos("cyberpunk", $pesquisa) !== false
        ): ?>

        <div class="col">

            <div class="card h-100 shadow-sm">

                <img src="img/ciberpunk.jpeg"
                     class="card-img-top"
                     style="height: 280px; object-fit: cover; object-position: center;"
                     alt="Cyberpunk 2077">

                <div class="card-body d-flex flex-column justify-content-between">

                    <div>

                        <h5 class="card-title fw-bold">
                            Cyberpunk 2077
                        </h5>

                        <p class="card-text text-muted small">
                            Explore Night City em uma aventura futurista.
                        </p>

                    </div>

                    <div>

                        <p class="fw-bold text-success fs-5 mb-2">
                            R$ 159,90
                        </p>

                        <a href="cyberpunk.php"
                           class="btn btn-primary w-100">
                            Ver Jogo
                        </a>

                    </div>

                </div>

            </div>

        </div>

        <?php endif; ?>


        <!-- Card Red Dead Redemption 2 -->
        <?php if (
            $pesquisa == "" ||
            strpos("red dead redemption 2", $pesquisa) !== false ||
            strpos("red dead", $pesquisa) !== false
        ): ?>

        <div class="col">

            <div class="card h-100 shadow-sm">

                <img src="img/rdr2.jpg"
                     class="card-img-top"
                     style="height: 280px; object-fit: cover; object-position: center;"
                     alt="Red Dead Redemption 2">

                <div class="card-body d-flex flex-column justify-content-between">

                    <div>

                        <h5 class="card-title fw-bold">
                            Red Dead Redemption 2
                        </h5>

                        <p class="card-text text-muted small">
                            Viva uma grande aventura no velho oeste americano.
                        </p>

                    </div>

                    <div>

                        <p class="fw-bold text-success fs-5 mb-2">
                            R$ 199,90
                        </p>

                        <a href="rdr2.php"
                           class="btn btn-primary w-100">
                            Ver Jogo
                        </a>

                    </div>

                </div>

            </div>

        </div>

        <?php endif; ?>


        <!-- Card God of War -->
        <?php if (
            $pesquisa == "" ||
            strpos("god of war", $pesquisa) !== false ||
            strpos("god", $pesquisa) !== false
        ): ?>

        <div class="col">

            <div class="card h-100 shadow-sm">

                <img src="img/godofwar.jpg"
                     class="card-img-top"
                     style="height: 280px; object-fit: cover; object-position: center;"
                     alt="God of War">

                <div class="card-body d-flex flex-column justify-content-between">

                    <div>

                        <h5 class="card-title fw-bold">
                            God of War
                        </h5>

                        <p class="card-text text-muted small">
                            Acompanhe Kratos e Atreus em uma jornada pela mitologia nórdica.
                        </p>

                    </div>

                    <div>

                        <p class="fw-bold text-success fs-5 mb-2">
                            R$ 179,90
                        </p>

                        <a href="godofwar.php"
                           class="btn btn-primary w-100">
                            Ver Jogo
                        </a>

                    </div>

                </div>

            </div>

        </div>

        <?php endif; ?>


        <!-- Card Forza Horizon 5 -->
        <?php if (
            $pesquisa == "" ||
            strpos("forza horizon 5", $pesquisa) !== false ||
            strpos("forza", $pesquisa) !== false
        ): ?>

        <div class="col">

            <div class="card h-100 shadow-sm">

                <img src="img/forza.jpg"
                     class="card-img-top"
                     style="height: 280px; object-fit: cover; object-position: center;"
                     alt="Forza Horizon 5">

                <div class="card-body d-flex flex-column justify-content-between">

                    <div>

                        <h5 class="card-title fw-bold">
                            Forza Horizon 5
                        </h5>

                        <p class="card-text text-muted small">
                            Corra por paisagens incríveis e explore um enorme mundo aberto.
                        </p>

                    </div>

                    <div>

                        <p class="fw-bold text-success fs-5 mb-2">
                            R$ 129,90
                        </p>

                        <a href="forza.php"
                           class="btn btn-primary w-100">
                            Ver Jogo
                        </a>

                    </div>

                </div>

            </div>

        </div>

        <?php endif; ?>


        <!-- Card Outlast -->
        <?php if (
            $pesquisa == "" ||
            strpos("outlast", $pesquisa) !== false
        ): ?>

        <div class="col">

            <div class="card h-100 shadow-sm">

                <img src="img/outlast.jpg"
                     class="card-img-top"
                     style="height: 280px; object-fit: cover; object-position: center;"
                     alt="Outlast">

                <div class="card-body d-flex flex-column justify-content-between">

                    <div>

                        <h5 class="card-title fw-bold">
                            Outlast
                        </h5>

                        <p class="card-text text-muted small">
                            Uma experiência intensa de terror e sobrevivência em um lugar abandonado.
                        </p>

                    </div>

                    <div>

                        <p class="fw-bold text-success fs-5 mb-2">
                            R$ 89,90
                        </p>

                        <a href="outlast.php"
                           class="btn btn-primary w-100">
                            Ver Jogo
                        </a>

                    </div>

                </div>

            </div>

        </div>

        <?php endif; ?>


        <!-- Card Ghost of Yotei -->
        <?php if (
            $pesquisa == "" ||
            strpos("ghost of yotei", $pesquisa) !== false ||
            strpos("ghost", $pesquisa) !== false
        ): ?>

        <div class="col">

            <div class="card h-100 shadow-sm">

                <img src="img/ghostofyotei.jpg"
                     class="card-img-top"
                     style="height: 280px; object-fit: cover; object-position: center;"
                     alt="Ghost of Yotei">

                <div class="card-body d-flex flex-column justify-content-between">

                    <div>

                        <h5 class="card-title fw-bold">
                            Ghost of Yotei
                        </h5>

                        <p class="card-text text-muted small">
                            Uma jornada de ação, exploração e aventura em um cenário inspirado no Japão.
                        </p>

                    </div>

                    <div>

                        <p class="fw-bold text-success fs-5 mb-2">
                            R$ 299,90
                        </p>

                        <a href="ghostofyotei.php"
                           class="btn btn-primary w-100">
                            Ver Jogo
                        </a>

                    </div>

                </div>

            </div>

        </div>

        <?php endif; ?>


        <!-- Card Spider-Man PS4 -->
        <?php if (
            $pesquisa == "" ||
            strpos("spiderman ps4", $pesquisa) !== false ||
            strpos("spider man", $pesquisa) !== false ||
            strpos("spiderman", $pesquisa) !== false
        ): ?>

        <div class="col">

            <div class="card h-100 shadow-sm">

                <img src="img/spidermanps4.jpg"
                     class="card-img-top"
                     style="height: 280px; object-fit: cover; object-position: center;"
                     alt="Spider-Man PS4">

                <div class="card-body d-flex flex-column justify-content-between">

                    <div>

                        <h5 class="card-title fw-bold">
                            Spider-Man PS4
                        </h5>

                        <p class="card-text text-muted small">
                            Balance-se por Nova York em uma aventura eletrizante como o Homem-Aranha.
                        </p>

                    </div>

                    <div>

                        <p class="fw-bold text-success fs-5 mb-2">
                            R$ 149,90
                        </p>

                        <a href="spidermanps4.php"
                           class="btn btn-primary w-100">
                            Ver Jogo
                        </a>

                    </div>

                </div>

            </div>

        </div>

        <?php endif; ?>


    </div>

</div>

<?php include "footer.php"; ?>