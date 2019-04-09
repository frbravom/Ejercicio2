<?php
include('../lib/constantes.php');
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
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link href="../css/estilos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <div id="contenedor">
            <div>
                <div id="titulositio"><img src="../jpg/logo.png"/>HOSTAL RIO AMAZONAS RESERVATION ONLINE</div>
                <div id="titulo">Reservation</div>
            </div>
            <div id="menu"><?php include('../menu.php'); ?></div>
            <div id="contenidoreserva">

                <fieldset>
                    <form class="form" name="formReserva" action="" method="post">
                        <div class="form-group">
                            <label for="exampleInputName1">Name:</label>
                            <input type="text" class="form-control" id="exampleInputName2" placeholder="Enter your name here">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail2">Email:</label>
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
                        </div>

                        <div class="radio">
                            <label for="exampleInputName1">English Languaje: </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Yes
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> No
                            </label>
                        </div>

                         <div class="select">
                        <label for="exampleInputName1">Source Region: </label>
                        <select class="form-control">
                            <option>Choose an option</option>
                            <option>Europe</option>
                            <option>USA</option>
                            <option>Asia</option>
                            <option>Africa</option>
                            <option>South America</option>
                        </select>
                         </div>

                        </br>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>  

                </fieldset>
            </div>
            <div id="footer">Antonio Varas 666, Fono: 222222222</div>
        </div>

    </body>

    <script>
        $("[id*=prisolicitud]").on("click", function (event) {
            var idname = $(this).attr("id");
            idname = idname.substring(13, 14);
            //$("[id*=subsolicitud-"+idname+"]").css("display", "block");

            if (($("[id*=subsolicitud-" + idname + "]").css("display") != "none")) {
                $("[id*=subsolicitud-" + idname + "]").css("display", "none");
            } else {
                $("[id*=subsolicitud-" + idname + "]").css("display", "block");
            }
        });
        $('[data-toggle="tooltip"]').tooltip();
    </script>
</html>
