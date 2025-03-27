<?php
    require 'conecta.php';
    $con = conecta();

    $email = $_REQUEST['email'];

    $sql = "SELECT correo FROM empleados WHERE correo = '$email'";
    $res = $con->query($sql);

    if ($res && $res->num_rows > 0){
        $row = $res->fetch_assoc();
        echo $row['correo'];
    }
    else {
        echo "";
    }


?>