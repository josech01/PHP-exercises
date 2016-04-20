<?php
header("Content-Type: image/png");
$imagen = imagecreate(400,150);
$fondo=imagecolorallocate($imagen,200,240,284);
imagefill($imagen,0,0,$fondo);
imagepng($imagen);
imagedestroy($imagen);
?>