<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>
table,td{border:black solid 1px;
border-collapse: collapse;
background:#CEE3F6;
}
</style>
</head>
<body >
<h1> Ejercicio03 09.php </h1>
<table>
<?php
$temperaturas =  [ 6, 10, 12, 14,16 ,20 ,25 , 30, 18, 15, 14, 8];
$meses = ['Enero','Febrero', 'Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
$mestemperatura=array();
$mestemperatura= array_combine($meses,$temperaturas);
foreach ($mestemperatura as $clave=>$valor){
    echo "<tr><td>".$clave.'</td><td style="width:150;">';
    echo '<div style=" width: '.($valor*3).';background: green;"/><span style=" padding-left: '.($valor*3).';" >'.$valor.'ºC<span></td></tr>';
}
?>
</table>
</body></html>