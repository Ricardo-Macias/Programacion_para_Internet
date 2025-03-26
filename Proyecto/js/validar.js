function recibe() {
    var name = document.employed.name.value;    
    var last_name = document.employed.last_name.value;
    var email = document.employed.email.value;
    var password = document.employed.password.value;
    var rol = document.employed.rol.value;

    var form = [name, last_name, email, password, rol];

    if (form.some(form => form == "" || form == "0")) {
        $('.mensaje').html('Faltan campos por llenar');
        setTimeout("$('.mensaje').html('');", 5000);
    } else {
        document.employed.method = 'post';
        document.employed.action = 'empleados_alta.php';
        document.employed.submit();
    }
}