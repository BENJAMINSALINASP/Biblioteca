<?php
include ('../../app/config/config.php');
include ('../../app/config/conexion.php');

$rut = $_POST['rut'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];
$cargo = $_POST['cargo'];
$fnac = $_POST['fnac'];
$correo = $_POST['correo'];
$id_usuario = $_POST['id_usuario'];

$sentencia = $pdo->prepare("UPDATE tb_usuarios SET
rut = :rut,
nombres = :nombres,
apellidos = :apellidos,
telefono = :telefono,
cargo = :cargo,
fnac = :fnac,
correo = :correo,
fyh_actualizacion = :fyh_actualizacion WHERE id_usuario = :id_usuario");

$sentencia->bindParam(':rut',$rut);
$sentencia->bindParam(':nombres',$nombres);
$sentencia->bindParam(':apellidos',$apellidos);
$sentencia->bindParam(':telefono',$telefono);
$sentencia->bindParam(':cargo',$cargo);
$sentencia->bindParam(':fnac',$fnac);
$sentencia->bindParam(':correo',$correo);
$sentencia->bindParam(':id_usuario',$id_usuario);
$sentencia->bindParam(':fyh_actualizacion',$fyh_creacion);

if($sentencia->execute()){
    //echo "se actualizo de la manera correcta";
    header('Location:' .$URL.'/admin/usuarios/');
    session_start();
    $_SESSION['msj'] = "Se actualizo de la manera correcta";
}else{
    echo "error al actualizar los datos";
    session_start();
    $_SESSION['msj'] = "Error al actualizar los datos";
}