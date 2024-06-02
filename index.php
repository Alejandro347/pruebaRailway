<?php
$numero1=$_GET['numero1'];
$numero2=$_GET['numero2'];
$resultado=array('resultado'=>$numero1+$numero2);
echo json_encode($resultado);
?>