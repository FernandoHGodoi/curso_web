<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Hospital</title>

    <!-- IMPORTANDO CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- IMPORTANDO BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/365168cdc3.js" crossorigin="anonymous"></script>

    <!-- CONEXAO COM O BANCO -->
    <?php

        include 'conexao.php';

        //INICIANDO SESSAO
        session_start();

    ?>

    <!-- MENU -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Projeto Hospital</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php"><i class="fas fa-home"></i> Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="convenios.php">Convênios</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
</head>

<body>    

    <div class="container">