<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    header("Location: formLogin.php");
    exit();
}

include "conexaoBD.php";

$emailSessao = $_SESSION['emailUsuario'];

$emailSessao = mysqli_real_escape_string($conn, $emailSessao);

$consultaUsuario = "SELECT *
                    FROM usuarios
                    WHERE emailUsuario = '$emailSessao'";

$resultadoUsuario = mysqli_query($conn, $consultaUsuario);

if (!$resultadoUsuario || mysqli_num_rows($resultadoUsuario) == 0) {
    die("Não foi possível encontrar o usuário.");
}

$usuario = mysqli_fetch_assoc($resultadoUsuario);

$nomeUsuario = $usuario['nomeUsuario'];
$dataNascimentoUsuario = $usuario['dataNascimentoUsuario'];
$emailUsuario = $usuario['emailUsuario'];
$fotoUsuario = $usuario['fotoUsuario'];

include "header.php";

?>

<style>

.editar-container {
    max-width: 700px;
    margin: 50px auto;
}

.editar-card {
    background: #171a21;
    border: 1px solid #2a475e;
    border-radius: 10px;
    padding: 35px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.3);
}

.editar-titulo {
    color: white;
    font-size: 28px;
    font-weight: bold;
}

.editar-subtitulo {
    color: #8a9aaa;
}

.form-label {
    color: #c7d5e0;
}

.form-control {
    background: #0f1922;
    color: white;
    border: 1px solid #2a475e;
}

.form-control:focus {
    background: #0f1922;
    color: white;
    border-color: #66c0f4;
    box-shadow: 0 0 0 0.2rem rgba(102,192,244,0.15);
}

.form-control::placeholder {
    color: #71808f;
}

.foto-atual {
    width: 130px;
    height: 130px;
    object-fit: cover;
    border-radius: 50%;
    border: 3px solid #2a475e;
}

.btn-salvar {
    background: #66c0f4;
    color: #171a21;
    border: none;
    padding: 10px 25px;
    border-radius: 6px;
    font-weight: bold;
    transition: 0.2s;
}

.btn-salvar:hover {
    background: #4da8d8;
    color: white;
}

.btn-cancelar {
    color: #8a9aaa;
    border: 1px solid #71808f;
    background: transparent;
    padding: 10px 20px;
    border-radius: 6px;
    text-decoration: none;
}

.btn-cancelar:hover {
    color: white;
    border-color: white;
}

</style>


<div class="container editar-container">

    <div class="editar-card">

        <div class="text-center mb-4">

            <h1 class="editar-titulo">
                Editar Perfil
            </h1>

            <p class="editar-subtitulo">
                Altere as informações da sua conta
            </p>

        </div>


        <form action="actionEditarPerfil.php" method="POST" enctype="multipart/form-data">


            <!-- Foto atual -->
            <div class="text-center mb-4">

                <img
                    src="<?php echo htmlspecialchars($fotoUsuario); ?>"
                    class="foto-atual"
                    alt="Foto de perfil"
                >

            </div>


            <!-- Nova foto -->
            <div class="mb-3">

                <label for="fotoUsuario" class="form-label">
                    Foto de perfil
                </label>

                <input
                    type="file"
                    name="fotoUsuario"
                    id="fotoUsuario"
                    class="form-control"
                    accept=".jpg,.jpeg,.png,.webp"
                >

                <small class="text-secondary">
                    Deixe vazio para manter a foto atual.
                </small>

            </div>


            <!-- Nome -->
            <div class="mb-3">

                <label for="nomeUsuario" class="form-label">
                    Nome completo
                </label>

                <input
                    type="text"
                    name="nomeUsuario"
                    id="nomeUsuario"
                    class="form-control"
                    value="<?php echo htmlspecialchars($nomeUsuario); ?>"
                    required
                >

            </div>


            <!-- Data de nascimento -->
            <div class="mb-3">

                <label for="dataNascimentoUsuario" class="form-label">
                    Data de nascimento
                </label>

                <input
                    type="date"
                    name="dataNascimentoUsuario"
                    id="dataNascimentoUsuario"
                    class="form-control"
                    value="<?php echo htmlspecialchars($dataNascimentoUsuario); ?>"
                    required
                >

            </div>


            <!-- E-mail -->
            <div class="mb-4">

                <label for="emailUsuario" class="form-label">
                    E-mail
                </label>

                <input
                    type="email"
                    name="emailUsuario"
                    id="emailUsuario"
                    class="form-control"
                    value="<?php echo htmlspecialchars($emailUsuario); ?>"
                    required
                >

            </div>


            <!-- Botões -->
            <div class="d-flex justify-content-between">

                <a href="perfil.php" class="btn-cancelar">
                    Cancelar
                </a>

                <button type="submit" class="btn-salvar">
                    Salvar alterações
                </button>

            </div>

        </form>

    </div>

</div>


<?php include "footer.php"; ?>