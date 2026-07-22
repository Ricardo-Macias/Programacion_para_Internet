# Programación para Internet

Este repositorio contiene las actividades y el proyecto realizados durante la materia de Programación para internet

## Actividades

### Actividad 2: Imagenes con Links

Se crea una estructura básoca de HTML que contenga 5 imágenes que sean links.

**Requerimientos**
- Hacer un documento con la estructura básica de un HTML vista en clase
- Agregar 5 imágenes `<img>` que sean links `<a></a>`
- Las imágenes deberán usar direcciones relativas.
- Cada link deben de abrir en una nueva pestaña el enlace correspondiente
- Las imágenes deben ser de un tema en particular de esta manera el enlace nos llevará al sitio de cada marca.

### Actividad 3: Tabla con imágenes

Se crea una estructura básica de HTML que contenga una tabla `<table></table>`, se usaran las mismas imagenes de la Actividad 2.

**Requerimientos**
- Hacer un documento con la estructura básica de un HTML vista en clase.
- Crear tabla de acuerdo a lo visto en clases.
- Agregar 5 imágenes `<img>` que sean links `<a></a>` en la primera columna y su nombre (también link) en la segunda columna.
- Usar direcciones relativas para las imagenes.
- Cada link debe de abrir en una nueva pestaña el enlace correspondiente.

### Actividad 4: Tabñas HTML

Crear 4 estructuras básicas de HTML que cada una contenga una tabla `<table></table>`

**Requerimientos**
- Hacer un documento con la estructura básica de un HTML vista en clase para cada tabla.
- Crear en cada uno la tabla correspondiente de acuerdo a lo visto en clase.

### Actividad 5: Tablero de ajedrez

Crear una estructura básica de HTML que contenga una tabla `<table></table>` que simule un tablero de ajedrez

**Requerimientos**
- Hacer un documento con la estructura básica de un HTML vista en clase.
- Crear la tabla de 8 filas por 8 columnas de un tamaño adecuado para su visualización.
- Agregar que cada celda tenga el color correspondiente (negro o blanco).

### Actividad 6: Validación de campos con JS 01

Validar un formulario con javascript.

**Requerimientos**
- El formulario debe de tener un campo de texto llamando cooreo, un campo de texto llamado pass y un select con las opciones de Selecciona (0), Gerente (1), Ejecutivo (2).
- Al dar click se debe de mandar llamar a una función de javascript que me valide el contenido de cada uno de los tres campos para validar si están vacíos o faltan de llenar algún campo. Esto con un solo IF.
- Si falta alguno de los tres campos me debe de mostrar con un solo alert() un mensaje que diga "Faltan campos por llenar".
- Si los tres campos están llenos me debe de mostrar con un solo alert() un mensaje que diga "Campos llenos".

### Actividad 7: Validación de campos con JS 02

Utilizar el formaulario visto en clases prar validar la información y mostrarla en un alert

**Requerimientos**
- Validar con una función de javascript que TODOS los campos estén llenos.
- Si falta uno o mas campos por llenar mostrar un solo alert() con el mensaje de "Faltan campos por llenar".
- Una vez llenos todos los campos, la información se debe de mostrar en un solo alert().
- De cada campo se deben de mostrar los textos correspondientes, si la información vienen de algún select o campo con valores numéricos se debe de mostrar la etiqueta (texto) correspondiente, no se deben de mostrar los valores numéricos.

### Actividad 8: Eliminar filas con JS (jquery)

Programar una función para eliminar filas `<tr></tr>` con javascript, se utilizara y se adaptara el código de la Actividad 3. Se debe de utilizar JQUERY.

**Requerimientos**
- Se utilizaran la tabla creada en la actividad 3.
- Se agregara una tercera columna con un link o un boton que mande a llamar una función para eliminar (ocultar) la fila correspondiente con JQUERY.
- Este boton o link debe de preguntar si se quiere eliminar la fila, para esto se debe de usar la función confirm() de javascript.
- Se debe de resolver con una sola función.

### Actividad 9: Tablas HTML - DIVs

Se realizara con DIVs la actividad 4. En vez de utilizar `<table></table>` usar `<div></div>`, se utilizara CSS para dar caracteristicas a cada DIV.

**Requerimientos**
- Hacer un documento con la estructura básica de un HTML vista en clase.
- Crear en cada uno los DIVs necesario para construir la tabla correspondiente de acuerdo a lo visto en clases.
- Escribir una letra, número o palabra en cada celda.

### Actividad 10: Crear tablero de ajedrez con DIVs

Utilizando la pracica del tablero de ajedrez (Actividad 5) con la etiqueta de `<table></table>`, cambiar y adaptar para que se usen DIVs.

### Actividad 11: Eliminar DIVs con JS

Programar una función para eliminar filas `<div></div>` con jquery, usar y adaptar el codigo de la Actividad 3 y Actividad 10, se debe de utilizar JQUERY.

**Requerimientos**
- Realizar la estructura de la actividad 3 con contenedores (DIVs).
- En la tercera columna (div) agregar un link o boton que mande llamar una función para eliminar (ocultar) el div correspondiente.
- Este botón o link debe de preguntar si se quiere eliminar la fila (div), para esto se debe de usar la función confirm() de javascript

### Actividad 12: Envío de datos JS / PHP

Utilizar formulario visto en clases para enviar la información a un archivo de PHP y mostrarlo.

