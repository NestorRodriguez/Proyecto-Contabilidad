function validate(){

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

$('.resivo').click(function(){
    $('.formularioRsv').animate({
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