<?php
Header("Content-Type: image/jpeg");
#imagecreate(ancho,alto);
$imagen = imagecreate(400,150);
imagejpeg($imagen);
imagedestroy($imagen);
?>