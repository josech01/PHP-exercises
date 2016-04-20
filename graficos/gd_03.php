<?php
Header("Content-type: image/jpeg");
$imagen = imagecreate(200,200);
$ColorFondo=imagecolorallocate ($imagen, 0, 0, 200);
$ColorBlanco=imagecolorallocate ($imagen, 255, 255, 255);
imagefill ($imagen, 0, 0, $ColorFondo);
imagerectangle ($imagen, 10, 10, 190, 190, $ColorBlanco);
imagejpeg($imagen);
imagedestroy($imagen);
?>