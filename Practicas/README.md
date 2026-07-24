# Actividades

## Actividad 2: Imagenes con Links

Se crea una estructura básoca de HTML que contenga 5 imágenes que sean links.

**Objetivos**
- Agregar 5 imágenes `<img>` que sean links `<a></a>`
- Cada link deben de abrir en una nueva pestaña el enlace correspondiente
- Las imágenes deben ser de un tema en particular de esta manera el enlace nos llevará al sitio de cada marca.

## Actividad 3: Tabla con imágenes

Se crea una estructura básica de HTML que contenga una tabla `<table></table>`, se usaran las mismas imagenes de la Actividad 2.

**Objetivos**
- Crear tabla de acuerdo a lo visto en clases.
- Agregar las imagenes utilizadas en la practica anterior `<img>` que sean links `<a></a>` en la primera columna y su nombre (también link) en la segunda columna.
- Cada link debe de abrir en una nueva pestaña el enlace correspondiente.

## Actividad 4: Tablas HTML

Crear 4 estructuras básicas de HTML que cada una contenga una tabla `<table></table>`

**Objetivos**
- Crear 4 tablas
- La estructura de las tablas seran deacuerdo a lo visto en clases

## Actividad 5: Tablero de ajedrez

Crear una estructura básica de HTML que contenga una tabla `<table></table>` que simule un tablero de ajedrez

**Objetivos**
- Crear la tabla de 8 filas por 8 columnas de un tamaño adecuado para su visualización.
- Agregar que cada celda tenga el color correspondiente (negro o blanco).

## Actividad 6: Validación de campos con JS 01

Validar un formulario con javascript.

**Objetivos**
- El formulario debe de tener un campo de texto llamando cooreo, un campo de texto llamado pass y un select con las opciones de Selecciona (0), Gerente (1), Ejecutivo (2).
- Al dar click se debe de mandar llamar a una función de javascript que me valide el contenido de cada uno de los tres campos para validar si están vacíos o faltan de llenar algún campo. Esto con un solo IF.
- Si falta alguno de los tres campos me debe de mostrar con un solo alert() un mensaje que diga "Faltan campos por llenar".
- Si los tres campos están llenos me debe de mostrar con un solo alert() un mensaje que diga "Campos llenos".

## Actividad 7: Validación de campos con JS 02

Utilizar el formaulario visto en clases prar validar la información y mostrarla en un alert

**Objetivos**
- Validar con una función de javascript que TODOS los campos estén llenos.
- Si falta uno o mas campos por llenar mostrar un solo alert() con el mensaje de "Faltan campos por llenar".
- Una vez llenos todos los campos, la información se debe de mostrar en un solo alert().
- De cada campo se deben de mostrar los textos correspondientes, si la información vienen de algún select o campo con valores numéricos se debe de mostrar la etiqueta (texto) correspondiente, no se deben de mostrar los valores numéricos.

## Actividad 8: Eliminar filas con JS (jquery)

Programar una función para eliminar filas `<tr></tr>` con javascript, se utilizara y se adaptara el código de la Actividad 3. Se debe de utilizar JQUERY.

**Objetivos**
- Se utilizaran la tabla creada en la actividad 3.
- Se agregara una tercera columna con un link o un boton que mande a llamar una función para eliminar (ocultar) la fila correspondiente con JQUERY.
- Este boton o link debe de preguntar si se quiere eliminar la fila, para esto se debe de usar la función confirm() de javascript.
- Se debe de resolver con una sola función.

## Actividad 9: Tablas HTML - DIVs

Se realizara con DIVs la actividad 4. En vez de utilizar `<table></table>` usar `<div></div>`, se utilizara CSS para dar caracteristicas a cada DIV.

**Objetivos**
- Realizar las tablas echas en la actividad 4 utilizando `<div></div>`
- Escribir una letra, número o palabra en cada celda.

## Actividad 10: Crear tablero de ajedrez con DIVs

Utilizando la pracica del tablero de ajedrez (Actividad 5) con la etiqueta de `<table></table>`, cambiar y adaptar para que se usen DIVs.

**Objetivos**
- Realizar un tablero de ajedrez con `<div></div>`

## Actividad 11: Eliminar DIVs con JS

Programar una función para eliminar filas `<div></div>` con jquery, usar y adaptar el codigo de la Actividad 3 y Actividad 10, se debe de utilizar JQUERY.

**Objetivos**
- Realizar la estructura de la actividad 3 con contenedores (DIVs).
- En la tercera columna (div) agregar un link o boton que mande llamar una función para eliminar (ocultar) el div correspondiente.
- Este botón o link debe de preguntar si se quiere eliminar la fila (div), para esto se debe de usar la función confirm() de javascript

## Actividad 12: Envío de datos JS / PHP

Utilizar formulario visto en clases para enviar la información a un archivo de PHP y mostrarlo.

**Objetivos**
- Validar con una función de javascript que todos los campos estén llenos o seleccionados.
- Si falta uno omas campos por llenar o seleccionar mostrar un alert() con el mensaje de "Faltan campos por llenar".
- Una vez llenos o seleccionados todos los campos, la informacion se debe de mandar hacia un scrip en PHP.
- Se deben de cachar los valores y mostrar la información correspondiente, si la información viene de algún select o campos con valores numéricos se debe de mostrar la etiqueta

## Actividad 13: Crear filas dinámicamente

Crear un formulario con un solo select con 5000 opciones.

**Objetivos**
- Crear un formulario con un select de 0 a 5000 opciones generadas mediante PHP.
- No se debe de poder enviar si no ha seleccionado una opcion del select con valor mayor a 0.
- El valor seleccionado se manda hacia un archivo PHP donde se cacha y se genera una tabla `<table></table>` de una sola columna por "N" filas, donde N es igual al numero de filas enviadas desde el formulario.
- Dentro de cada fila imprimir el calor consecutivo.
