function deleteAjax(id_employed) {

    value = confirm("Seguro que desea elimina al el empleado con el id " + id_employed);

    if (value) {
        $.ajax({
            url: 'empleados_elimina.php',
            type: 'post',
            dataType: 'text',
            data: 'id_employed=' + id_employed,
            success: function (result) {
                if (result == 1) {
                    $('.row'+id_employed).hide();
                }
                else {
                    alert('Error al tratar de eliminar');
                }
            },
            error: function () {
                alert('Error archivo no encontrado ...');
            }    
        });
    }
}

function login() {
    var email = document.formLogin.email.value;
    var pass = document.formLogin.password.value;

    if(email == "" || pass == ""){
        $('#message').html('Faltan campos por llenar');
        setTimeout("$('#message').html('');",5000);
    } else{
        $.ajax({
            url      : 'validaUsuario.php',
            type     : 'post',
            dataType : 'text',
            data     : 'correo='+email+'&pass='+pass, //Pasamos dos variables con +'&'
            success  : function(res){
                if (res == 1){
                    window.location.href="bienvenido.php"
                } else {
                    $('#message').html('Correo o Contraseña incorrectos ');
                }
                
            }, error: function(){
                alert('Error archivo no encontrado ...');
            }
        });
    }
}