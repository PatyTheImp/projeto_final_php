<?php include "gestao_animes_header.php" ?>

<table class="table table-striped table-hover">
    <thead>
        <th>Id</th>
        <th>Nome</th>
        <th>Género</th>
        <th>Premier</th>
        <th>Estúdio</th>
        <th>Score</th>
        <th>Adicionado Por</th>
        <th>Data de Registo</th>
        <th>Imagem</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </thead>
    <tbody>

        <?php

        if (isset($_GET['g_id']))
        {
            $g_id = $_GET['g_id'];
            $query = "SELECT * FROM animes WHERE genero_id = {$g_id}";
        }
        else if (isset($_POST['procura_anime']))
        {
            $filtro_nome = $_POST['nome_anime'];
            $query = "SELECT * FROM animes WHERE nome LIKE '%{$filtro_nome}%'";
        }
        else
            $query = "SELECT * FROM animes";

        $todos_animes = mysqli_query($connection, $query);

        verifica($todos_animes);

        while ($row = mysqli_fetch_array($todos_animes)) 
        {
            $id = $row['id'];
            $nome = $row['nome'];
            $genero_id = $row['genero_id'];
            $premier = $row['premier'];
            $estudio = $row['estudio'];
            $score = $row['score'];
            $adicionado_por_usuario_id = $row['adicionado_por_usuario_id'];
            $data_reg = $row['data_reg'];
            $imagem = $row['imagem'];

            //Para encontrar o género 
            $query_genero = "SELECT * FROM generos WHERE id = {$genero_id}";
            $encontra_genero = mysqli_query($connection, $query_genero);

            verifica($encontra_genero);

            $row_genero = mysqli_fetch_array($encontra_genero);
            $genero_nome = $row_genero['genero'];

            //Para encontrar o usuario que adicionou o anime
            $query_user = "SELECT * FROM usuarios WHERE id = {$adicionado_por_usuario_id}";
            $encontra_user = mysqli_query($connection, $query_user);

            verifica($encontra_user);

            $row_user = mysqli_fetch_array($encontra_user);
            $username = $row_user['username'];

            echo "<tr>";
            echo "<td>{$id}</td>";
            echo "<td>{$nome}</td>";
            echo "<td>{$genero_nome}</td>";
            echo "<td>{$premier}</td>";
            echo "<td>{$estudio}</td>";
            echo "<td>{$score}</td>";
            echo "<td>{$username}</td>";
            echo "<td>{$data_reg}</td>";
            echo "<td><img src='../imagens/{$imagem}' height='50px'></td>";
            echo "<td class='text-center fs-3'><a href='index.php?source=editar&an_id={$id}'><i class='bi bi-pencil-square'></i></a></td>";
            echo "<td class='text-center fs-3'><a href='index.php?source=todos&a_id={$id}'><i class='bi bi-trash-fill'></i></a></td>";
            echo "</tr>";
        }

        if (isset($_GET['a_id']))
        {
            $a_id = $_GET['a_id'];

            $eliminar_query = "DELETE FROM animes WHERE id = {$a_id}";
            $eliminar_anime = mysqli_query($connection, $eliminar_query);

            verifica($eliminar_query);
            
            header("Location: index.php?source=todos");
        }

        ?>

    </tbody>
</table>