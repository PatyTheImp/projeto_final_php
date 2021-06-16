
<nav class="navbar navbar-expand-sm navbar-light bg-light sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="home.php"><img src="imagens/gundam.png" height="40" alt="gundam"> Animes</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample03">
            <ul class="navbar-nav ms-auto mb-2 mb-sm-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-fill"></i> <?= "{$_SESSION['nome']} {$_SESSION['apelido']}" ?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                        <!-- Só os admin e master admin tem acesso a área de admin -->
                        <?php if ($_SESSION['level'] != 'guest'): ?>
                            <li><a class="dropdown-item" href="admin/index.php"><i class="bi bi-lock-fill"></i> Admin</a></li>
                        <?php endif; ?>

                        <li><a class="dropdown-item" href="logout.php"><i class="bi bi-door-open-fill"></i> Logout</a></li>
                    </ul>
                </li>

                <!-- Dropdown dos géneros -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-list-ul"></i> Géneros
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                        <?php
                        
                        $query = "SELECT * FROM generos";
                        $todos_generos = mysqli_query($connection, $query);

                        if (!$todos_generos)
                            die('ERRO: ' . mysqli_error($connection));

                        while ($row = mysqli_fetch_array($todos_generos))
                        {
                            $id = $row['id'];
                            $genero = $row['genero'];

                            //Passo o id do género por URL para poder filtrar
                            echo "<li><a class='dropdown-item' href='home.php?source=genero&g_id={$id}'>{$genero}</a></li>";
                        }
                        
                        ?>
                    </ul>
                </li>
            </ul>
            <form class="d-flex" action="home.php?source=nome" method="post">
                <input class="form-control me-2" type="search" name="nome_anime" placeholder="Procurar por nome" aria-label="Search">
                <button class="btn btn-outline-dark" type="submit" name="procura_anime"><i class="bi bi-search"></i></button>
            </form>
        </div>
    </div>
</nav>