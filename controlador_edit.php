<?php
include ('../../app/config/config.php');
include ('../../app/config/conexion.php');


$codigo = $_POST['codigo'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$area = $_POST['area'];
$modulo = $_POST['modulo'];
$letra = $_POST['letra'];
$editorial = $_POST['editorial'];
$libreria = $_POST['librerias'];
$stock = $_POST['stock'];
$observaciones = $_POST['observaciones'];
$id_libros = $_POST['id_libros'];


$sentencia = $pdo->prepare("UPDATE tb_libros SET
id_libros = :id_libros,
codigo = :codigo,
titulo = :titulo,
autor = :autor,
area = :area,
modulo = :modulo,
letra = :letra,
editorial = :editorial,
librerias = :librerias,
stock = :stock,
observaciones = :observaciones,
fyh_actualizacion = :fyh_actualizacion WHERE id_libros = :id_libros");

$sentencia->bindParam(':codigo',$codigo);
$sentencia->bindParam(':titulo',$titulo);
$sentencia->bindParam(':autor',$autor);
$sentencia->bindParam(':area',$area);
$sentencia->bindParam(':modulo',$modulo);
$sentencia->bindParam(':letra',$letra);
$sentencia->bindParam(':editorial',$editorial);
$sentencia->bindParam(':librerias',$libreria);
$sentencia->bindParam(':stock',$stock);
$sentencia->bindParam(':observaciones',$observaciones);
$sentencia->bindParam(':fyh_actualizacion',$fyh_actualizacion);
$sentencia->bindParam(':id_libros',$id_libros);


if($sentencia->execute()){
    //echo "se actualizo de la manera correcta";
    header('Location:' .$URL.'/admin/libros/');
    session_start();
    $_SESSION['msj'] = "Se actualizo de la manera correcta";
}else{
    echo "error al actualizar los datos";
    session_start();
    $_SESSION['msj'] = "Error al actualizar los datos";
}