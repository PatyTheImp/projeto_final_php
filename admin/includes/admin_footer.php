<script src="../js/bootstrap.bundle.js"></script>
<!-- Script para o gráfico de barras -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Script do gráfico de barras -->
<script>
    const labels = [
        'Romance',
        'Ação',
        'Comédia',
        'Aventura',
        'Terror',
        'Drama',
    ];
    const data = {
        labels: labels,
        datasets: [{
            label: 'Número de Animes',
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)'
            ],
            borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)'
            ],
            borderWidth: 1,
            data: [
                <?php
                foreach ($array_contagens as $contagem)
                    echo $contagem . ',';
                ?>
            ],
        }]
    };

    var delayed;
    const config = {
        type: 'bar',
        data: data,
        options: {
            indexAxis: 'y',
        },

    };

    var myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
</script>

</body>

</html>