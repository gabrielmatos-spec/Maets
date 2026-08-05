<?php
error_reporting(0);
session_start();

date_default_timezone_set('America/Sao_Paulo');

if(isset($_SESSION['logado']) && $_SESSION['logado'] === true){

    $idUsuario    = $_SESSION['idUsuario'];
    $nomeUsuario  = $_SESSION['nomeUsuario'];
    $emailUsuario = $_SESSION['emailUsuario'];
    $nivelUsuario = $_SESSION['nivelUsuario'];

    $nomeCompleto = explode(" ", $nomeUsuario);
    $primeiroNome = $nomeCompleto[0];
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>MAETS: Plataforma Digital de Distribuição de Jogos Digitais</title>
<link href="css/styles.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<style>

body{
    background:#1b2838;
    color:white;
    font-family:Arial, Helvetica, sans-serif;
}

.navbar{
    background:#171a21;
}

.navbar-brand{
    color:#66c0f4!important;
    font-weight:bold;
    font-size:28px;
}

.nav-link{
    color:white!important;
}

.nav-link:hover{
    color:#66c0f4!important;
}

.banner{
    height:550px;
    background-image:
    linear-gradient(rgba(23,26,33,.80),rgba(23,26,33,.85)),
    url("assets/img/banner.jpg");
    background-size:cover;
    background-position:center;

    display:flex;
    justify-content:center;
    align-items:center;
    text-align:center;
}

.banner h1{
    font-size:60px;
    font-weight:bold;
}

.banner p{
    font-size:22px;
}

.btn-steam{

    background:#66c0f4;
    color:#fff;
    border:none;
    padding:15px 35px;
    font-size:20px;
    border-radius:8px;
    transition:.3s;

}

.btn-steam:hover{

    background:#1999ff;

}

.titulo{

    font-size:38px;
    margin-bottom:40px;
    font-weight:bold;

}

.card{

    background:#2a475e;
    border:none;
    transition:.3s;
    overflow:hidden;

}

.card:hover{

    transform:scale(1.04);
    box-shadow:0px 0px 20px rgba(102,192,244,.4);

}

.card img{

    height:260px;
    object-fit:cover;

}

.card-title{

    color:white;

}

.preco{

    color:#66c0f4;
    font-size:22px;
    font-weight:bold;

}

footer{

    background:#171a21;
    color:#9aa7b2;
    padding:30px;

}

</style>

</head>

<body>

<nav class="navbar navbar-expand-lg">

<div class="container">

<a class="navbar-brand" href="index.php">

MAETS

</a>

<button class="navbar-toggler bg-light" data-bs-toggle="collapse" data-bs-target="#menu">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse" id="menu">

<ul class="navbar-nav me-auto">

<li class="nav-item">
<a class="nav-link" href="#">Loja</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#">Categorias</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#">Lançamentos</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#">Promoções</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#">Sobre</a>
</li>

</ul>

<ul class="navbar-nav">

<?php

if(isset($_SESSION['logado']) && $_SESSION['logado']===true){

?>

<li class="nav-item dropdown">

<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">

<i class="bi bi-person-circle"></i>

<?php echo $primeiroNome; ?>

</a>

<ul class="dropdown-menu dropdown-menu-end">

<li>

<a class="dropdown-item" href="formAnuncio.php">

Criar anúncio

</a>

</li>

<li>

<a class="dropdown-item" href="#">

Meus anúncios

</a>

</li>

<li>

<a class="dropdown-item" href="#">

Minhas compras

</a>

</li>

<?php

if($nivelUsuario=="administrador"){

?>

<li><hr></li>

<li>

<a class="dropdown-item" href="listarUsuarios.php">

Gerenciar usuários

</a>

</li>

<?php

}

?>

<li><hr></li>

<li>

<a class="dropdown-item" href="logout.php">

Sair

</a>

</li>

</ul>

</li>

<?php

}else{

?>

<li class="nav-item">

<a class="nav-link" href="formLogin.php">

Login

</a>

</li>

<?php

}

?>

</ul>

</div>

</div>

</nav>

<header class="banner">

<div>

<h1>Bem-vindo à MAETS</h1>

<p>

A sua plataforma digital para comprar, vender e descobrir novos jogos.

</p>

<br>

<a href="#jogos" class="btn btn-steam">

Explorar Jogos

</a>

</div>

</header>

<section class="container py-5" id="jogos">

<h2 class="titulo">

Jogos em Destaque

</h2>

<div class="row">
    <!-- Card 1 -->
<div class="col-lg-3 col-md-6 mb-4">

    <div class="card h-100">

        <img src="assets/img/gta5.jpg" class="card-img-top">

        <div class="card-body">

            <h5 class="card-title">
                Grand Theft Auto V
            </h5>

            <p>
                Explore Los Santos em um dos jogos mais vendidos da história.
            </p>

            <p class="preco">
                R$ 79,90
            </p>

            <a href="#" class="btn btn-primary w-100">
                Ver Jogo
            </a>

        </div>

    </div>

</div>

<!-- Card 2 -->
<div class="col-lg-3 col-md-6 mb-4">

    <div class="card h-100">

        <img src="assets/img/minecraft.jpg" class="card-img-top">

        <div class="card-body">

            <h5 class="card-title">
                Minecraft
            </h5>

            <p>
                Sobreviva, construa e explore mundos infinitos.
            </p>

            <p class="preco">
                R$ 99,90
            </p>

            <a href="#" class="btn btn-primary w-100">
                Ver Jogo
            </a>

        </div>

    </div>

</div>

<!-- Card 3 -->
<div class="col-lg-3 col-md-6 mb-4">

    <div class="card h-100">

        <img src="assets/img/fifa.jpg" class="card-img-top">

        <div class="card-body">

            <h5 class="card-title">
                EA Sports FC 26
            </h5>

            <p>
                O futebol mais realista da nova geração.
            </p>

            <p class="preco">
                R$ 249,90
            </p>

            <a href="#" class="btn btn-primary w-100">
                Ver Jogo
            </a>

        </div>

    </div>

</div>

<!-- Card 4 -->
<div class="col-lg-3 col-md-6 mb-4">

    <div class="card h-100">

        <img src="assets/img/cyberpunk.jpg" class="card-img-top">

        <div class="card-body">

            <h5 class="card-title">
                Cyberpunk 2077
            </h5>

            <p>
                Viva aventuras futuristas em Night City.
            </p>

            <p class="preco">
                R$ 159,90
            </p>

            <a href="#" class="btn btn-primary w-100">
                Ver Jogo
            </a>

        </div>

    </div>

</div>

<!-- Card 5 -->
<div class="col-lg-3 col-md-6 mb-4">

    <div class="card h-100">

        <img src="assets/img/reddead2.jpg" class="card-img-top">

        <div class="card-body">

            <h5 class="card-title">
                Red Dead Redemption II
            </h5>

            <p>
                Um enorme mundo aberto no velho oeste.
            </p>

            <p class="preco">
                R$ 119,90
            </p>

            <a href="#" class="btn btn-primary w-100">
                Ver Jogo
            </a>

        </div>

    </div>

</div>

<!-- Card 6 -->
<div class="col-lg-3 col-md-6 mb-4">

    <div class="card h-100">

        <img src="assets/img/eldenring.jpg" class="card-img-top">

        <div class="card-body">

            <h5 class="card-title">
                Elden Ring
            </h5>

            <p>
                Enfrente criaturas épicas em um RPG premiado.
            </p>

            <p class="preco">
                R$ 199,90
            </p>

            <a href="#" class="btn btn-primary w-100">
                Ver Jogo
            </a>

        </div>

    </div>

</div>

<!-- Card 7 -->
<div class="col-lg-3 col-md-6 mb-4">

    <div class="card h-100">

        <img src="assets/img/forza.jpg" class="card-img-top">

        <div class="card-body">

            <h5 class="card-title">
                Forza Horizon 5
            </h5>

            <p>
                Corra pelos cenários incríveis do México.
            </p>

            <p class="preco">
                R$ 149,90
            </p>

            <a href="#" class="btn btn-primary w-100">
                Ver Jogo
            </a>

        </div>

    </div>

</div>

<!-- Card 8 -->
<div class="col-lg-3 col-md-6 mb-4">

    <div class="card h-100">

        <img src="assets/img/cs2.jpg" class="card-img-top">

        <div class="card-body">

            <h5 class="card-title">
                Counter-Strike 2
            </h5>

            <p>
                O FPS competitivo mais famoso do mundo.
            </p>

            <p class="preco">
                Gratuito
            </p>

            <a href="#" class="btn btn-primary w-100">
                Ver Jogo
            </a>

        </div>

    </div>

</div>

</div>

</section>

<footer>

<div class="container text-center">

<h4 class="mb-3">

MAETS

</h4>

<p>

Plataforma Digital de Distribuição de Jogos.

</p>

<hr>

<p>

© 2026 MAETS - Todos os direitos reservados.

</p>

</div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>