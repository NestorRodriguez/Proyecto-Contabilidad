function validarLogin(){

    var datos = document.login;

    if (datos.user.value == ""){
        document.getElementById("alerta").innerHTML = '<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a>Debes ingresar tu nombre de usuario para poder iniciar sesión.</div>';
        datos.user.focus();
        return false;
    } else {
        document.getElementById("alerta").innerHTML="";
    }
    if (datos.password.value == ""){
        document.getElementById("alerta").innerHTML = '<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a>Debes ingresar tu contraseña para poder iniciar sesión.</div>';
        datos.password.focus();
        return false;
    } else {
        document.getElementById("alerta").innerHTML="";
    }
    datos.submit();
}
function validarRecibo(){

    var datosRecibo = document.caja;

    if(datosRecibo.responsablercb.value == ""){
        document.getElementById("alerta").innerHTML = '<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a>Debes ingresar a el o la responsable de este recibo para poder enviar el formulario.</div>';
        datosRecibo.responsablercb.focus();
        return false;
    }else {
        document.getElementById("alerta").innerHTML="";
    }
    datosRecibo.submit();
}
function validarCheque(){

    var datosCheque = document.caja;

    if(datosCheque.ncheque.value == ""){
        document.getElementById("alerta").innerHTML = '<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a>Debes ingresar el numero de este cheque para poder enviar el formulario.</div>';
        datosCheque.ncheque.focus();
        return false;
    }else {
        document.getElementById("alerta").innerHTML="";
    }
    if(datosCheque.banco.value == ""){
        document.getElementById("alerta").innerHTML = '<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a>Debes ingresar el el banco al que pertenece este cheque para poder enviar el formulario.</div>';
        datosCheque.banco.focus();
        return false;
    }else {
        document.getElementById("alerta").innerHTML="";
    }
    if(datosCheque.responsablechq.value == ""){
        document.getElementById("alerta").innerHTML = '<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a>Debes ingresar a el o la responsable de este cheque para poder enviar el formulario.</div>';
        datosCheque.responsablechq.focus();
        return false;
    }else {
        document.getElementById("alerta").innerHTML="";
    }
    datosCheque.submit();
}
function validarFactura(){

    var datosFactura = document.caja;

    if(datosFactura.responsableftr.value == ""){
        document.getElementById("alerta").innerHTML = '<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a>Debes ingresar a el o la responsable de esta factura para poder enviar el formulario.</div>';
        datosFactura.responsableftr.focus();
        return false;
    }else {
        document.getElementById("alerta").innerHTML="";
    }
    datosFactura.submit();
}
function validarAnticipo(){

    var datosAnticipo = document.caja;

    if(datosAnticipo.responsableant.value == ""){
        document.getElementById("alerta").innerHTML = '<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a>Debes ingresar a el o la responsable de este anticipo para poder enviar el formulario.</div>';
        datosAnticipo.responsableant.focus();
        return false;
    }else {
        document.getElementById("alerta").innerHTML="";
    }
    if(datosAnticipo.cedula.value == ""){
        document.getElementById("alerta").innerHTML = '<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a>Debes ingresar la cedula de el o la responsable de este anticipo para poder enviar el formulario.</div>';
        datosAnticipo.cedula.focus();
        return false;
    }else {
        document.getElementById("alerta").innerHTML="";
    }
    datosAnticipo.submit();
}

$('.recibo').click(function(){
    $('.formularioRcb').animate({
        height: "toggle",
        'padding-top': 'toggle',
        'padding-bottom': 'toggle',
        opacity: 'toggle'
    }, "slow");
});
$('.cheque').click(function(){ 
    $('.formularioChq').animate({
        height: "toggle",
        'padding-top': 'toggle',
        'padding-bottom': 'toggle',
        opacity: 'toggle'
    }, "slow");
});
$('.factura').click(function(){ 
    $('.formularioFtr').animate({
        height: "toggle",
        'padding-top': 'toggle',
        'padding-bottom': 'toggle',
        opacity: 'toggle'
    }, "slow");
});
$('.anticipo').click(function(){ 
    $('.formularioAnt').animate({
        height: "toggle",
        'padding-top': 'toggle',
        'padding-bottom': 'toggle',
        opacity: 'toggle'
    }, "slow");
});
$('.caja').click(function(){ 
    $('.formularioCaj').animate({
        height: "toggle",
        'padding-top': 'toggle',
        'padding-bottom': 'toggle',
        opacity: 'toggle'
    }, "slow");
});