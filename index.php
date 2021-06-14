<!doctype html>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <title>Easy Fullscreen HTML5 Background Video</title>
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
            <input type="text" class="form-control" id="floatingInput" placeholder="user">
            <label for="floatingInput">Username</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>

          <button class="w-100 btn btn-lg btn-light my-3" type="submit">Log In</button>

          <a href="signup.php" class="text-white">Não tem conta? Registe-se!</a>
        </form>

        
      </main>
    </section>
  </div>



  <script src="js/bideo.js"></script>
  <script src="js/main.js"></script>

</body>

</html>