# Proyecto

El proyecto fue realizado mediante un total de 10 actividades, cada una tomaba en cuenta lo realizado en la actividad antererior. Se describiran los requerimientos que tuvo cada una de las practicas

## B1. Lista de empleados

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
   - Titulo de la sección: Listado de empleados ("Cantidad de empleados").
   - Link para "Crear nuevo registro".
- Se debera de usar CSS y contenedores (`div`)


## B2. Eliminar empleados

Programar la función de borrado de un empleado de la tabla "empleados" usando AJAX. Se debe de usar JQUERY, sera un update y no una eliminación real.

**Requerimientos**
- En la lista de empleados debe de existir un ink o botón que mande llamar una función de javascript.
- Esta función deberá tener un confirm() para confirmar si se desea borrar, en caso afirmativo se debe de mandar un AJAX que mande el ID del registro que se quiera eliminar a un script de PHP.
- Este script debe de hacer una consulta PHP/MYSQL para eliminar el registro de la tabla de empleados, el PHP debe de responder si se realizó la eliminación y regresar la bandera a la función de javascript/ajax.
- Si se elimino exitosamente, entonces se borra la fila correspondiente con JQUERY.

## B3. Alta de empleados

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

## B4. Ver detalle empleados

Se programara el ver detalle de un empleado.

**Requerimientos**
- Desde el listado de empleados se tiene un boton o link de "Ver detalle".
- Este botón envía el ID para poder hacer una consulta y mostrar los siguientes campos:
   - Nombre + Apellidos
   - Correo
   - Rol
   - Status (Activo e inactivo)
- Agregar botón de regresar.

## B5. Edición de empleados 

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

## B6. Adjuntar archivo

Programar que se suba una foto para cada empleado.

**Requerimientos**
- Al dar de alta se debe de poder subir una foto del empleado.
- Se debe de subir la imagen a la carpeta correspondiente y salvar en la tabla los dos valores: nombre real de la foto y nombre encriptado.
- Al editar el campo "Foto" no es obligatorio, es decir puede quedar vacio y enviar la informacion para actualizar el registro.
- Al editar, solo si se selecciona foto se debe de subir el archivo y actualizar los campos de la tabla, por lo tanto no es obligatorio en la edicion subir archivo.
- La imagen se debe de visualizar en Ver detalle.

## B7. Login

Crear un formulario (index.php) para validar la existencia de un usuario en la tabla de empleados.

**Requerimientos**
- El formulario debe de pedir nombre de usuario (email) y contraseña.
- se debe de validar mediante una funcion de javascript que los campos esten llenos.
- Si no estan llenos mostrar un mensaje de error en un contenedor.
- Si estan llenos se debe de mandar la información a un script de PHP usando AJAX. Este script debe de hacer una consulta PHP/MYSQL para verificar que el empleado existe y que esta activo y no eliminado. El PHP debe de responder si existe o no existe y regresarse la bandera a la función de javascript/ajax.
- Si no existe se muestra el mensaje de error en un contenedor.
- SI existe el usuario, se hace un redirect con javascript para mostrar la pagina de bienvenida.php
- Se debe de usar JQUERY.

## B8. Autentificación y validación con sesiones

Programar el uso de sesiones en el sistema al momento de hacer login

**Requerimientos**
- Hacer adaptacion de la actividad de Login.
- Al validar que  exista el usuario en el script de PHP se debe de crear la sesión y crear las variables de sesión correspondientes.
- Si existe el usuario se debe de cargar la pagina de bienvenido.php mostrando el mensaje de bienvenida y el menú visto y explicado en clase.

## B9. Menú

Hacer el menu del sistema.

**Requerimientos**
- Incluir el menú visto y explicado en la clase a los siguientes archivos.
    - Bienvenida
    - Listado de empleados
    - Alta de empleados
    - Edicion de empleados
    - Detalle de empleados
 - Agregar el boton de "Regresar" a los siguientes archivos
     - Alta de empleados
     - Edicion de empleados
     - Detalle de empleados

## B10. Cerrar sesión

Programar el cierre de sesión

**Requerimientos**
- El boton de "Cerrar sesión" debe de destruir la sesión y regresar a index.php
- Programar que el index.php valide que si se tiene una sesión abierta se redireccione con PHP hacia la pagina de Bienvenida.
- Programar para cada archivo que si No hay sesión abierta se redireccion hacia index.php, se debe de incluir esto en los siguientes archivos:
    - Lista de empleados
    - Alta de empleados
    - Editar empleados
    - Ver detalle de empleados 
