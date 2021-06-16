<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h5 class="h4">Gestão de Utilizadores</h5>
</div>

<table class="table table-striped table-hover">
    <thead>
        <th>Id</th>
        <th>Username</th>
        <th>Nome</th>
        <th>Apelido</th>
        <th>Data de Registo</th>
        <th>Level</th>
        <th colspan="2" class="text-center">Alterar Level</th>
    </thead>
    <tbody>

    <?php
    
    $query = "SELECT * FROM usuarios";
    $todos_usuarios = mysqli_query($connection, $query);

    verifica($todos_usuarios);

    while ($row = mysqli_fetch_array($todos_usuarios))
    {
        $id = $row['id'];
        $username = $row['username'];
        $primeiro_nome = $row['primeiro_nome'];
        $apelido = $row['apelido'];
        $data_reg = $row['data_reg'];
        $level = $row['level'];

        echo "<tr>";
        echo "<td>{$id}</td>";
        echo "<td>{$username}</td>";
        echo "<td>{$primeiro_nome}</td>";
        echo "<td>{$apelido}</td>";
        echo "<td>{$data_reg}</td>";
        echo "<td>{$level}</td>";
        echo "<td><a href='index.php?source=utilizadores&admin={$id}'>Para Admin</a></td>";
        echo "<td><a href='index.php?source=utilizadores&guest={$id}'>Para Guest</a></td>";
        echo "</tr>";
    }

    if (isset($_GET['admin']))
    {
        $user_id = $_GET['admin'];

        $admin_query = 
         "UPDATE usuarios 
         SET level = 'admin'
         WHERE id = {$user_id}";

        mysqli_query($connection, $admin_query);

        header("Location: index.php?source=utilizadores");
    }

    if (isset($_GET['guest']))
    {
        $user_id = $_GET['guest'];

        $guest_query = 
         "UPDATE usuarios 
         SET level = 'guest'
         WHERE id = {$user_id}";

        mysqli_query($connection, $guest_query);

        header("Location: index.php?source=utilizadores");
    }
    
    ?>

    </tbody>
</table>