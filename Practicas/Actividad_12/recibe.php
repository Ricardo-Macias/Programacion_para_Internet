<?php
    $name = $_POST['nombre'];
    $email = $_POST['correo'];
    $gender = $_POST['sexo'];
    $bulletin = "Acepto"; //$_POST['boletin'];
    $comment = $_POST['comentario'];
    $career = $_POST['carrera'];
    $password = $_POST['pasw'];
    $average = $_POST['promedio'];
    $date = $_POST['fecha'];

    $txt_gender = ($gender == 'F') ? "Femenino" : "Masculino";
    $txt_career = ($career == '1') ? "Ing. Informatica" : "Ing. Computacion";
    

    echo "Bienvenido $name<br>";
    echo "Correo: $email<br>";
    echo "Password: $password<br>";
    echo "Sexo: $txt_gender<br>";
    echo "Carrera: $txt_career<br>";
    echo "Promedio: $average / Fecha: $date<br>";
    echo "Comentario: $comment<br><br>";
    echo "$bulletin recibir boletin"
?>