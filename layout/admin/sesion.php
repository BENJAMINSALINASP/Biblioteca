<?php
session_start();
if(isset($_SESSION['sesion_correo'])){
    //echo "Existe sesión";
}else{
    //echo "No existe sesión";
    header('Location:'.$URL.'/login/');
}
?>