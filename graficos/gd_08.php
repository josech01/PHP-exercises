<?php
//configurando
$imagen=imagecreate(200,250);
$ColorBlanco=imageColorAllocate($imagen,255,255,255);
$ColorAzul=imageColorAllocate($imagen,0,0,52);

//escribiendo
imagefill($imagen,0,0,$ColorAzul); //fondo azul
imageline($imagen,0,0,200,250,$ColorBlanco); //linea blanca
imagestring($imagen,4,50,180,'PHP 2016',$ColorBlanco); //texto blanco
imagettftext($imagen,14,-20,20,100,$ColorBlanco,"BubbleGums.ttf","Developer");

//mostrando imagen
header('Content-type: image/png');
imagepng($imagen);
imagedestroy($imagen);
?>