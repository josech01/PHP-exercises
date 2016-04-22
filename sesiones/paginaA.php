<?php

session_start();
$usuario['garroyo@uni.pe']='123456';
$usuario['josech@uni.pe']='admin';
$usuario['jose@uni.pe']='123456';
$caso=0;
if(isset($_POST['correo'])){
    $correo=$_POST['correo'];
    $clave=$_POST['clave'];
    $recordar=FALSE;
    if(isset($_POST['recordar'])){
        $recordar=true;
        
    }
    if($clave==$usuario[$correo]){
        $idSession= session_id();
        $_SESSION['estadoLogin']=true;
        $_SESSION['usuario']=$correo;
        $_SESSION['clave']=$clave;
        $_SESSION['usuario']=$recordar;
        $caso=1;
    }
    else{
        $caso=2;
    }
}else{
    if(isset($_SESSION['estadoLogin'])){
        $caso=3;
    }else{
        $caso=4;
    }
}
switch ($caso){
    case 1:include 'contenido/contenidoA.php';
        break;
    case 2:include 'contenido/errorLogin.php';
        break;
    case 3:include 'contenido/contenidoA.php';
        break;
    case 4:include 'contenido/sinSession.php';
        break;
    default:
        break;
}
