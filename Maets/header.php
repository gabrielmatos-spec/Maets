<?php
    error_reporting(0);
    session_start();

    date_default_timezone_set('America/Sao_Paulo');

    if(isset($_SESSION['logado']) && $_SESSION['logado'] === true){

        $idUsuario = $_SESSION['idUsuario'];
        $nomeUsuario = $_SESSION['nomeUsuario'];
        $emailUsuario = $_SESSION['emailUsuario'];
        $nivelUsuario = $_SESSION['nivelUsuario'];

        $nomeCompleto = explode(' ', $nomeUsuario);
        $primeiroNome = $nomeCompleto[0];
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MAETS - Plataforma Digital de Distribuição de Jogos</title>

    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">

    <link href="css/styles.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">

    <style>

        body{
            background:#f8f9fa;
        }

        .navbar{
            background:#171a21;
        }

        .navbar-brand,
        .nav-link{
            color:white !important;
        }

        .nav-link:hover{
            color:#66c0f4 !important;
        }

        .banner{
            background:#000;
            color:white;
            padding:60px 0;
        }

        .audiowide{
            font-family:"Audiowide", sans-serif;
        }

    </style>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark">

    <div class="container">

        <a class="navbar-brand audiowide" href="index.php">
            MAETS
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto">

                <li class="nav-item">
                    <a class="nav-link" href="index.php">Loja</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Categorias</a>
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

                if(isset($_SESSION['logado']) && $_SESSION['logado'] === true){

                ?>

                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle"
                           href="#"
                           data-bs-toggle="dropdown">

                            <i class="bi bi-person-circle"></i>
                            <?php echo $primeiroNome; ?>

                        </a>

                        <ul class="dropdown-menu dropdown-menu-end">

                            <li>
                                <a class="dropdown-item" href="#">
                                    Meus Jogos
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="#">
                                    Minha Biblioteca
                                </a>
                            </li>

                            <?php if($nivelUsuario=="administrador"){ ?>

                                <li><hr></li>

                                <li>
                                    <a class="dropdown-item" href="listarUsuarios.php">
                                        Gerenciar Usuários
                                    </a>
                                </li>

                            <?php } ?>

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

                <?php } ?>

            </ul>

        </div>

    </div>

</nav>

<header class="banner">

    <div class="container text-center">

        <img src="img/logo.maets.jpeg"
             width="150"
             class="mb-3">

        <h1 class="audiowide">
            MAETS
        </h1>

        <p class="lead">
            Plataforma Digital de Distribuição de Jogos
        </p>

        <a href="index.php" class="btn btn-primary">
            Explorar Jogos
        </a>

    </div>

</header>

<section class="py-5">

    <div class="container">