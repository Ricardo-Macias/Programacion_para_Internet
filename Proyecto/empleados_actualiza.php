<?php
    require "funciones/conecta.php";
    $con = conecta();

    $name = $_POST['name'];
    $last_name  = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rol = $_POST['rol'];
    $password_Enc = md5($password);
    $file_name = '';
    $file = '';

    $sql = "UPDATE empleados SET nombre='$name', apellidos='$last_name'
    correo='$email', pass='$password', rol='$rol', archivo_nombre='$file_name', archivo_file='$file'";

    $res = $con->query($sql);

    header("Location: empleados_lista.php");
?>