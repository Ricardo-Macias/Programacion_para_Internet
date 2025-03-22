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