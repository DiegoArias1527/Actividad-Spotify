<?php
include("connection.php");
$con = connection();

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$genero = $_POST['genero'];

$sql = "INSERT INTO cantante VALUES('$id', '$nombre', '$genero')";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: index2.php");
} else {

    echo "Error al insertar usuario.";
}
