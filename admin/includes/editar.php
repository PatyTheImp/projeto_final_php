<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h5 class="h4">Editar Anime</h5>
</div>

<?php

$an_id = '';
if (isset($_GET['an_id']))
    $an_id = $_GET['an_id'];

$query_encontra_anime = "SELECT * FROM animes WHERE id = {$an_id}";
$encontra_anime = mysqli_query($connection, $query_encontra_anime);

verifica($encontra_anime);

$row = mysqli_fetch_array($encontra_anime);

$get_nome = $row['nome'];
$get_genero_id = $row['genero_id'];
$get_premier = $row['premier'];
$get_estudio = $row['estudio'];
$get_score = $row['score'];
$get_imagem = $row['imagem'];

if (isset($_POST['editar_anime']))
{
    $nome = mysqli_real_escape_string($connection, $_POST['nome']);
    $genero_id = $_POST['genero'];
    $premier = $_POST['premier'];
    $estudio = mysqli_real_escape_string($connection, $_POST['estudio']);
    $score = $_POST['score'];

    $imagem = $_FILES['imagem']['name'];
    $imagem_tmp = $_FILES['imagem']['tmp_name'];

    $adicionado_por_id = $_SESSION['id'];

    if ($imagem == '')
        $imagem = $get_imagem;
    else
    {
        //Adciona ficheiro a pasta
        move_uploaded_file($imagem_tmp, "../imagens/{$imagem}");
    }

    $query = 
        "UPDATE animes SET
        nome = '{$nome}',
        genero_id = {$genero_id},
        premier = '{$premier}',
        estudio = '{$estudio}',
        score = {$score},
        adicionado_por_usuario_id = {$adicionado_por_id},
        data_reg = date('Y-m-d H:i:s'),
        imagem = '{$imagem}'
        WHERE id = {$an_id}";

    $editar_anime = mysqli_query($connection, $query);

    verifica($editar_anime);

    echo "<p>Anime editado com sucesso. <a href='index.php?source=todos'>Ver tabela</a>";
}

?>

<form class="container" action="" method="post" enctype="multipart/form-data">

    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="nome" name="nome" required value="<?= $get_nome ?>">
        <label for="nome">Nome</label>
    </div>

    <div class="form-floating mb-3">
        <select class="form-select" id="genero" name="genero" required>
            <option selected></option>

            <?php
            
            $query_genero_escolhido = "SELECT * FROM generos WHERE id = {$get_genero_id}";
            $encontra_genero_escolhido = mysqli_query($connection, $query_genero_escolhido);

            verifica($encontra_genero_escolhido);

            $row_genero_escolhido = mysqli_fetch_array($encontra_genero_escolhido);
            $genero_id_escolhido = $row_genero_escolhido['id'];
            $genero_nome_escolhido = $row_genero_escolhido['genero'];

            echo "<option value='{$genero_id_escolhido}' selected>{$genero_nome_escolhido}</option>";

            $query_genero = "SELECT * FROM generos WHERE id != {$get_genero_id}";
            $encontra_genero = mysqli_query($connection, $query_genero);

            verifica($encontra_genero);

            while ($row_genero = mysqli_fetch_array($encontra_genero))
            {
                $genero_id = $row_genero['id'];
                $genero_nome = $row_genero['genero'];

                echo "<option value='{$genero_id}'>{$genero_nome}</option>";
            }
            
            ?>

        </select>
        <label for="genero">Género</label>
    </div>

    <div class="form-floating mb-3">
        <input type="date" class="form-control" id="premier" name="premier" required value="<?= $get_premier ?>">
        <label for="premier">Premier</label>
    </div>

    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="estudio" name="estudio" required value="<?= $get_estudio ?>">
        <label for="estudio">Estudio</label>
    </div>

    <div class="form-floating mb-3">
        <input type="number" min="0" max="10" step="0.01" class="form-control" id="score" name="score" required value="<?= $get_score ?>">
        <label for="score">Score</label>
    </div>

    <div class="row mb-3">
        <div class="form-floating col-auto">
                <input type="file" class="form-control" id="imagem" name="imagem" accept="image/*">
                <label for="imagem">Imagem</label>
        </div>
        <div class="col-auto">
            <img src="../imagens/<?= $get_imagem ?>" height="100">
        </div>
    </div>

    <button class="w-100 btn btn-lg btn-outline-dark mb-3" type="submit" name="editar_anime">Editar Anime</button>

</form>

