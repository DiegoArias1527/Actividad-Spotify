<?php
include("connection.php");
$con = connection();

$id = $_POST['id_cantante'];
$nombre = $_POST['nombre_cancion'];

$stmt = $conn->prepare("INSERT INTO canciones (id_cantante, nombre_cancion) VALUES (?, ?)");
$stmt->bind_param("is", $id_cantante, $nombre_cancion);
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: indexcancion.php");
} else {

    echo "Error al insertar usuario.";
}
