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
    <tbody >
    <table border="1">
        <tr>
            <td>Ejercicio</td>
            <td>FOR</td>
            <td>WHILE</td>
            <td>DO WHILE</td>
        </tr>
        <tr>
            <td>Escribir los 100 primeros numeros mayores a 0</td>
            <td>
                <?php
                $n=100;
                for($i=0;$i<$n;$i++){
                    $numero=$i+1;
                    echo "$numero - ";
                }
                ?>
            </td>
            <td>
                <?php
                $n=100;
                $i=0;
                while ($i<$n){
                    $i++;
                    echo "$i-";
                }
                ?>
            </td>
            <td>
                <?php
                $n=100;
                $i=0;
                do {
                    $i++;
                    echo "$i-";
                }while ($i<$n);
                ?>
            </td>
            
            
        </tr>
         <tr>
            <td>Determinar si un numero es primo</td>
            <td>
                <?php
                $numero= rand(2,100);
                $numeroDivisores=0;
                for($i=0;$i<$n;$i++){
                    $resto=$numero%($i+1);
                    if ($resto=0){
                        $numeroDivisores++;
                    }
                }
                if ($numeroDivisores=2){
                    echo "<br>El numero $numero es primo";
                }else{
                    echo "<br>El numero $numero no es primo";
                }
                ?>
            </td>
            <td>
                <?php
                $numero= rand(2,100);
                $numeroDivisores=0;
                $i=0;
                while ($i<$numero){
                    $resto=$numero%($i+1);
                    $i++;
                    if ($resto=0){
                        $numeroDivisores++;
                    }
                }
                if ($numeroDivisores=2){
                    echo "<br>El numero $numero es primo";
                }else{
                    echo "<br>El numero $numero no es primo";
                }
                ?>
            </td>
            <td>
                <?php
                $numero= rand(2,100);
                $numeroDivisores=0;
                $i=0;
                do {
                    $resto=$numero%($i+1);
                    $i++;
                    if ($resto=0){
                        $numeroDivisores++;
                    }
                }while ($i<$numero);
                
                if ($numeroDivisores=2){
                    echo "<br>El numero $numero es primo";
                }else{
                    echo "<br>El numero $numero no es primo";
                }
                ?>
            </td>
        </tr>
        <tr>
                    <td>La diagonal</td>
                    <td>
                        <?php
                            $n=  rand(3, 20);
                            echo $n;
                            $alto=10;
                            $altopx=$alto."px";
                            $ancho=10;
                            $anchopx=$ancho."px";
                            $borde=2;
                            $bordepx=$borde."px";
                            $colorSeleccionado="#000099";
                            $colorBase="#ccc";
                            
                            
                            $altoTotal=$alto*$n+($n*2)*$borde;
                            $anchoTotal=$ancho*$n+($n*2)*$borde;
                            $altoTotalpx=$altoTotal."px";
                            $anchoTotalpx=$anchoTotal."px";
                            
                            $tabla="<div style='height:$altoTotalpx; 
                                    width:$anchoTotalpx'>";
                            for($i=0;$i<$n;$i++){
                                for($j=0;$j<$n;$j++){
                                    $color=$colorBase;
                                    if($i==$j){
                                        $color=$colorSeleccionado;
                                    }
                                 $tabla.="<div style='height:$altopx; 
                                    width:$anchopx;float: left;
                                    border:$bordepx solid #000;
                                    background:$color;     '>";   
                                 $tabla.="</div>";   
                                }
                            }
                            $tabla.="</div>";
                            
                            echo $tabla;
                        
                        
                        
                        
                        ?>
                        
                    </td>
                    <td></td>
                    <td></td>
                </tr>
    </table>
    </tbody>
    </body>
</html>
