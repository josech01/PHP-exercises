<?php
include('gd_10_histogramaClass.php');
$histograma=new histograma();

$alumnos=array('Jose Martinez'=>15,"Luis Carrera"=>18,"Moises Almeyda"=>19);

$histograma->ingresar_datos($alumnos);
$histograma->graficar();
?>