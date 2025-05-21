<?php
    require "funciones/conecta.php";
    $con = conecta();

    $id = $_POST['id'];
    $name = $_POST['name'];
    $last_name  = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rol = $_POST['rol'];
    $password_Enc = ($password != "") ? md5($password) : '';
    $file_name = ' ';
    $file = ' ';

    $sql = "UPDATE empleados SET nombre='$name', apellidos='$last_name',
    correo='$email', rol='$rol', archivo_nombre='$file_name', archivo_file='$file' ";

    $sql = ($password_Enc) ? $sql.", pass='".$password_Enc."' WHERE id =".$id : $sql." WHERE id =".$id;

    $res = $con->query($sql);

    header("Location: empleados_lista.php");
?>