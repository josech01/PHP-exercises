<?php
class codigo{
    public $codigo;
    function generar(){
    session_start();
	$patron=session_id();
	#rand() lento  |  mt_rand() rapido
	$a=substr($patron,mt_rand(1,strlen($patron)-1),1);
	$b=substr($patron,mt_rand(1,strlen($patron)-1),1);
	$c=substr($patron,mt_rand(1,strlen($patron)-1),1);
	$d=substr($patron,mt_rand(1,strlen($patron)-1),1);
	$this->codigo="$a$b$c$d";
    }

    function graficar(){
        $figura=imagecreate(80,35);
	$ColorFondo=imagecolorallocate($figura,0,0,255);
	$ColorBlanco=imagecolorallocate($figura,255,255,255);
	imagefill($figura,0,0,$ColorFondo);
		
	imagestring($figura,5,10,10,$this->codigo,$ColorBlanco); //texto blanco
	header("content-type: image/png");
	imagepng($figura);
	imagedestroy($figura);
	$_SESSION['codigo']=$this->codigo;
	}
}
?>