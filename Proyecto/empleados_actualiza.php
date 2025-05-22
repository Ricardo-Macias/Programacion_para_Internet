<?php
    session_start();
    $userName = $_SESSION['userName'];
    if($userName == ""){
        header('Location: index.php');
    }

    require "funciones/conecta.php";
    $con = conecta();

    $id = $_POST['id'];
    $name = $_POST['name'];
    $last_name  = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rol = $_POST['rol'];
    $password_Enc = ($password) ? md5($password) : '';
    $file_name = $_FILES['files']['name'];
    $file = $_FILES['files']['tmp_name'];

    $sql = "UPDATE empleados SET nombre='$name', apellidos='$last_name',correo='$email', rol='$rol'";

    if($file){
        $array = explode(".", $file_name);
        $len = count($array);
        $pos = $len - 1;
        $extension = $array[$pos];

        $dir = __DIR__."/images/";

        $nameEnc = md5_file($file);
        $new_file = "$nameEnc.$extension";
        
        $sql = $sql.", archivo_nombre='$file_name', archivo_file='$new_file' ";
    }


    $sql = ($password_Enc) ? $sql.", pass='".$password_Enc."' WHERE id =".$id : $sql." WHERE id =".$id;

    $res = $con->query($sql);

    header("Location: empleados_lista.php");
?>