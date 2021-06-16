<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h5 class="h4"><?= cumprimento() . ' ' . $_SESSION['username'] . '. ' . data_de_hoje() . hora_atual(); ?></h5>
</div>

<h1 class="h1 text-center">Gráfico De Animes Por Género</h1>

<!-- Gráfico de barras -->
<div>
    <canvas id="myChart"></canvas>
</div>

<?php

//Conta quantos animes por género
$query = "SELECT genero_id, COUNT(*) AS 'contagem' FROM animes GROUP BY genero_id";
$contagem = mysqli_query($connection, $query);

$array_contagens = [];
while ($row = mysqli_fetch_array($contagem))
    array_push($array_contagens, $row['contagem']);

?>

<!-- O script está no footer -->
