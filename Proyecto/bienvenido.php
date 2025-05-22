<?php
    session_start();
    $userName = $_SESSION['userName'];
    if($userName == ""){
        header('Location: index.php');
    }
    echo "Hola, bienvenido al sistema ...."
?>