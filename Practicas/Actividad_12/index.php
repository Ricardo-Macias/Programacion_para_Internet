<html>
    <head>
        <title>Formulario</title>

        <script>
            function recibe(){
                var nombre = document.forma01.nombre.value;
                var correo = document.forma01.correo.value;
                var genero = document.forma01.sexo.value;
                var boletin = document.forma01.boletin.checked;
                var comentario = document.forma01.comentario.value;
                var carrera = document.forma01.carrera.value;
                var pass = document.forma01.pasw.value;
                var promedio = document.forma01.promedio.value;
                var fecha = document.forma01.fecha.value;

                var campos = [nombre, correo, genero, boletin, comentario, carrera, pass, promedio, fecha]

                if (campos.some(campos => campos == "" || campos == "0")){
                    alert("Faltan campos por llenar");
                } else{
                    document.forma01.method = 'post';
                    document.forma01.action = 'recibe.php';
                    document.forma01.submit();
                }
            }
        </script>

    </head>
    <body>
        <form name="forma01" action="recibe.php" method="post">
            <labe>
                Nombre:
                <input id="campo1" type="text" name="nombre" placeholder="Escribe tu nombre" required>
            </labe>
            <br>
            <label>Correo:</label>
            <input type="email" name="correo" value="@udg.mx">
            <br>
            <label for="sexo">Genero</label>
            <input type="radio" name="sexo" value="F">Femenino
            <input type="radio" name="sexo" value="M">Masculino
            <br>
            <input type="checkbox" name="boletin" value="1" checked>
            <label for="boletin">Recibir Boletin</label>
            <br>
            <label for="comentario">Comentario:</label><br>
            <textarea name="comentario" cols="30" rows="5"></textarea>
            <br>
            <label for="carrera">Carrera:</label>
            <select name="carrera">
                <option value="0" selected>Selecciona</option>
                <option value="1">Ing. Informatica</option>
                <option value="2">Ing. Computacion</option>
            </select>
            <br>
            <label for="pass">Contraseña</label>
            <input type="password" name="pasw">
            <br>
            <label for="promedio">Promedio:</label>
            <input type="number" name="promedio" min="60" max="100">
            <br>
            <label for="fecha">Fecha de nacimiento</label>
            <input type="date" name="fecha">
            
            <br>
            <input onclick="recibe(); return false;" type="submit" value="Enviar">
        </form>
    </body>
</html>