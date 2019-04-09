<?php
include('lib/constantes.php');
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>HOSTAL RIO AMAZONAS RESERVATION ONLINE</title>
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <div id="contenedor">
            <div>
                <div id="titulositio"><img src="jpg/logo.png"/>HOSTAL RIO AMAZONAS RESERVATION ONLINE</div>
                <div id="titulo">Home</div>
            </div>
            <div id="menu"><?php include('menu.php'); ?></div>
            <div id="contenidohome">Welcome to Hostal Rio Amazonas</div>
            <div id="footer">Antonio Varas 666, Fono: 222222222</div>
        </div>

    </body>

    <script>
        $("[id*=prisolicitud]").on("click", function (event) {
                    var idname = $(this).attr("id");
                    idname=idname.substring(13,14);
                   //$("[id*=subsolicitud-"+idname+"]").css("display", "block");
                   
                   if (($("[id*=subsolicitud-"+idname+"]").css("display") != "none")) {
                       $("[id*=subsolicitud-"+idname+"]").css("display", "none");
                   }else{
                       $("[id*=subsolicitud-"+idname+"]").css("display", "block");
                   }
                });
        $('[data-toggle="tooltip"]').tooltip();
    </script>
</html>
