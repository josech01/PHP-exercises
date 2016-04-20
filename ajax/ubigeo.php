<?php
$tipo=(!empty($_GET['tipo'])?$_GET['tipo']:'dpto');
$dpto=(!empty($_GET['dpto'])?$_GET['dpto']:0);
$prov=(!empty($_GET['prov'])?$_GET['prov']:0);
$dist=(!empty($_GET['dist'])?$_GET['dist']:0);

#echo $dpto . "<br/>";
#echo $prov . "<br/>";
#echo $dist . "<br/>";

$sql_1="select dpto,nombre from ubigeo where dpto<>'00' and prov='00' and dist='00'";
$sql_2="select prov,nombre from ubigeo where dpto='$dpto' and prov<>'00' and dist='00'";
$sql_3="select dist,nombre from ubigeo where dpto='$dpto' and prov='$prov' and dist<>'00'";

switch($tipo){
    case 'dpto':
        $sql=$sql_1;
        $funcion="jq_provincias();";
        break;
    case 'prov':
        $sql=$sql_2;
        $funcion="jq_distritos();";
        break;
    case 'dist':
        $sql=$sql_3;
        $funcion="";
        break;
}
#echo $sql . "<br/>";
#conectando con base
$base=mysqli_connect('localhost','root','','ubigeo');
$resultado=mysqli_query($base,$sql);
$opciones="";
while($fila=mysqli_fetch_row($resultado)){
    $opciones.="<option value=$fila[0]>$fila[1]</option>";
}
$combo="<select name=\"cbo$tipo\" id=\"cbo$tipo\" onchange=\"$funcion\">$opciones</select>";
echo $combo
?>