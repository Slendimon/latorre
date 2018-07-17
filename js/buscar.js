$(document).ready(function(){
    var consulta;
    //hacemos focus al campo de búsqueda
    $("#busqueda").focus();
                                                                                                 
    //comprobamos si se pulsa una tecla
    $("#busqueda").keyup(function(e){
                                  
          //obtenemos el texto introducido en el campo de búsqueda
          consulta = $("#busqueda").val();
          //hace la búsqueda                                                                                  
          $.ajax({
                type: "POST",
                url: "index.php?action=buscar",
                data: "b="+consulta,
                dataType: "html",
                beforeSend: function(){
                //imagen de carga
                $("#resultado").html(consulta);
                },
                error: function(){
                alert("error petición ajax");
                },
                success: function(data){                                                    
                $("#resultado").empty();
                $("#resultado").append(data);                                                             
                }
          });                                                                         
    });                                                     
});    