<?php
Header("Content-type: image/png");
$imagen = imagecreate(200,200);

$ColorFondo=imagecolorallocate ($imagen, 0, 0, 200);
$ColorBlanco=imagecolorallocate ($imagen, 255, 255, 255);
$ColorAmarillo=imagecolorallocate ($imagen, 255, 255,0);

imagefill ($imagen, 0, 0, $ColorFondo);
imagerectangle ($imagen, 10, 10, 190, 190, $ColorFondo);
imagefilledrectangle ($imagen, 20, 20, 180, 180, $ColorAmarillo);

# x1,y1,x2,y2,x3,y3  en sentido antihorario
$esquinas=array(20,100,100,180,180,100,100,20);
imagefilledpolygon ($imagen, $esquinas, 4, $ColorBlanco);

imagepng($imagen);
imagedestroy($imagen);
?>