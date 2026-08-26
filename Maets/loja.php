<?php include "header.php"; ?>

<?php

$jogos = [

    [
        "nome" => "Grand Theft Auto V",
        "categoria" => "Ação",
        "genero" => "Ação / Mundo Aberto",
        "descricao" => "Explore Los Santos em uma grande aventura de mundo aberto.",
        "preco" => 149.90,
        "imagem" => "img/gtaV.jpeg",
        "pagina" => "gta.php"
    ],

    [
        "nome" => "Minecraft",
        "categoria" => "Sandbox",
        "genero" => "Sobrevivência / Sandbox",
        "descricao" => "Construa, explore e sobreviva em mundos feitos de blocos.",
        "preco" => 99.90,
        "imagem" => "img/mine.jpg.jpeg",
        "pagina" => "minecraft.php"
    ],

    [
        "nome" => "Cyberpunk 2077",
        "categoria" => "RPG",
        "genero" => "RPG / Ação / Mundo Aberto",
        "descricao" => "Explore Night City em uma aventura futurista.",
        "preco" => 159.90,
        "imagem" => "img/ciberpunk.jpeg",
        "pagina" => "cyberpunk.php"
    ],

    [
        "nome" => "Red Dead Redemption 2",
        "categoria" => "Aventura",
        "genero" => "Ação / Aventura / Mundo Aberto",
        "descricao" => "Viva uma grande aventura no velho oeste americano.",
        "preco" => 199.90,
        "imagem" => "img/rdr2.jpg",
        "pagina" => "rdr2.php"
    ],

    [
        "nome" => "God of War",
        "categoria" => "Ação",
        "genero" => "Ação / Aventura",
        "descricao" => "Acompanhe Kratos e Atreus em uma jornada pela mitologia nórdica.",
        "preco" => 179.90,
        "imagem" => "img/godofwar.jpg",
        "pagina" => "godofwar.php"
    ],

    [
        "nome" => "Forza Horizon 5",
        "categoria" => "Corrida",
        "genero" => "Corrida / Mundo Aberto",
        "descricao" => "Corra por paisagens incríveis e explore um enorme mundo aberto.",
        "preco" => 129.90,
        "imagem" => "img/forza.jpg",
        "pagina" => "forza.php"
    ]

];



$pesquisa = isset($_GET["pesquisa"])
    ? trim($_GET["pesquisa"])
    : "";


$categoriaSelecionada = isset($_GET["categoria"])
    ? $_GET["categoria"]
    : "Todas";


$jogosFiltrados = [];

foreach ($jogos as $jogo) {

    $nome = strtolower($jogo["nome"]);
    $genero = strtolower($jogo["genero"]);
    $textoPesquisa = strtolower($pesquisa);

    $encontrouPesquisa =
        $pesquisa === "" ||
        strpos($nome, $textoPesquisa) !== false ||
        strpos($genero, $textoPesquisa) !== false;

    $encontrouCategoria =
        $categoriaSelecionada === "Todas" ||
        $jogo["categoria"] === $categoriaSelecionada;

    if ($encontrouPesquisa && $encontrouCategoria) {
        $jogosFiltrados[] = $jogo;
    }
}

$categorias = [
    "Todas",
    "Ação",
    "Sandbox",
    "RPG",
    "Aventura",
    "Corrida"
];

?>

<div class="container my-5">


    <div class="text-center mb-5">

        <h1 class="fw-bold">
            Loja de Jogos
        </h1>

        <p class="text-muted">
            Encontre seus jogos favoritos no MAETS
        </p>

    </div>

    <div class="row justify-content-center mb-4">

        <div class="col-lg-8">

            <form method="GET">

                <div class="input-group input-group-lg">

                    <input
                        type="text"
                        name="pesquisa"
                        class="form-control"
                        placeholder="Pesquisar jogo..."
                        value="<?php echo htmlspecialchars($pesquisa); ?>"
                    >

                    <button
                        type="submit"
                        class="btn btn-dark"
                    >
                        <i class="bi bi-search"></i>
                        Pesquisar
                    </button>

                </div>

            </form>

        </div>

    </div>

    <div class="d-flex flex-wrap justify-content-center gap-2 mb-5">

        <?php foreach ($categorias as $categoria): ?>

            <a
                href="?pesquisa=<?php echo urlencode($pesquisa); ?>&categoria=<?php echo urlencode($categoria); ?>"
                class="btn <?php echo $categoriaSelecionada === $categoria ? 'btn-dark' : 'btn-outline-dark'; ?>"
            >
                <?php echo $categoria; ?>
            </a>

        <?php endforeach; ?>

    </div>

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h2 class="fw-bold mb-1">

                <?php

                if ($pesquisa !== "") {
                    echo "Resultados da pesquisa";
                } else {
                    echo "Jogos em destaque";
                }

                ?>

            </h2>

            <p class="text-muted mb-0">

                <?php echo count($jogosFiltrados); ?>

                jogo(s) encontrado(s)

            </p>

        </div>


        <?php if ($pesquisa !== "" || $categoriaSelecionada !== "Todas"): ?>

            <a
                href="loja.php"
                class="btn btn-outline-dark"
            >
                Limpar filtros
            </a>

        <?php endif; ?>

    </div>

    <div class="row">

        <?php if (count($jogosFiltrados) > 0): ?>

            <?php foreach ($jogosFiltrados as $jogo): ?>

                <div class="col-md-6 col-lg-4 mb-4">

                    <div class="card h-100 shadow-sm border-0">

                        <!-- IMAGEM -->

                        <img
                            src="<?php echo $jogo["imagem"]; ?>"
                            class="card-img-top"
                            alt="<?php echo htmlspecialchars($jogo["nome"]); ?>"
                            style="
                                height: 230px;
                                object-fit: contain;
                                background-color: #f1f1f1;
                            "
                        >

                        <div class="card-body d-flex flex-column">

                            <span class="badge bg-dark align-self-start mb-2">

                                <?php echo $jogo["categoria"]; ?>

                            </span>


                            <h5 class="card-title fw-bold">

                                <?php echo $jogo["nome"]; ?>

                            </h5>


                            <p class="text-muted mb-2">

                                <?php echo $jogo["genero"]; ?>

                            </p>


                            <p class="card-text">

                                <?php echo $jogo["descricao"]; ?>

                            </p>


                            <div class="mt-auto">

                                <!-- PREÇO -->

                                <h4 class="fw-bold mb-3">

                                    R$

                                    <?php echo number_format(
                                        $jogo["preco"],
                                        2,
                                        ",",
                                        "."
                                    ); ?>

                                </h4>


                                <!-- BOTÕES -->

                                <a
                                    href="<?php echo $jogo["pagina"]; ?>"
                                    class="btn btn-outline-dark w-100 mb-2"
                                >
                                    Ver jogo
                                </a>


                                <a
                                    href="<?php echo $jogo["pagina"]; ?>"
                                    class="btn btn-outline-dark w-100"
                                >
                                    Comprar
                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        <?php else: ?>

            <div class="col-12">

                <div class="text-center py-5">

                    <i
                        class="bi bi-controller"
                        style="font-size: 60px;"
                    ></i>

                    <h3 class="fw-bold mt-3">

                        Nenhum jogo encontrado

                    </h3>

                    <p class="text-muted">

                        Não encontramos jogos com os filtros selecionados.

                    </p>

                    <a
                        href="loja.php"
                        class="btn btn-dark"
                    >
                        Ver todos os jogos
                    </a>

                </div>

            </div>

        <?php endif; ?>

    </div>

</div>

<?php include "footer.php"; ?>