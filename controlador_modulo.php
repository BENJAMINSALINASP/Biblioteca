<?php
session_start();
include ('../../app/config/config.php');
include ('../../app/config/conexion.php');
if(isset($_POST['save_modulo']))
{
$modulos = $_POST['modulo'];
    

$estado="1";
//$fyh_creacion="2022-11-18 21:40:00";

try{
    $query = "INSERT INTO tb_modulos
    (modulo, estado, fyh_creacion) VALUES (?, ?, ?)";
    $sentencia = $pdo->prepare($query);
    $sentencia->bindParam(1,$modulos);
    $sentencia->bindParam(2,$estado);
    $sentencia->bindParam(3,$fyh_creacion);
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

?>
