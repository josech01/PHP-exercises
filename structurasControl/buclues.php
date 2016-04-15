<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bucles</title>
    </head>
    <body>
        <table border="1">
            <thead>
                <tr>
                    <th>Ejercicio</th>
                    <th>For</th>
                    <th>While</th>
                    <th>do while</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Escribir los 100 primeros numeros mayores a 0</td>
                    <td>
                        <?php
                        $n = 100;
                        for ($i = 0; $i < $n; $i++) {
                            $numero = $i + 1;
                            echo "$numero - ";
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        $n = 100;
                        $i = 0;
                        while ($i < $n) {
                            $numero = $i + 1;
                            echo "$numero - ";
                            $i++;
                        }
                        ?>

                    </td>
                    <td>
                        <?php
                        $n = 100;
                        $i = 0;
                        do {
                            $numero = $i + 1;
                            echo "$numero - ";
                            $i++;
                        } while ($i < $n)
                        ?>

                    </td>
                </tr>
                <tr>
                    <td>Determinar si un numero entre 1 y 100 es primo</td>
                    <td>
                        <?php
                        $numero = rand(2, 100);

                        $numeroDivisores = 0;
                        for ($i = 0; $i < $n; $i++) {
                            $resto = $numero % ($i + 1);
                            if ($resto == 0) {
                                $numeroDivisores++;
                            }
                        }

                        if ($numeroDivisores == 2) {
                            echo "<br>El numero $numero es primo";
                        } else {
                            echo "<br>El número $numero tiene $numeroDivisores divisores";
                        }
                        ?>
                    </td>
                    <td>

                        <?php
                        $numero = rand(2, 100);

                        $numeroDivisores = 0;
                        $i = 0;
                        while ($i < $numero) {
                            $resto = $numero % ($i + 1);
                            if ($resto == 0) {
                                $numeroDivisores++;
                            }
                            $i++;
                        }

                        if ($numeroDivisores == 2) {
                            echo "<br>El numero $numero es primo";
                        } else {
                            echo "<br>El número $numero tiene $numeroDivisores divisores";
                        }
                        ?>

                    </td>
                    <td>
                        <?php
                        $numero = rand(2, 100);

                        $numeroDivisores = 0;
                        $i = 0;
                        do {
                            $resto = $numero % ($i + 1);
                            if ($resto == 0) {
                                $numeroDivisores++;
                            }
                            $i++;
                        } while ($i < $numero);

                        if ($numeroDivisores == 2) {
                            echo "<br>El numero $numero es primo";
                        } else {
                            echo "<br>El número $numero tiene $numeroDivisores divisores";
                        }
                        ?>

                    </td>
                </tr>
                <tr>
                    <td>La tabla</td>
                    <td>
<?php
$n = rand(3, 20);
echo $n;
$alto = 10;
$altopx = $alto . "px";
$ancho = 10;
$anchopx = $ancho . "px";
$borde = 2;
$bordepx = $borde . "px";


$altoTotal = $alto * $n + ($n * 2) * $borde;
$anchoTotal = $ancho * $n + ($n * 2) * $borde;
$altoTotalpx = $altoTotal . "px";
$anchoTotalpx = $anchoTotal . "px";

$tabla = "<div style='height:$altoTotalpx; 
                                    width:$anchoTotalpx'>";
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        $tabla.="<div style='height:$altopx; 
                                    width:$anchopx;float: left;
                                    border:$bordepx solid #000;
                                    background:#ccc;     '>";
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
                <tr>
                    <td>La diagonal</td>
                    <td>
<?php
$n = rand(3, 20);
echo $n;
$alto = 10;
$altopx = $alto . "px";
$ancho = 10;
$anchopx = $ancho . "px";
$borde = 2;
$bordepx = $borde . "px";
$colorSeleccioando = "#000099";
$colorBase = "#ccc";


$altoTotal = $alto * $n + ($n * 2) * $borde;
$anchoTotal = $ancho * $n + ($n * 2) * $borde;
$altoTotalpx = $altoTotal . "px";
$anchoTotalpx = $anchoTotal . "px";

$tabla = "<div style='height:$altoTotalpx; 
                                    width:$anchoTotalpx'>";
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        $color = $colorBase;
        if ($i == $j) {
            $color = $colorSeleccioando;
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
                <tr>
                    <td>Diagonal 2</td>
                    <td>
                        <?php
                        $n = rand(3, 20);
                        echo $n;
                        $alto = 10;
                        $altopx = $alto . "px";
                        $ancho = 10;
                        $anchopx = $ancho . "px";
                        $borde = 2;
                        $bordepx = $borde . "px";
                        $colorSeleccioando = "#000099";
                        $colorBase = "#ccc";


                        $altoTotal = $alto * $n + ($n * 2) * $borde;
                        $anchoTotal = $ancho * $n + ($n * 2) * $borde;
                        $altoTotalpx = $altoTotal . "px";
                        $anchoTotalpx = $anchoTotal . "px";

                        $tabla = "<div style='height:$altoTotalpx; 
                                    width:$anchoTotalpx'>";
                        for ($i = 0; $i < $n; $i++) {
                            for ($j = 0; $j < $n; $j++) {
                                $color = $colorBase;
                                if ($i + $j == $n - 1) {
                                    $color = $colorSeleccioando;
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
                <tr>
                    <td>La x</td>
                    <td>
                        <?php
                        $n = rand(3, 20);
                        echo $n;
                        $alto = 10;
                        $altopx = $alto . "px";
                        $ancho = 10;
                        $anchopx = $ancho . "px";
                        $borde = 2;
                        $bordepx = $borde . "px";
                        $colorSeleccioando = "#000099";
                        $colorBase = "#ccc";


                        $altoTotal = $alto * $n + ($n * 2) * $borde;
                        $anchoTotal = $ancho * $n + ($n * 2) * $borde;
                        $altoTotalpx = $altoTotal . "px";
                        $anchoTotalpx = $anchoTotal . "px";

                        $tabla = "<div style='height:$altoTotalpx; 
                                    width:$anchoTotalpx'>";
                        for ($i = 0; $i < $n; $i++) {
                            for ($j = 0; $j < $n; $j++) {
                                $color = $colorBase;
                                if (($i == $j) || ($i + $j == $n - 1)) {
                                    $color = $colorSeleccioando;
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
                <tr>
                    <td>Ajedrez</td>
                    <td>
                        <?php
                        $n = rand(3, 20);
                        echo $n;
                        $alto = 10;
                        $altopx = $alto . "px";
                        $ancho = 10;
                        $anchopx = $ancho . "px";
                        $borde = 2;
                        $bordepx = $borde . "px";
                        $colorSeleccioando = "#000099";
                        $colorBase = "#ccc";


                        $altoTotal = $alto * $n + ($n * 2) * $borde;
                        $anchoTotal = $ancho * $n + ($n * 2) * $borde;
                        $altoTotalpx = $altoTotal . "px";
                        $anchoTotalpx = $anchoTotal . "px";

                        $tabla = "<div style='height:$altoTotalpx; 
                                    width:$anchoTotalpx'>";
                        $indicadorFila = true;
                        $indicadorColumna = TRUE;
                        for ($i = 0; $i < $n; $i++) {
                            $indicadorColumna = $indicadorFila;
                            if ($indicadorFila) {

                                $indicadorFila = false;
                            } else {
                                $indicadorFila = TRUE;
                            }
                            for ($j = 0; $j < $n; $j++) {
                                $color = $colorBase;
                                if ($indicadorColumna) {
                                    $color = $colorSeleccioando;
                                    $indicadorColumna=FALSE;
                                }  else {
                                    $indicadorColumna=TRUE;
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
                <tr>
                    <td>Imagen </td>
                    <td><?php
                        $n = rand(3, 20);
                        echo $n;
                        $alto = 10;
                        $altopx = $alto . "px";
                        $ancho = 10;
                        $anchopx = $ancho . "px";
                        $borde = 2;
                        $bordepx = $borde . "px";
                        $colorSeleccioando = "#000099";
                        $colorBase = "#ccc";


                        $altoTotal = $alto * $n + ($n * 2) * $borde;
                        $anchoTotal = $ancho * $n + ($n * 2) * $borde;
                        $altoTotalpx = $altoTotal . "px";
                        $anchoTotalpx = $anchoTotal . "px";

                        $tabla = "<div style='height:$altoTotalpx; 
                                    width:$anchoTotalpx'>";
                        for ($i = 0; $i < $n; $i++) {
                            for ($j = 0; $j < $n; $j++) {
                                $color = $colorBase;
                                $restoi=$i%2;
                                $restoj=$j%2;
                                if (($restoi!=0)||($restoj!=0)) {
                                    $color = $colorSeleccioando;
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

            </tbody>
        </table>

    </body>
</html>
