
function enviar_datos_ajax()
{
    var parametros = new FormData($("#formulario_envia")[0]);

    $.ajax({
        data        : parametros,
        url         : "core/modules/index/view/assistance/subir_archivo.php",
        type        : 'POST',
         //Aquí tienes que enviar la información que necesita formula.html si no tiene nada puedes dejarlo así {}
        contentType:false,
        processData:false,
        beforesend  : function(){},
    });
    alert('datos guardados');
}