**Requerimientos**
- Validar con una función de javascript que todos los campos estén llenos o seleccionados.
- Si falta uno omas campos por llenar o seleccionar mostrar un alert() con el mensaje de "Faltan campos por llenar".
- Una vez llenos o seleccionados todos los campos, la informacion se debe de mandar hacia un scrip en PHP.
- Se deben de cachar los valores y mostrar la información correspondiente, si la información viene de algún select o campos con valores numéricos se debe de mostrar la etiqueta

### Actividad 13: Crear filas dinámicamente

Crear un formulario con un solo select con 5000 opciones.

**Requerimientos**
- En una estructura basica crear un formulario con un select de 0 a 5000 opciones generadas mediante PHP.
- No se debe de poder enviar si no ha seleccionado una opcion del select con valor mayor a 0.
- El valor seleccionado se manda hacia un archivo PHP donde se cacha y se genera una tabla `<table></table>` de una sola columna por "N" filas, donde N es igual al numero de filas enviadas desde el formulario.
- Dentro de cada fila imprimir el calor consecutivo.

## Proyecto

### B1. Lista de empleados

Dar diseño usando CSS al archivo empleados_lista.php.
La tabal de empleados tendrá las siguientes columnas:
- id
- Nombre completo
- Correo
- Rol
- Ver deralle
- Editar
- Eliminar

Los datos de las columnas de ver detalle, editar y eliminar estarán vacíos en esta asignación.

**Requerimientos**
- El archivo empleados_lista.php debe de mostrar la siguiente información:
   - Titulo de la sección: Listado de empleados (5) *Donde 5 es la cantidad de empleados.
   - Link para "Crear nuevo registro" (Deberá mandar a un archivo llamado empleados_alta.php) *empledos_alta.php es otra asignación.
   - La tabla descrita anteriormente.
- Se debera de usar CSS y contenedores (`div`)


### B2. Eliminar empleados

Programar la función de borrado de un empleado de la tabla "empleados" usando AJAX. Se debe de usar JQUERY, sera un update y no una eliminación real.

**Requerimientos**
- En la lista de empleados debe de existir un ink o botón que mande llamar una función de javascript.
- Esta función deberá tener un confirm() para confirmar si se desea borrar, en caso afirmativo se debe de mandar un AJAX que mande el ID del registro que se quiera eliminar a un script de PHP.
- Este script debe de hacer una consulta PHP/MYSQL para eliminar el registro de la tabla de empleados, el PHP debe de responder si se realizó la eliminación y regresar la bandera a la función de javascript/ajax.
- Si se elimino exitosamente, entonces se borra la fila correspondiente con JQUERY.

### B3. Alta de empleados

Se programara el alta de un empleado mediante un formulario a la base de datos, se debe de pedir los siguientes campos:
- Nombre
- Apellidos
- Correo
- Password
- Rol: Gerente o Ejecutivo

**Requerimientos**
- Se debe de validar mediante javascript/jquery que todos los campos estén llenos.
- Si no estám llenos se debe de mostrar un mensaje en un contenedor (`<div>`) abajo del boton de salvar que diga error (Faltan campos por llenar). Quitar ese mensaje después de 5 segundos.
- Si están llenos se manda la información al archivo de PHP para que lo salve en la tabla correspondiente.
- Una vez que este salvado se debe de volver a mostrar el listado de empleados haciendo un redirect con PHP. IMPORTANTE que la contraseña se encripte.
- Ademas de los campos, el formaulario debe de tener un titulo.
- Ademas de los campos, el formulario debe de tener tambien un link con la leyenda de "Regresar al listado" su funcion sera regrear al Listado de empleados.
- IMPORTANTE: Se debe de validar con AJAX que el correo no exista en la base de datos. SI existe se debe de mostrar en un contenedor (`<div>`) a un lado del input del correo el mensaje correspondiente. Quitar el mensaje despues de 5 segundos. Se debe de realizar la validacion con onBlur desde el input de cooreo No desde el boton salvar.

### B4. Ver detalle empleados

Se programara el ver detalle de un empleado.

**Requerimientos**
- Desde el listado de empleados se tiene un boton o link de "Ver detalle".
- Este botón envía el ID para poder hacer una consulta y mostrar los siguientes campos:
   - Nombre + Apellidos
   - Correo
   - Rol
   - Status (Activo e inactivo)
- Agregar botón de regresar.

### B5. Edición de empleados 

Programar la edicion de un empleado mediante un formulario se deben de pedir o poder editar los mismos campos que se usan en la alta.

**Requerimientos**
- Desde el listado de empleados se tiene un botón de "Editar".
- Este botón envia el ID para poder hacer una consulta y precargar los campos con los valores por default.
- Se debe de validar mediante javascript que todos los campos (menos password) esten llenos.
- IMPORTANTE: Si no están llenos se debe de mostrar un mensaje en un contenedor (`<div>`) abajo del botónn de salvar que diga el error (Faltan campos por llenar). Quitar ese mensaje despues de 5 segundos.
- Si están llenos se manda la informacion al archivo de PHP para que actualice el registro, es IMPORTANTE que la contraseña se encripte si se escribe una nueva.
- Una vez que esten editados se debe de volver a mostrar el listado de administradores.
- Ademas de los campos, el formulario debe de tener un titulo.
- Ademas de los campos, el formulario debe de tener un link con la leyenda de "Regresar" su funcion sera regresar al listado de empleados.
- IMPORTANTE: se debe de validar con AJAX que el correo no exista en la base de datos. Si existe se debe de mostrar en un contenedor (`<div>`) a un lado del input de correo el mesaje correspondiente. Quitar el mensaje despues de 5 segundos.

### B6. Adjuntar archivo

### B7. Login

### B8. Autentificación y validación con sesiones

### B9. Menú

### B10. Cerrar sesión
