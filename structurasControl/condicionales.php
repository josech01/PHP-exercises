<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
         <?php
        // put your code here
        $var1=10;
        $var2=15;
        $var3=14;
        
        $promedio=($var1+$var2+$var3)/3;
        $estado='';
        if($promedio>=10){
            $estado="Aprobado";
        }
        echo "El estado del Alumno es: <b>$estado</b> <br>";
        if($var1==10) {
            echo "La primerta nota es: <b>$var1</b><br>";
        }
        if($var2==14) {
            echo "La segunda nota es: <b>$var2</b><br>";
        }else{
            echo "La segunda nota no es <b>14</b><br>";
        }
        if($estado=="Aprobado"){
            echo "Felicitaciones<br>";
        }else{
            echo "Debes estudiar más<br>";
        }
        //Dado un número definir si es multiplo de 5
        echo "<h3> Ejercicio 3<h3>";
        $numero1=25;
        $numero2=28;
        
        $resto1=$numero1%5;
        $resto2=$numero1%5;
        
        if($resto1==0) {
            echo "$numero1 es múltiplo de 5<br>";
        }else{
            echo "$numero1 no es multiplo de 5<br>";
        }
        if($resto2==0) {
            echo "$numero2 es múltiplo de 5<br>";
        }else{
            echo "$numero2 no es multiplo de 5<br>";
        }
        ?>
        <h2>Dado una palabra, definir si es capicua por ejemplo reconocer ana</h2>
        
        <h3> Ejercicio 4</h3>
        <form action="condicionales.php" method="get">
        Name: <input type="text" name="name"><br>
        day: <input type="number" name="day"><br>
        
        <input type="submit">
        </form>
        
            
        <h2>para el mes de abril  dado un numero (1-30)
        escribir que día de la semna es miercoles es 6 28 es jueves.
        </h2>    
            
            
        <?php 
/* @var $day type */
        $day = ($_GET["day"])%7;
        $name = $_GET["name"];
        if($name==  strrev($name)){
            echo "La palabra es capicua<br>";
        }else{
            echo "La palabra no lo es<br>" ;
        }
            
        switch ($day){
            case 1:
                echo "Es viernes";
                break;
            case 2:
                echo "Es Sabado";
                break;
            case 3:
                echo "Es Domingo";
                break;
            case 4:
                echo "Es Lunes";
                break;
            case 5:
                echo "Es Martes";
                break;
            case 6:
                echo "Es Miercoles";
                break;
            case 7:
                echo "Es Jueves";
                break;
        }
        
        ?>
    </body>
</html>
