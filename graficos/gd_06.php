<?php
Header("Content-type: image/png");
$imagen = imagecreate(200,200);

$ColorFondo=imagecolorallocate ($imagen, 0, 0, 200);
$ColorBlanco=imagecolorallocate ($imagen, 255, 255, 255);
$ColorAmarillo=imagecolorallocate ($imagen, 255, 255,0);
$ColorRojo=imagecolorallocate($imagen,255,0,0);

imagefill ($imagen, 0, 0, $ColorFondo);
imagerectangle ($imagen, 10, 10, 190, 190, $ColorBlanco);
imagefilledrectangle ($imagen, 20, 20, 180, 180, $ColorAmarillo);

$esquinas=array(20,100,100,180,180,100,100,20);
imagepolygon ($imagen, $esquinas, 4, $ColorRojo);

imagepng($imagen);
imagedestroy($imagen);
?>