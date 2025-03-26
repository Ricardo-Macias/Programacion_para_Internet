<?php
    require "funciones/conecta.php";
    $con = conecta();

    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rol = $_POST['rol'];
    $password_Enc = md5($password);
    $file_name = '';
    $file = '';

    $sql = "INSERT INTO empleados (nombre, apellidos, correo, pass, rol, archivo_nombre, archivo_file)
    VALUES ('$name', '$last_name', '$email', '$password_Enc', '$rol', '$file_name', '$file')";

    $res = $con->query($sql);

    header("Location: empleados_lista.php");
?>