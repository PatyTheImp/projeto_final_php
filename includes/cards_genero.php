<div class="container">

<?php

$g_id = '';
    if (isset($_GET['g_id']))
        $g_id = $_GET['g_id'];

$i = 0;
$query = "SELECT * FROM animes WHERE genero_id = {$g_id}";
$todos_animes = mysqli_query($connection, $query);

if (!$todos_animes)
    die('ERRO: ' . mysqli_error($connection));

$num_registos = mysqli_num_rows($todos_animes);

if ($num_registos == 0)
    echo "<h1 class='text-center'>Nenhum anime encontrado</h1>";

while ($row = mysqli_fetch_array($todos_animes)):

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

    if (!$encontra_genero)
        die('ERRO: ' . mysqli_error($connection));
    
    $row_genero = mysqli_fetch_array($encontra_genero);
    $genero_nome = $row_genero['genero'];

    //Para encontrar o usuario que adicionou o anime
    $query_user = "SELECT * FROM usuarios WHERE id = {$adicionado_por_usuario_id}";
    $encontra_user = mysqli_query($connection, $query_user);

    if (!$encontra_user)
        die('ERRO: ' . mysqli_error($connection));
    
    $row_user = mysqli_fetch_array($encontra_user);
    $username = $row_user['username'];

    //Se o i for par mostra a car a direita, se não mostra a da esquerda
    if ($i % 2 == 0):
    ?>

        <!-- card a direita-->
        <div class="card text-white bg-dark mt-3 border-light" data-aos="fade-right">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="imagens/<?= $imagem ?>" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h1 class="card-title"><?= $nome ?></h1>
                        <p class="card-text"><b>Género: </b><?= $genero_nome ?></p>
                        <p class="card-text"><b>Premier: </b><?= $premier ?></p>
                        <p class="card-text"><b>Estudio: </b><?= $estudio ?></p>
                        <p class="card-text"><b>Score: </b><?= $score ?></p>
                        <p class="card-text"><small class="text-muted">Adicionado por <?= $username ?> em <?= $data_reg ?></small></p>
                    </div>
                </div>
            </div>
        </div>

    <?php else: ?>

        <!-- card a esquerda-->
        <div class="card text-white bg-dark mt-3 border-light" data-aos="fade-left">
            <div class="row g-0">
                <div class="col-md-4 d-flex">
                    <div class="card-body ms-auto">
                        <h1 class="card-title"><?= $nome ?></h1>
                        <p class="card-text"><b>Género: </b><?= $genero_nome ?></p>
                        <p class="card-text"><b>Premier: </b><?= $premier ?></p>
                        <p class="card-text"><b>Estudio: </b><?= $estudio ?></p>
                        <p class="card-text"><b>Score: </b><?= $score ?></p>
                        <p class="card-text"><small class="text-muted">Adicionado por <?= $username ?> em <?= $data_reg ?></small></p>
                    </div>
                </div>
                <div class="col-md-8 d-flex">
                    <img src="imagens/<?= $imagem ?>" class="ms-auto img-fluid">
                </div>
            </div>
        </div>

    <?php endif; ?>

<?php $i++; endwhile; ?>

</div>