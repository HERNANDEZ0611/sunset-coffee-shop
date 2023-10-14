<?php
$mysqli = new mysqli('localhost', 'root', '', 'empresa');

$id = $_REQUEST['id'];

$res = $mysqli->query("DELETE FROM datos WHERE id=$id");

$mysqli->close();

if ($res){
    header('location:../index.html');
}

?>