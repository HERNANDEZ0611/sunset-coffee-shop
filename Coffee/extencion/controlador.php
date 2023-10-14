<?php
$mysqli = new mysqli('localhost', 'root', '', 'empresa');

session_start();

$metodo = $_POST['metodo'];

switch($metodo) {
    case 'ingresar':
        if (!empty($_POST["btningresar"])){
            if (!empty($_POST['correo']) and empty($_POST['contraseña'])){
        }else{
            $email = $_POST['correo'];
            $password = $_POST['contraseña'];
            $res = $mysqli->query("SELECT * FROM datos WHERE correo= '$correo' AND contraseña='$contraseña'");
        
            if($res){
                if($datos=$res->fetch_object()){
                    $_SESSION["id"]=$datos->id;
                    $_SESSION["correo"]=$datos->correo;
                    $_SESSION["contraseña"]=$datos->password;
                    header('Location: ../index.html');
        
                }
            
            }else{
            }   
        }
        }
        break;

        
    case 'registrar':
        echo json_encode($_POST);
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $contraseña = $_POST['contraseña'];

        try{
            $res = $mysqli->query("INSERT INTO datos (nombre, correo, contraseña) VALUES('$nombre','$correo', '$contraseña')");
            if($res){
                header('Location:../index.html');
            };    
        } catch(Exception $e){
            echo $e->getMessage();
        }
        break;
}
?>