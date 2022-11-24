<?php

include ('../app/config/config.php');
include ('../app/config/conexion.php');

//var
$correo = $_POST['email'];
$contraseña = $_POST['contraseña'];

//consulta
$query_login = $pdo->prepare("SELECT * FROM tb_usuario WHERE correo = '$correo' AND estado = '1' ");
$query_login->execute();


//pasar consulta
$usuarios = $query_login->fetchAll(PDO::FETCH_ASSOC);
$contador = 0;
foreach ($usuarios as $usuario) {
    $contador = $contador + 1;
    //nombres en la base de datos
    $nombres = $usuario['nombres'];
    //contraseña en la base de datos
    $contraseña_tb = $usuario['contraseña'];
}

//vercontador
echo $contador;
//condición
if($contador =="0"){
    //crear página de error al no dar bien los datos
    header('Location:'.$URL.'/login/error.php'); 
    echo "Error al ingresar los datos";
}else{
    //echo "Usuario correcto";
    if (password_verify($contraseña, $contraseña_tb)){
        //echo "Contraseña correcta";
        session_start();
        $_SESSION['sesion_correo'] = $correo;
        header('Location:'.$URL.'/admin/');
    }
    else {
        echo "Error al ingresar los datos";
    }
}
?>