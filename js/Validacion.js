function solonumeros(evt){
if(window.event){
    keynum = evt.keyCode;
}else{
    keynum = evt.which;
}

if((keynum > 47 && keynum < 58) || keynum == 8 || keynum== 13){
    return true;
}else{
    alert("Ingresar solo numeros");
    return false;
}
}

function sololapsos(evt){
    if(window.event){
        keynum = evt.keyCode;
    }else{
        keynum = evt.which;
    }
    
    if((keynum > 48 && keynum < 52) || keynum == 8 || keynum== 13){
        return true;
    }else{
        alert("Ingresar solo lapso 1, 2 o 3");
        return false;
    }
    }

function solotexto(e){
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toString();
    letras = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZÁÉÍÓÚabcdefghijklmnñopqrstuvwxyzáéíóú";

    especiales = [8,13,32];
    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]){
        tecla_especial = true;
        break;
        }
    }

    if(letras.indexOf(tecla) == -1 && !tecla_especial){
        alert("Ingresar solo letras del abecedario español");
        return false;
    }
}

function solosexo(e){
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toString();
    letras = "FM";

    especiales = [8,13];
    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]){
            tecla_especial = true;
            break;
        }
    }

if(letras.indexOf(tecla) == -1 && !tecla_especial){
    alert("Ingresar solo la letra F o M");
    return false;
}
}

function solomayusculas(e){
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toString();
    letras = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZ";

    especiales = [8,13];
    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]){
            tecla_especial = true;
            break;
        }
    }

if(letras.indexOf(tecla) == -1 && !tecla_especial){
    alert("Ingresar solo la letra mayúsculas");
    return false;
}
}

function Especial(e){
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toString();
    letraespecial = "$%!@.";

    especiales = [8,13];
    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]){
        tecla_especial = true;
        break;
    }
}

if(letraespecial.indexOf(tecla) == -1 && !tecla_especial){
    alert("Ingresar solo letras especiales");
    return false;
}
}

/* function validarPassword(password) {
    const decimal = /^(?=.*\d)(?=.*[a-z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,16}$/;

    if(password.value.match(decimal)) {

        alert("Bienvenido a Mirai ASM, ahora inicie sesión"); 

    } else {

        alert("La contraseña debe tener al menos un carácter minúscula, mayúscula, número y especial. Y un rango entre 8 a 16 caracteres")

    }
    return;

} */