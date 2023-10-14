<?php
$mysqli = new mysqli('localhost', 'root', '', 'empresa');

$name = $_POST['nombre'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

$id = $_REQUEST['id'];

$res = $mysqli->query("UPDATE datos SET nombre='$nombre', correo='$correo, contraseña='$contraseña' ' WHERE id = '$id'");

$mysqli->close();

if ($res){
    header('location: ../index.html');
}

?>