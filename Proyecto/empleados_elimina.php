<?php
    session_start();
    $userName = $_SESSION['userName'];
    if($userName == ""){
        header('Location: index.php');
    }
    
    require "funciones/conecta.php";
    $con = conecta();

    $id = $_REQUEST["id_employed"];

    $sql = "UPDATE empleados SET eliminado = 1 WHERE id = $id";
    $res = $con->query($sql);

    echo $res;
?>