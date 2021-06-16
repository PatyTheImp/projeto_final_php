<!-- Conecção a base de dados -->
<?php include "../includes/db.php"; ?>
<!-- Funções -->
<?php include "includes/functions.php"; ?>
<!-- Para poder fazer refresh -->
<?php ob_start(); ?>
<!-- Header -->
<?php include "includes/admin_header.php" ?>



<div class="container-fluid">
  <div class="row">

    <!-- Barra lateral de navegação -->
    <?php include "includes/admin_nav.php" ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      
      <?php
      
      $source = '';
      if (isset($_GET['source']))
        $source = $_GET['source'];
      
      switch ($source) 
      {
        //Mostra a tabela com todos os animes
        case 'todos':
          include "includes/tabela_anime.php";
          break;

        //Mostra o formulário para adicionar novo anime
        case 'adicionar':
          include "includes/adicionar.php";
          break;

        //Mostra o formulário para editar anime
        case 'editar':
          include "includes/editar.php";
          break;

        //Mostra o formulário para editar anime
        case 'utilizadores':
          include "includes/utilizadores.php";
          break;
        
        default:
          include "includes/admin_inicial.php";
          break;
      }

      ?>

    </main>
  </div>
</div>

<!-- Footer -->
<?php include "includes/admin_footer.php" ?>