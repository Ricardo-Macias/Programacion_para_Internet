function recibe() {
    var name = document.employed.name.value;    
    var last_name = document.employed.last_name.value;
    var email = document.employed.email.value;
    var password = document.employed.password.value;
    var rol = document.employed.rol.value;

    var form = [name, last_name, email, password, rol];

    if (form.some(form => form == "" || form == "0")) {
        $('.message-employed').html('Faltan campos por llenar');
        setTimeout("$('.message-employed').html('');", 5000);
    } else {
        document.employed.method = 'post';
        document.employed.action = 'empleados_salva.php';
        document.employed.submit();
    }
}

function validateEmail() {
    var email = $('#txt-email').val();
    
    $.ajax({
        url: 'funciones/select_email.php',
        type: 'post',
        datatype: 'text',
        data: 'email=' + email,
        success: function (result) {
            if (result != "") {
                $(".message-email").html("El correo " + result + " ya existe");
                setTimeout("$('.message-email').html('');", 5000);
                $('#txt-email').val('');
            }
        },
            error: function () {
                alert('Error archivo no encontrado ...');
            }
    });
}