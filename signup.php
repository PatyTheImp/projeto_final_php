<!-- Conecção a base de dados -->
<?php include "includes/db.php"; ?>
<!-- Funções -->
<?php include "admin/includes/functions.php" ?>
<!-- Para poder fazer refresh -->
<?php ob_start(); ?>
<!-- Para iniciar sessão -->
<?php session_start(); ?>

<!doctype html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <title>Sign Up</title>
  <meta name="keywords" content="css3, html5, js, background video, fullscreen video">
  <meta name="description" content="Super easy to implement HTML5 fullscreen background video library in JavaScript.">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Para o fundo em video  -->
  <link rel="stylesheet" href="css/login_style.css">

  <script src="https://use.typekit.net/nlq1kdt.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
</head>
<body>
  <div id="container">
    <video id="background_video" loop muted></video>
    <div id="video_cover"></div>
    <div id="overlay"></div>

    <section id="main_content">
    <main class="form-signin">
  <form class="bg-dark" method="post">
    <img class="mb-4" src="imagens/gundam.png" alt="gundam" width="72">
    <h1 class="h3 mb-3 fw-normal">Sign Up</h1>

    <div class="row">
      <div class="form-floating mb-3 col-md-6">
        <input type="text" class="form-control" id="floatingInput" name="nome" required>
        <label for="floatingInput">Nome</label>
      </div>
      <div class="form-floating mb-3 col-md-6">
        <input type="text" class="form-control" id="floatingInput" name="apelido" required>
        <label for="floatingPassword">Apelido</label>
      </div>
    </div>
    <div class="row">
      <div class="form-floating mb-3 col-md-6">
        <input type="text" class="form-control" id="floatingInput" name="username" required>
        <label for="floatingInput">Username</label>
      </div>
      <div class="form-floating mb-3 col-md-6">
        <input type="password" class="form-control" id="floatingPassword" name="password" required>
        <label for="floatingPassword">Password</label>
      </div>
    </div>

    <button class="w-100 btn btn-lg btn-outline-light mb-3" type="submit" name="signup_submit">Sign Up</button>

    <?php
    
    if (isset($_POST['signup_submit']))
    {
      $nome = mysqli_real_escape_string($connection, $_POST['nome']);
      $apelido = mysqli_real_escape_string($connection, $_POST['apelido']);
      $username = mysqli_real_escape_string($connection, $_POST['username']);
      $password = mysqli_real_escape_string($connection, $_POST['password']);

      $query_procura = "SELECT * FROM usuarios WHERE username = '{$username}'";
      $procura = mysqli_query($connection, $query_procura);

      verifica($procura);

      $num_registos = mysqli_num_rows($procura);
      if ($num_registos > 0)
        echo "<label class='text-danger'>Username indisponível. Escolha outro.</label>";
      else 
      {
        $query_inserir = 
          "INSERT INTO usuarios (username, primeiro_nome, apelido, password) 
          VALUES ('{$username}', '{$nome}', '{$apelido}', '{$password}')";

        $inserir = mysqli_query($connection, $query_inserir);
        verifica($inserir);

        //Para encontrar o id do utilizador acabado de criar
        $query_procura_id = "SELECT id FROM usuarios WHERE username = '{$username}'";
        $procura_id = mysqli_query($connection, $query_procura_id);
        verifica($procura_id);

        $row = mysqli_fetch_array($procura_id);
        $id = $row['id'];

        //Variavais de inicio de sessão.
        //Para poder passar as informações especificas do utilizador
        $_SESSION['username'] = $username;
        $_SESSION['id'] = $id;
        $_SESSION['nome'] = $nome;
        $_SESSION['apelido'] = $apelido;
        $_SESSION['level'] = 'guest';

        header("Location: home.php");
      }
    }
    
    ?>

    <div class="row">
      <a href="index.php" class="text-white">Já tem conta? Faça Login!</a>
    </div>
  </form>
</main>


    </section>
  </div>

  

  <script src="js/bideo.js"></script> 
  <script src="js/main.js"></script>

</body>
</html>