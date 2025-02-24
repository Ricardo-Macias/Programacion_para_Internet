<?php
    $name = $_POST['nombre'];
    $email = $_POST['correo'];
    $gender = $_POST['sexo'];
    $bulletin = $_POST['boletin'];
    $comment = $_POST['comentario'];
    $career = $_POST['carrera'];
    $password = $_POST['password'];
    $average = $_POST['promedio'];
    $date = $_POST['fecha'];

    $txt_gender = ($gender == 'F') ? "Femenino" : "MAsculino";
    $txt_career = ($career == '1') ? "Ing. Informatica" : "Ing. Computacion";
    

    echo "Bienvenido $name<br>";
    echo "Correo: $email<br>";
    echo "Password: $password<br>";
    echo "Sexo: $gender<br>";
    echo "Carrera: $career<br>";
    echo "Promedio: $average / Fecha: $date<br>";
    echo "Comentario: $comment<br><br>";
    echo "$bulletin acepto a recibir boletin"
?>