<?php
    require "funciones/conecta.php";
    $con = conecta();

    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM empleados WHERE eliminado = 0 AND id = $id";
    $res = $con->query($sql);

    $row = $res->fetch_array();
    $nombre = $row['nombre'];
    $apellido = $row['apellidos'];
    $correo = $row['correo'];
    $rol = $rol['rol'];
?>