$(document).ready(function() {
    $('#nombre').focus();
})

function verificarCiCliente(ciClientee) {
    $.ajax({
            url: '../Controlador/LogicaVerificarCiCliente.php',
            type: 'POST',
            datatype: 'html',
            //nombreArticulo, es el que va justamente a la pagina: 'LogicaVerificarCiCliente.php' 
            data: { ciCliente: ciClientee }
        })
        .done(function(resultado) {
            if (resultado === 'existe') {
                console.log(resultado);
                $("#mensajeSiExisteCliente").html('Existe el ci de Cliente');
            } else {
                $("#mensajeSiExisteCliente").html('');
                //$("#tablaArticulos").html(resultado);
            }
        })
} //end function

$(document).on('keyup', '#ci', function() {
    var criterioBusqueda = $(this).val();
    //console.log(criterioBusqueda);
    if (criterioBusqueda != "") {
        verificarCliente(criterioBusqueda);
    }
    /*else{
    	verificarArticulo();
    }*/
});