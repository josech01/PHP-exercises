<?php
$titulo = "Primer ejemplo";
$codigoAlumno = "1115220409";
$nombre = "Ricardo";
$apellidoPaterno = "Alvarez";
$apellidoMaterno = "Ingar";
$edad = 24;
$universidad = 'UNI';
$sueldo = 20.15;
$inactivo = false;
$egresado = true;
//concatenar
$nombreCompleto = $nombre . " " . $apellidoPaterno . " " . $apellidoMaterno;
$sueldoNombre=$nombreCompleto.": ".$sueldo;
$edadNombre=$edad.": ".$nombreCompleto;
//ejemplo de comillas
$texto="Nombre: $nombre <br> Apellido Paterno: $apellidoPaterno";
$texto1='Nombre: $nombre <br> Apellido Paterno: $apellidoPaterno';

$texto2="Yo estudie en: '$universidad'";
$texto3='Yo estudie en: "$universidad"';

$texto4="Yo estudie en: \"$universidad\"";
$texto5='Yo estudie en: \'$universidad\'';

$cadena1="caracter 64: ". chr(64);
$cadena2="Flor-Gaby-Rosario-Lia-Fiorella";
$arreglo=  explode("-", $cadena2);
        
$htmlentities=  htmlentities("á-é-í-ó-ú");
//implode
$array1=array('Hola','Soy','Ricardo');
$cadena3=  implode(",", $array1);
//md5
$md5="123456";
$cadena4=  md5($md5);
//trim
$trim = "Hol¿a Mundo!!";
$cadena5=  trim($trim,"¿");
//ltrim
$ltrim = "¿Hola Mundo!!";
$cadena6=  ltrim($ltrim,"¿");
//rtrim
$rtrim = "Hola Mundo!!¿";
$cadena7=  rtrim($rtrim,"¿");
//replace 

//str_replace

//strpos

//strupper

//strlower

//substr



?>
<!--
Las variables en php empiezan con $
Las cadenas comienzan con comillas dobles o simples
echo : imprimir los resultados
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $titulo ?></title>
    </head>
    <body>
        <table border="1">
            <tr>
                <th>Variable</th>
                <th>Tipo Variable</th>
                <th>Valor</th>
            </tr>
            <tr>
                <td>Codigo</td>
                <td><?php var_dump($codigoAlumno) ?></td>
                <td><?php echo $codigoAlumno ?></td>

            </tr>
            <tr>
                <td>Nombre</td>
                <td><?php var_dump($nombre) ?></td>
                <td><?php echo$nombre ?></td>
            </tr>
            <tr>
                <td>Apellido Paterno</td>
                <td><?php var_dump($apellidoPaterno) ?></td>
                <td><?php echo$apellidoPaterno ?></td>
            </tr>
            <tr>
                <td>Apellido Materno</td>
                <td><?php var_dump($apellidoMaterno) ?></td>
                <td><?php echo$apellidoMaterno ?></td>
            </tr>
            <tr>
                <td>Universidad</td>
                <td><?php var_dump($universidad) ?></td>
                <td><?php echo$universidad ?></td>
            </tr>
            <tr>
                <td>Edad</td>
                <td><?php var_dump($edad) ?></td>
                <td><?php echo$edad ?></td>
            </tr>
            <tr>
                <td>Sueldo</td>
                <td><?php var_dump($sueldo) ?></td>
                <td><?php echo$sueldo ?></td>
            </tr>
            <tr>
                <td>Inactivo</td>
                <td><?php var_dump($inactivo) ?></td>
                <td><?php echo$inactivo ?></td>
            </tr>
            <tr>
                <td>Egresado</td>
                <td><?php var_dump($egresado) ?></td>
                <td><?php echo$egresado ?></td>
            </tr>
            <tr>
                <td>Nombre Completo</td>
                <td><?php var_dump($nombreCompleto) ?></td>
                <td><?php echo$nombreCompleto ?></td>
            </tr>
            
            <tr>
                <td>Sueldo y Nombre</td>
                <td><?php var_dump($sueldoNombre) ?></td>
                <td><?php echo$sueldoNombre ?></td>
            </tr>
            <tr>
                <td>Edad Nombre</td>
                <td><?php var_dump($edadNombre) ?></td>
                <td><?php echo$edadNombre ?></td>
            </tr>
            <tr>
                <td>Texto</td>
                <td><?php var_dump($texto) ?></td>
                <td><?php echo$texto ?></td>
            </tr>
            <tr>
                <td>Texto 1</td>
                <td><?php var_dump($texto1) ?></td>
                <td><?php echo$texto1 ?></td>
            </tr>
            <tr>
                <td>Texto 2</td>
                <td><?php var_dump($texto2) ?></td>
                <td><?php echo$texto2 ?></td>
            </tr>
            <tr>
                <td>Texto 3</td>
                <td><?php var_dump($texto3) ?></td>
                <td><?php echo$texto3 ?></td>
            </tr>
            <tr>
                <td>Texto 4</td>
                <td><?php var_dump($texto4) ?></td>
                <td><?php echo$texto4 ?></td>
            </tr>
            <tr>
                <td>Texto 5</td>
                <td><?php var_dump($texto5) ?></td>
                <td><?php echo$texto5 ?></td>
            </tr>
            
            <tr>
                <td>Cadena 1</td>
                <td><?php var_dump($cadena1) ?></td>
                <td><?php echo$cadena1 ?></td>
            </tr>
            
            <tr>
                <td>Arreglo</td>
                <td><?php var_dump($arreglo) ?></td>
                <td><?php //echo$cadena1 ?></td>
            </tr>
            
            <tr>
                <td>Entidad</td>
                <td><?php var_dump($htmlentities) ?></td>
                <td><?php echo$htmlentities ?></td>
            </tr>
            
            <tr>
                <td>Implode</td>
                <td><?php var_dump($cadena3) ?></td>
                <td><?php echo$cadena3 ?></td>
            </tr>
            
            <tr>
                <td>md5</td>
                <td><?php var_dump($cadena4) ?></td>
                <td><?php echo$cadena4 ?></td>
            </tr>
            
            <tr>
                <td>Trim</td>
                <td><?php var_dump($cadena5) ?></td>
                <td><?php echo$cadena5 ?></td>
            </tr>
            
             <tr>
                <td>lTrim</td>
                <td><?php var_dump($cadena6) ?></td>
                <td><?php echo$cadena6 ?></td>
            </tr>
            
             <tr>
                <td>rTrim</td>
                <td><?php var_dump($cadena7) ?></td>
                <td><?php echo$cadena7 ?></td>
            </tr>
        </table>
    </body>
</html>





