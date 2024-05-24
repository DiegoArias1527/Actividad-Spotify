<?php
include("connection.php");
$con = connection();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/style.css" rel="stylesheet">
    <title>Users CRUD</title>
</head>

<body>
    <div class="users-form">
        <h1>agregar cancion</h1>
        <form action="insert_user.php" method="POST">
            <input type="number" name="id_cantante" placeholder="Id">
            <input type="text" name="nombre" placeholder="Nombres">
            <input type="text" name="genero" placeholder="genero">
            <input type="submit" value="Agregar">
        </form>
    </div>

    <div class="users-table">
        <h2>Usuarios registrados</h2>

        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>genero</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM cantante";
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <th><?php echo $row['id']   ?></th>
                        <th><?php echo $row['nombre']   ?></th>
                        <th><?php echo $row['genero']   ?></th>
                        <th><a href="update.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete_user.php?id=<?= $row['id'] ?>" class="users-table--delete">Eliminar</a></th>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div><br><br>
    <button class="btn-print" onclick="window.print()">Imprimir Página</button>
    <a href="excel.php" class="btn-download btn-excel">Descargar en Excel</a>
    <a href="pdf.php" class="btn-download btn-pdf">Descargar en PDF</a><br><br>

</body>

</html>