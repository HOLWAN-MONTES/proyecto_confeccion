$(document).ready(function(){
    recargarLista();
    $('#ti_pres').change(function(){
        recargarLista();
    });
})

function recargarLista(){
    $.ajax({
        type:"POST",
        url: 'php/valida_insu_mat.php',
        data: "prestamo=" + $('#ti_pres').val(),
        success: function(r){
            $('#pres').html(r);
        }
    });
}
