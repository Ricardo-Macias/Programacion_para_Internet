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
    $rol = $row['rol'];
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
                Editar Empleado
            </div>
            <div class="content-botton">
                <div class="botton">
                    <a href="empleados_lista.php">Regresar al listado</a>
                </div>
            </div>
        </div>
        <div class="content">
            <form enctype="multipart/form-data" class="employed" name="employed" method="post">
                <div class="grid-form">
                    <div>
                        <div class="employed-name">
                            <div>
                                <div class="label label-name">Nombre</div>
                                <input name="name" class="text text-name" type="text" value="<?php echo $nombre ?>">
                            </div>
                            <div>
                                <div class="label label-last-name">Apellidos</div>
                                <input name="last_name" class="text text-last-name" type="text" value="<?php echo $apellido ?>">
                            </div>
                        </div>

                        <div class="employed-email">
                            <div class="label label-email">Correo</div>
                            <div class="message message-email"></div>
                            <input onblur="validateEmail();" name="email" class="text text-email" id="txt-email" type="email" value="<?php echo $correo ?>">
                        </div>

                        <div class="employed-password">
                            <div class="label label-password">Contraseña</div>
                            <input name="password" class="text text-password" type="password">
                        </div>

                        <div name="rol" class="employed-rol">
                            <div class="label label-rol">Rol</div>
                            <select name="rol" class="text text-rol" value="1">
                                <option value="1" <?php echo ($rol == 1) ? 'selected' : '' ?>>Gerente</option>
                                <option value="2" <?php echo ($rol == 2) ? 'selected' : '' ?>>Ejecutivo</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <div class="image">
                            <img id="imagePreview" src="#" alt="image">
                        </div>
                        <div class="button-file">
                            <input type="file" id="image" name="files" accept="image/*">
                        </div>
                    </div>
                </div>
                

                <div class="message message-employed"></div>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input class="button" onclick="edit(); return false;" type="submit" value="Actualizar">

            </form>
            <script src="js/image_preview.js"></script>
        </div>
    </body>
</html>