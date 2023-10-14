<?php
$mysqli = new mysqli('localhost', 'root', '', 'empresa');

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

try{
    $res = $mysqli->query("INSERT INTO datos (nombre, correo, contraseña) VALUES('$nombre', '$correo', '$contraseña')");
    if($res){
        header('Location: extencion/login.php');
    };    
} catch(Exception $e){
    echo $e->getMessage();
}
?>