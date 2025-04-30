<?php
    require "funciones/conecta.php";
    $con = conecta();

    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM empleados WHERE eliminado = 0 AND id = $id";
    $res = $con->query($sql);

    $row = $res->fetch_array();
    $nombre = $row['nombre'];
    $apellido = $row['apellidos'];
    $correo = $row['correo'];
    $password = $row['pass'];
    $rol = $rol['rol'];
?>

<html>
    <head>
        <meta charset="utf-8">

        <!-- CSS -->
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="css/form.css" rel="stylesheet" type="text/css">

        <!-- JS -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/validar.js"></script>
    </head>

    <body>
        <div class="head">
            <div class="section_title">
                Agregar Empleado
            </div>
            <div class="botton return-botton">
                <a href="empleados_lista.php">Regresar al listado</a>
            </div>
        </div>
        <div class="content">
            <form class="employed" name="employed" method="post">
                <div class="grid-form">
                    <div>
                        <div class="employed-name">
                            <div>
                                <div class="label label-name">Nombre</div>
                                <input name="name" class="text text-name" type="text" value="<?php $nombre ?>">
                            </div>
                            <div>
                                <div class="label label-last-name">Apellidos</div>
                                <input name="last_name" class="text text-last-name" type="text" value="<?php $apellido ?>">
                            </div>
                        </div>

                        <div class="employed-email">
                            <div class="label label-email">Correo</div>
                            <div class="message message-email"></div>
                            <input onblur="validateEmail();" name="email" class="text text-email" id="txt-email" type="email" value="<?php $correo ?>">
                        </div>

                        <div class="employed-password">
                            <div class="label label-password">Contraseña</div>
                            <input name="password" class="text text-password" type="password" value="<?php $password ?>">
                        </div>

                        <div name="rol" class="employed-rol">
                            <div class="label label-rol">Rol</div>
                            <select name="rol" class="text text-rol">
                                <option value="0" selected>Selecciona</option>
                                <option value="1">Gerente</option>
                                <option value="2">Ejecutivo</option>
                            </select>
                        </div>
                    </div>

                    <div>

                    </div>
                </div>
                

                <div class="message message-employed"></div>
                <input class="button" onclick="recibe(); return false;" type="submit" value="Registrar">

            </form>
        </div>
    </body>
</html>