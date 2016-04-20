<?php
$imagen=imagecreate(200,200);

#Algunos Colores
$ColorBlanco=imagecolorallocate ($imagen, 255, 255, 255);
$ColorVerde=imagecolorallocate ($imagen, 0, 255,0);
$ColorAmarillo=imagecolorallocate ($imagen, 255, 255,0);
$ColorRojo=imagecolorallocate ($imagen, 255, 0,0);
$ColorNegro=imagecolorallocate($imagen,0,0,0);

#definiendo color transparente en reemplazo
# del color negro (ausencia de color)
$transparente=imagecolortransparent($imagen,$ColorNegro);

#rellenamos la imagen con transparente
#imagefill($imagen,0,0,$ColorRojo);
imagefill($imagen,0,0,$transparente);

imagerectangle ($imagen, 10, 10, 190, 190, $ColorVerde);
imagefilledrectangle ($imagen, 20, 20, 180, 180, $ColorAmarillo);

Header("Content-type: image/png");
imagepng($imagen);
imagedestroy($imagen);
?>