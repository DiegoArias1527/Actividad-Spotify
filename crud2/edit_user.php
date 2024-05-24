<?php

include("connection.php");
$con = connection();

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$genero = $_POST['genero'];

$sql = "UPDATE cantante SET nombre='$nombre', genero='$genero' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: index2.php");
} else {
}
