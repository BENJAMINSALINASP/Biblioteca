<?php
include ('../../app/config/config.php');
include ('../../app/config/conexion.php');

$id_libros = $_POST['id_libros'];
$estado_inactivo = '0';

$sentencia = $pdo->prepare("UPDATE tb_libros SET estado = '$estado_inactivo',fyh_eliminacion='$$fyh_creacion' WHERE id_libros = :id_libros");

$sentencia->bindParam(':id_libros',$id_libros);

if($sentencia->execute()){
    header('Location:' .$URL.'/admin/libros/');
    session_start();
    $_SESSION['msj'] = "Se elimino al usuario de la manera correcta";
}else{
    echo "error al eliminar los registros de la base de datos";
    session_start();
    $_SESSION['msj'] = "Error al eliminar los registros de la base de datos";
}