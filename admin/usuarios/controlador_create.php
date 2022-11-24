<?php
session_start();
include ('../../app/config/config.php');
include ('../../app/config/conexion.php');
if(isset($_POST['save_student']))
{
$rut = $_POST['rut'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];
$cargo = $_POST['cargo'];
$fnac = $_POST['fnac'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$verificar_contraseña = $_POST['verificar_contraseña'];
$password_encriptar = password_hash($contraseña, PASSWORD_DEFAULT);


if($contraseña == $verificar_contraseña){
    //echo "Las contraseñas son iguales";

    

$estado="1";
//$fyh_creacion="2022-11-18 21:40:00";

try{
    $query = "INSERT INTO tb_usuarios
    (rut, nombres, apellidos, telefono, cargo, fnac, correo, contraseña, estado, fyh_creacion) VALUES (?, ?, ?, ?,?, ?, ?, ?, ?, ?)";
    $sentencia = $pdo->prepare($query);
    $sentencia->bindParam(1,$rut);
    $sentencia->bindParam(2,$nombres);
    $sentencia->bindParam(3,$apellidos);
    $sentencia->bindParam(4,$telefono);
    $sentencia->bindParam(5,$cargo);
    $sentencia->bindParam(6,$fnac);
    $sentencia->bindParam(7,$correo);
    $sentencia->bindParam(8,$password_encriptar);
    $sentencia->bindParam(9,$estado);
    $sentencia->bindParam(10,$fyh_creacion);
    $query_execute = $sentencia->execute();      

    if($query_execute)
    {
        $_SESSION['message'] = "Added Successfully";
        header('Location: create.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Added";
        header('Location: create.php');
        exit(0);
    }

} catch (PDOException $e) {

    echo "My Error Type:". $e->getMessage();
}
}else{
    echo "Error, las contraseñas no son iguales";
}

}

?>