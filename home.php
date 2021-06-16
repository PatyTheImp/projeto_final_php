<!-- Conecção a base de dados -->
<?php include "includes/db.php"; ?>
<!-- Para poder fazer refresh -->
<?php ob_start(); ?>
<!-- Para iniciar sessão -->
<?php session_start(); ?>

<?php

if (!isset($_SESSION['level']))
  header("Location: index.php");

?>

<!-- Header -->
<?php include "includes/header.php" ?>

    <!-- Barra de navegação -->
    <?php include "includes/nav.php" ?>

    <h1 id="titulo" class="gradient-text text-break my-5">Anime</h1>
    <hr class="mb-5">

    <?php
        
        $source = '';
        if (isset($_GET['source']))
            $source = $_GET['source'];

        switch ($source)
        {
            //Cards filtradas por genero
            case 'genero':
                include "includes/cards_genero.php";
                break;
            
            //Cards filtradas por nome
            case 'nome':
                include "includes/cards_nome.php";
                break;
        
            default:
                include "includes/cards.php";
                break;
        }
        
    ?>

<!-- Footer -->
<?php include "includes/footer.php"; ?>