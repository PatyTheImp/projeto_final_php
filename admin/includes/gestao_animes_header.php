<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h5 class="h4">Gestão de Animes</h5>

    <!-- Dropdown dos géneros -->
    <div class="dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-list-ul"></i> Filtrar Por Géneros
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

            <?php

            $query = "SELECT * FROM generos";
            $todos_generos = mysqli_query($connection, $query);

            verifica($todos_generos);

            while ($row = mysqli_fetch_array($todos_generos)) 
            {
                $id = $row['id'];
                $genero = $row['genero'];

                //Passo o id do género por URL para poder filtrar
                echo "<li><a class='dropdown-item' href='index.php?source=todos&g_id={$id}'>{$genero}</a></li>";
            }

            ?>
        </ul>
    </div>
    <form class="d-flex" action="index.php?source=todos" method="post">
        <input class="form-control me-2" type="search" name="nome_anime" placeholder="Filtrar por nome" aria-label="Search">
        <button class="btn btn-outline-dark" type="submit" name="procura_anime"><i class="bi bi-search"></i></button>
    </form>
</div>