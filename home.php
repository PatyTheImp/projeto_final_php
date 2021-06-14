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
            case '1':
                echo 'TEST';
                break;
        
            default:
                include "includes/cards.php";
                break;
        }
        
    ?>

<!-- Footer -->
<?php include "includes/footer.php"; ?>