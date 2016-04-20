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
imagepolygon ($imagen, $esquinas, 4, $ColorBlanco);

#imagearc ($imagen, Ox, Oy, Dx, Dy, AI, AF, $ColorFondo);

imagearc ($imagen, 100, 100, 160, 160, 0, 300, $ColorFondo);
imagearc ($imagen, 100, 100, 160, 100, 0, 360, $ColorRojo);

imagepng($imagen);
imagedestroy($imagen);
?>