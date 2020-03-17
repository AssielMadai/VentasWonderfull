$(listarClientes());

$(document).ready(function() {
    $('#buscarCliente').focus();
});


function listarClientes(ciClientee) {
    $.ajax({
            url: '../Vista/IUMostrarCliente.php',
            type: 'POST',
            datatype: 'html',
            //nombreArticulo, es el que va justamente a la pagina: 'IUListaDeArticulos.php' 
            data: { ciCliente: ciClientee }

        })
        .done(function(resultado) {
            console.log(resultado);
            if (resultado === 'vacio') {
                $("#mensaje").html('No existe clientes con ese criterio de busqueda');
            } else {
                $("#mensaje").html('');
                $("#tablaClientes").html(resultado);
            }
        });
} //end function

$(document).on('keyup', '#buscarCliente', function() {
    var criterioBusqueda = $(this).val();
    //console.log(criterioBusqueda);
    if (criterioBusqueda != " ") {
        listarClientes(criterioBusqueda);
    } else {
        listarClientes();
    }
});