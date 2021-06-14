
<nav class="navbar navbar-expand-sm navbar-light bg-light sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="imagens/gundam.png" height="40" alt="gundam"> Animes</a>
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