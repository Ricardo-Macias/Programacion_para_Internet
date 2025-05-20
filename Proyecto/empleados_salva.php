<?php
    require "funciones/conecta.php";
    $con = conecta();

    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rol = $_POST['rol'];
    $password_Enc = md5($password);
    $file_name = $_FILES['files']['name'];
    $file = $_FILES['files']['tmp_name'];

    $array = explode(".", $file_name);
    $len = count($array);
    $pos = $len - 1;
    $extension = $array[$pos];

    $dir = "images/";

    $nameEnc = md5_file($file);
    $new_file = "$nameEnc.$extension";

    $sql = "INSERT INTO empleados (nombre, apellidos, correo, pass, rol, archivo_nombre, archivo_file)
    VALUES ('$name', '$last_name', '$email', '$password_Enc', '$rol', '$file_name', '$new_file')";

    $res = $con->query($sql);

    //copy($file, $dir.$new_file);
    
    header("Location: empleados_lista.php");
?>
