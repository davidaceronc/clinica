$(document).ready(function(){
    $("#frmAtencion").submit(function(evt){
        evt.preventDefault();
        
        $.ajax({
            url: "regis_ate2.php",
            type: "POST",
            data: $("#frmAtencion").serialize(),
            beforeSend: function() {
                $("#divAjax").html("<img src='images/ajax.gif'>");
            },
            success: function(datos){
                $("#divAjax").html(datos);
            }
        });
    });
    
    $("#cmdPrecio").click(function(){
        $("#divAjax").html("<img src='images/ajax.gif'>");
        $("#divAjax").load("precios.php");
    });
    
    $("#cmdPro").click(function(){
        $.ajax({
            url: "procedimientos.php",
            type: "POST",
            data: $("#frmAtencion").serialize(),
            beforeSend: function() {
                $("#divAjax").html("<img src='images/ajax.gif'>");
            },
            success: function(datos){
                $("#divAjax").html(datos);
            }
        });
    });
});


