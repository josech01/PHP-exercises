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
        echo "<h1>Sessiones</h1>";
        session_start();
        $idSession=  session_id();
       
       
        
        ?>
        
        <table border="1">
            <thead>
                <tr>
                    <th>Nro</th>
                    <th>Variable de Session</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Id</td>
                    <td><?php echo $idSession; ?></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Usuario</td>
                    <td><?php echo $_SESSION['usuario']; ?></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Nro Visitas por usuario</td>
                    <td><?php echo $_SESSION['visitas']; ?></td>
                </tr>
            </tbody>
        </table>

        
    </body>
</html>
