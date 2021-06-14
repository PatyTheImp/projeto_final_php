<!-- Conecção a base de dados -->
<?php include "../includes/db.php"; ?>
<!-- Funções -->
<?php include "includes/functions.php"; ?>
<!-- Header -->
<?php include "includes/admin_header.php" ?>



<div class="container-fluid">
  <div class="row">

    <!-- Barra lateral de navegação -->
    <?php include "includes/admin_nav.php" ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h5 class="h4"><?= comprimento(); ?> paty. <?= data_de_hoje() . hora_atual(); ?></h5>
      </div>


    </main>
  </div>
</div>

<?php include "includes/admin_footer.php" ?>