<?php
Header("Content-type: image/png");
$imagen = imagecreate(200,200);
$ColorFondo=imagecolorallocate ($imagen, 0, 0, 200);
$ColorBlanco=imagecolorallocate ($imagen, 255, 255, 255);
$ColorAmarillo=imagecolorallocate ($imagen, 255, 255,0);
imagefill ($imagen, 0, 0, $ColorFondo);
imagerectangle ($imagen, 10, 10, 190, 190, $ColorBlanco);
imagefilledrectangle ($imagen, 20, 20, 180, 180, $ColorAmarillo);
imagepng($imagen);
imagedestroy($imagen);
?>