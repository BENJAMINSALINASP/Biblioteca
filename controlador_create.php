<?php
session_start();
include ('../../app/config/config.php');
include ('../../app/config/conexion.php');
if(isset($_POST['save_libro']))
{
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



    

$estado="1";
//$fyh_creacion="2022-11-18 21:40:00";

try{
    $sentencia = $pdo->prepare('INSERT INTO tb_libros
    (codigo,titulo,autor,area,modulo,letra,editorial,librerias,stock,observaciones, fyh_creacion, estado)
    VALUES ( :codigo,:titulo,:autor,:area,:modulo,:letra,:editorial,:librerias,:stock,:observaciones,:fyh_creacion,:estado)');
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
$sentencia->bindParam('fyh_creacion',$fechaHora);
$sentencia->bindParam('estado',$estado);

    if($sentencia->execute())
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



?>