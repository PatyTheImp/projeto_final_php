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
  <title>Login</title>
  <meta name="keywords" content="css3, html5, js, background video, fullscreen video">
  <meta name="description" content="Super easy to implement HTML5 fullscreen background video library in JavaScript.">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- Para o fundo em video  -->
  <link rel="stylesheet" href="css/login_style.css">

  <script src="https://use.typekit.net/nlq1kdt.js"></script>
  <script>
    try {
      Typekit.load({
        async: true
      });
    } catch (e) {}
  </script>
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
          <h1 class="h3 mb-3 fw-normal">Log in</h1>

          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="username" required>
            <label for="floatingInput">Username</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" name="password" required>
            <label for="floatingPassword">Password</label>
          </div>

          <button class="w-100 btn btn-lg btn-outline-light my-3" type="submit" name="login">Log In</button>

          <?php
          
          if (isset($_POST['login']))
          {
            $username = mysqli_real_escape_string($connection, $_POST['username']);
            $password = mysqli_real_escape_string($connection, $_POST['password']);

            $query = "SELECT * FROM usuarios WHERE username = '{$username}'";
            $procura_user = mysqli_query($connection, $query);

            verifica($procura_user);

            $num_registos = mysqli_num_rows($procura_user);
            if ($num_registos < 1)
              echo "<label class='text-danger'>Username ou password incorretos</label>";
            else
            {
              $row = mysqli_fetch_array($procura_user);
              $bd_password = $row['password'];

              if ($password != $bd_password)
                echo "<label class='text-danger'>Username ou password incorretos</label>";
              else
              {
                //Variavais de inicio de sessão.
                //Para poder passar as informações especificas do utilizador
                $_SESSION['username'] = $username;
                $_SESSION['id'] = $row['id'];
                $_SESSION['nome'] = $row['primeiro_nome'];
                $_SESSION['apelido'] = $row['apelido'];
                $_SESSION['level'] = $row['level'];

                //Dependendo do level do utilizador, ele é reencaminhado para uma pagina diferente
                if ($_SESSION['level'] != 'guest')
                  header("Location: admin/index.php");
                else
                  header("Location: home.php");
              }
            }
          }
          
          ?>

          <div class="row">
            <a href="signup.php" class="text-white">Não tem conta? Registe-se!</a>
          </div>
        </form>

        
      </main>
    </section>
  </div>

  <script src="js/bideo.js"></script>
  <script src="js/main.js"></script>

</body>

</html>