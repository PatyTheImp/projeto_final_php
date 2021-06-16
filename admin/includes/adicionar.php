<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h5 class="h4">Adicionar Anime</h5>
</div>

<?php

if (isset($_POST['inserir_anime']))
{
    $nome = mysqli_real_escape_string($connection, $_POST['nome']);
    $genero_id = $_POST['genero'];
    $premier = $_POST['premier'];
    $estudio = mysqli_real_escape_string($connection, $_POST['estudio']);
    $score = $_POST['score'];

    $imagem = $_FILES['imagem']['name'];
    $imagem_tmp = $_FILES['imagem']['tmp_name'];

    $adicionado_por_id = 1;

    //Adciona ficheiro a pasta
    move_uploaded_file($imagem_tmp, "../imagens/{$imagem}");

    $query = 
        "INSERT INTO animes (nome, genero_id, premier, estudio, score, adicionado_por_usuario_id, imagem) 
         VALUES ('{$nome}', {$genero_id}, '{$premier}', '{$estudio}', {$score}, {$adicionado_por_id}, '{$imagem}')";

    $adicionar_anime = mysqli_query($connection, $query);

    verifica($adicionar_anime);

    echo "<p>Anime adicionado com sucesso. <a href='index.php?source=todos'>Ver tabela</a>";
}

?>

<form class="container" action="" method="post" enctype="multipart/form-data">

    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="nome" name="nome" required>
        <label for="nome">Nome</label>
    </div>

    <div class="form-floating mb-3">
        <select class="form-select" id="genero" name="genero" required>
            <option selected></option>

            <?php
            
            $query_genero = "SELECT * FROM generos";
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
        <input type="date" class="form-control" id="premier" name="premier" required>
        <label for="premier">Premier</label>
    </div>

    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="estudio" name="estudio" required>
        <label for="estudio">Estudio</label>
    </div>

    <div class="form-floating mb-3">
        <input type="number" min="0" max="10" step="0.01" class="form-control" id="score" name="score" required>
        <label for="score">Score</label>
    </div>

    <div class="form-floating mb-3">
        <input type="file" class="form-control" id="imagem" name="imagem" accept="image/*" required>
        <label for="imagem">Imagem</label>
    </div>

    <button class="w-100 btn btn-lg btn-outline-dark mb-3" type="submit" name="inserir_anime">Adicionar Anime</button>

</form>