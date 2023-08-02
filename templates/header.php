<?php 
    include_once('helpers/url.php');
    include_once('data/posts.php');
    include_once('data/categories.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Codar</title>
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">
    <!-- FONTES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="<?= $BASE_URL ?>/img/icon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/98283e91bc.js" crossorigin="anonymous"></script>
    <script src="<?= $BASE_URL ?>js/script.js"></script>
</head>
<body>
    <header>
        <p id="logo" > <img onclick="toggleNavbar()" src="<?= $BASE_URL ?>/img/logo.svg" alt="logo"> </p>
        <nav>
            <ul id="navbar" class="desktop">
                <li> <a class="navLink" href="<?= $BASE_URL ?>">Home</a> </li>
                <li> <a class="navLink" href="<?= $BASE_URL ?>categorias.php">Categorias</a> </li>
                <li> <a class="navLink" href="<?= $BASE_URL ?>sobre.php">Sobre</a> </li>
                <li> <a class="navLink" href="<?= $BASE_URL ?>contato.php">Contato</a></li>

            </ul>
        </nav>
        
    </header>