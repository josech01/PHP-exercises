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
        //var_dump($_GET);
       $correo=$_REQUEST['correo'];
       $clave=$_REQUEST['clave'];
        ?>
        <table>
            <tr>
                <th>Campo</th>
                <th>Valor</th>
            </tr>
            <tr>
                <th>Correo</th>
                <th><?php echo $correo;?></th>
            </tr>
            <tr>
                <th>Valor</th>
                <th><?php echo $clave;?></th>
            </tr>
        </table>
    </body>
</html>
