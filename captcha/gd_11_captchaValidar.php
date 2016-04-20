<?php
session_start();

$dato=$_POST['codigo'];

echo "valor escrito por usuario : $dato<br/>";
echo "valor en session : " . $_SESSION['codigo']."<br/>";

if ($dato==$_SESSION['codigo']){
    echo "<br><h2>FELICITACIONES</h2>";
}else{
    echo "<br><h3>ERROR, codigo incorrecto</h3>";
}

?>
<a href="gd_11_captcha.html">Regresar<br/>