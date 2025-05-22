<html>
    <head>
        <title>Login</title>

        <link href="css/login.css"  rel="stylesheet" type="text/css">

        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/funciones_jquery.js"></script>
    </head>
    <body>
        <div class="content-login">
            <div class="form-login">
                <form name="formLogin" method="get">
                    <div class="grid-login">
                        <div class="content-image">
                            <img class="imagen" src="icon/login.png" alt="image">
                        </div>
                        <div class="correo">
                            <div class="label label-correo"><b> Correo </b></div>
                            <input type="email" name="email"> 
                        </div>
                        <div>
                            <div class="label label-password"> <b>Contraseña</b> </div>
                            <input type="password" name="password">
                        </div>
                        <div>
                            <input onclick="login(); return false;" type="submit"  class="button-login" value="Iniciar Sesion">
                            <div id="message"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
