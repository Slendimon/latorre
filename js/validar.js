
var Expresion1 = /^([A-Z]{1}[a-zñáéíóú]+[\s]*)+$/i;
var Expresion2 = /^.*(?=.*[0-9])(?=.*[a-zA-ZñÑ\s]).*$/;
var Expresion3 = /^[\w]+@{1}[\w]+\.[a-z]{2,3}$/;
var Expresion4 = /^(9[\d]{8})|[\d]{6}$/;

function ValidarInput(){
    var contador=0;
    var incorrecto = false;
    var obligatorio = "Campo obligatirio";
    var nombre = document.getElementById("nombre").value;
    var apellido = document.getElementById("apellido").value;
    var domicilio = document.getElementById("domicilio").value;
    var email = document.getElementById("email").value;
    var telefono = document.getElementById("telefono").value;
    var turno = document.getElementById("turno").value;
    var canal = document.getElementById("canal").value;
    var c1_nombre = document.getElementById("c1_nombre").value;
    var c1_domicilio = document.getElementById("c1_domicilio").value;
    var c1_telefono = document.getElementById("c1_telefono").value;

   /* if((nombre=="") || (apellido=="") || (domicilio=="") || (telefono=="") || (turno==0) || (canal==0)){
        alert("Hay campos obligatorios sin llenar");
    }*/
    /*else
    {*/
       
        var valor1 = ValidarExpresion(nombre,Expresion1,30);
        var mensaje1="";
        var span1 = document.getElementById("Snombre");
        switch(valor1){
            case 1:
                mensaje1="El Contenido es muy extenso";
                contador++;
            break;            
            case 2:
                mensaje1="El Contenido es muy corto";
                contador++;
            break;
            case 3:
                mensaje1="El nombre no es valido";
                contador++;
            break;
            case -1:
                mensaje1=obligatorio;
                contador++;
            break;
            default:
                mensaje1="";
            break;
        }
        CambiarMensaje(mensaje1,span1);
        var valor1 = ValidarExpresion(apellido,Expresion1,30);
        var mensaje1="";
        var span1 = document.getElementById("Sapellido");
        switch(valor1){
            case 1:
                mensaje1="El Contenido es muy extenso";
                contador++;
            break;            
            case 2:
                mensaje1="El Contenido es muy corto";
                contador++;
            break;
            case 3:
                mensaje1="El apellido no es valido";
                contador++;
            break;
            case -1:
                mensaje1=obligatorio;
                contador++;
            break;
            default:
                mensaje1="";
                
            break;
        }
        CambiarMensaje(mensaje1,span1);
        var valor1 = ValidarExpresion(domicilio,Expresion2,50);
        var mensaje1="";
        var span1 = document.getElementById("Sdomicilio");
        console.log(valor1);
        switch(valor1){
            case 1:
                mensaje1="El Contenido es muy extenso";
                contador++;
            break;            
            case 2:
                mensaje1="El Contenido es muy corto";
                contador++;
            break;
            case 3:
                mensaje1="El dato no es valido";
                contador++;
            break;
            case -1:
                mensaje1=obligatorio;
                contador++;
            break;
            default:
                mensaje1="";
                
            break;
        }
        CambiarMensaje(mensaje1,span1);
        var valor1 = ValidarExpresion(email,Expresion3,50);
        var mensaje1="";
        var span1 = document.getElementById("Semail");
        switch(valor1){
            case 1:
                mensaje1="El email es muy extenso";
                contador++;
            break;            
            case 2:
                mensaje1="El Contenido es muy corto";
                contador++;
            break;
            case 3:
                mensaje1="No tiene el formato correcto";
                contador++;
            break;
            default:
                mensaje1="";
            break;
        }
        CambiarMensaje(mensaje1,span1);
        var valor1 = ValidarExpresion(telefono,Expresion4,9);
        var mensaje1="";
        var span1 = document.getElementById("Stelefono");
        switch(valor1){
            case 1:
                mensaje1="El Contenido es muy extenso";
                contador++;
            break;            
            case 2:
                mensaje1="El Contenido es muy corto";
                contador++;
            break;
            case 3:
                mensaje1="El telefono es invalido ";
                contador++;
            break;
            case -1:
                mensaje1=obligatorio;
                contador++;
            break;
            default:
                mensaje1="";
                
            break;
        }
        CambiarMensaje(mensaje1,span1);
        var valor1 = ValidarExpresion(c1_nombre,Expresion1,50);
        var mensaje1="";
        var span1 = document.getElementById("Sc1_nombre");
        switch(valor1){
            case 1:
                mensaje1="El Contenido es muy extenso";
                contador++;
            break;            
            case 2:
                mensaje1="El Contenido es muy corto";
                contador++;
            break;
            case 3:
                mensaje1="El nombre no es valido";
                contador++;
            break;
            default:
                mensaje1="";
            break;
        }
        CambiarMensaje(mensaje1,span1);
        var valor1 = ValidarExpresion(c1_domicilio,Expresion2,50);
        var mensaje1="";
        var span1 = document.getElementById("Sc1_domicilio");
        switch(valor1){
            case 1:
                mensaje1="El Contenido es muy extenso";
                contador++;
            break;            
            case 2:
                mensaje1="El Contenido es muy corto";
                contador++;
            break;
            case 3:
                mensaje1="El dato no es valido";
                contador++;
            break;
            default:
                mensaje1="";
            break;
        }
        CambiarMensaje(mensaje1,span1);
        return false;
        var valor1 = ValidarExpresion(c1_telefeno,Expresion4,9);
        var mensaje1="";
        var span1 = document.getElementById("Sc1_telefono");
        switch(valor1){
            case 1:
                mensaje1="El Contenido es muy extenso";
                contador++;
            break;            
            case 2:
                mensaje1="El Contenido es muy corto";
                contador++;
            break;
            case 3:
                mensaje1="El telefono es invalido ";
                contador++;
            break;
            case -1:
                mensaje1=obligatorio;
                contador++;
            break;
            default:
                mensaje1="";
                
            break;
        }
        if(contador==0)
           return true;
        else
           return false; 
   /* }
    return false;*/
}

function ValidarExpresion(palabra,Expresion,tamaño){
    if(palabra.length>tamaño){
        return 1;
    }else if(palabra.length<3){
        if(palabra.length==0){
            return -1;
        }else{
            return 2;
        }        
    }else{
        if(Expresion.test(palabra)){
            return 0;
        }else{
            return 3;
        }
    }         
}

function CambiarMensaje(mensaje,id){
    document.getElementById(id.id).innerHTML = mensaje;
}

