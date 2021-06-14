<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Animes</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Icones -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Animate On Scroll -->
    <link rel="stylesheet" href="css/aos.css">
    <!-- Meu CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-dark text-white">

    <!-- Barra de navegação -->
    <nav class="navbar navbar-expand-sm navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="imagens/gundam.png" height="40" alt="gundam"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample03">
                <ul class="navbar-nav ms-auto mb-2 mb-sm-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-fill"></i> Patrícia Costa
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="admin/index.php"><i class="bi bi-lock-fill"></i> Admin</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-door-open-fill"></i> Logout</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-list-ul"></i> Géneros
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Ação</a></li>
                            <li><a class="dropdown-item" href="#">Comédia</a></li>
                            <li><a class="dropdown-item" href="#">Aventura</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" method="post">
                    <input class="form-control me-2" type="search" placeholder="Procurar por nome" aria-label="Search">
                    <button class="btn btn-outline-dark" type="submit"><i class="bi bi-search"></i></button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">

        <!-- card -->
        <div class="card text-white bg-dark mt-3 border-light" data-aos="fade-right">
            <div class="row g-0">
                <div class="col-md-4">
                <img src="imagens/naruto-shippuden-i84239.jpg" alt="..." height="300">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
                </div>
            </div>
        </div>

        <!-- card -->
        <div class="card text-white bg-dark mt-3 border-light" data-aos="fade-left">
            <div class="row g-0">               
                <div class="col-md-4">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="col-md-8 d-flex">
                <img src="imagens/Devilman-Crybaby-Análise-4.jpg" alt="..." height="300" class="ms-auto">
                </div>
            </div>
        </div>

        <!-- card -->
        <div class="card text-white bg-dark mt-3 border-light" data-aos="fade-right">
            <div class="row g-0">
                <div class="col-md-4">
                <img src="imagens/death-note-cartaz.jpg" alt="..." height="300">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap -->
    <script src="js/bootstrap.bundle.js"></script>
    <!-- Animate On Scroll -->
    <script src="js/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>