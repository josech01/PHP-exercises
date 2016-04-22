
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejemplo Jquery</title>
        <script src="jquery-2.2.3.min.js"></script>
        <script src="js.js"></script>
        <style type="text/css">
            .clasecss{
                background-color: #ff8800;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div id="capa" style="padding: 10px; 
             background-color: #ff8800">Haz clic en un botón</div>
        <input type="button" value="Botón A" 
               onclick="$('#capa').html('Has hecho clic en el botón <b>A</b>')">
        <input type="button" value="Botón B" 
               onclick="$('#capa').html('Recibido un clic en el botón <b>B</b>')">
        <br><br>
        <div id="capa1" style="padding: 10px; background-color: #ff8800;">
            Pon el ratón encima de esta capa</div>
        <br>
        <div id="mensaje1" style="display: none;">
            Has puesto el ratón encima!! <br>
            (Ahora quítalo de la capa)</div>


        <br><br>
        <div id="capa2">
            Esta capa es independiente y voy a 
            añadir y eliminar clases css sobre ella
        </div>
        <br>
        <br>
        <a href="http://www.desarrolloweb.com">
            Añadir y quitar clase en la capa de arriba</a>


        <br>
        <br>

        <form>
            Nombre: <input type="text" name="nombre">
            <br>
            <input type="checkbox" name="mayor_edad" value="1" id="mayoria_edad"> Soy mayor de edad
            <br>
            <div id="formulariomayores" style="display: none;">
                Dato para mayores de edad: 
                <input type="text" name="mayores_edad">
            </div>
        </form>


        <br>
        <br>

        <div id="capaefectos" style="background-color: #cc7700; color:fff; padding:10px;">
            Esto es una capa que nos servirá para hacer efectos!
            <br>
            <br>
            Pongo este texto simplemente de prueba
        </div>

        <p>
            <a href="#" id="ocultar">Ocultar la capa</a> | 
            <a href="#" id="mostrar">Mostrar la capa</a> 
        </p>
    </body>
</html>