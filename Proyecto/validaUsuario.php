<?php
    session_start();
    require "funciones/conecta.php";
    $con = conecta();

    $email = $_REQUEST['correo'];
    $pass = md5($_REQUEST['pass']);

    $sql = "SELECT * FROM empleados WHERE correo = '$email' AND pass = '$pass' AND eliminado = 0";
    $res = $con->query($sql);
    $num = $res->num_rows;

    if ($num){
        $row = $res->fetch_array();

        $id = $row['id'];
        $name = $row['nombre'].' '.$row['apellidos'];
        $email = $row['correo'];

        $_SESSION['userID'] = $id;
        $_SESSION['userName'] = $name;
        $_SESSION['userEmail'] = $email;
    }

    echo $num;

?>