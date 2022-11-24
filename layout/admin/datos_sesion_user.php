<?php
$correo_sesion = $_SESSION['sesion_correo'];
//consulta
$query_usuario = $pdo->prepare("SELECT * FROM tb_usuario WHERE correo = '$correo_sesion' AND estado = '1' ");
$query_usuario->execute();


//pasar consulta
$sesion_usuarios = $query_usuario->fetchAll(PDO::FETCH_ASSOC);
foreach ($sesion_usuarios as $sesion_usuario) {
    $sesion_id_usuario = $sesion_usuario['id_usuario'];
    $sesion_rut = $sesion_usuario['rut'];
    $sesion_nombres = $sesion_usuario['nombres'];
    $sesion_apellidos = $sesion_usuario['apellidos'];
    $sesion_telefono = $sesion_usuario['telefono'];
    $sesion_cargo = $sesion_usuario['cargo'];
    $sesion_fnac = $sesion_usuario['fnac'];
}