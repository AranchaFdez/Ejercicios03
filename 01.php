<?php 
function rellenarArray() {
    for ($i=0;$i<20;$i++){
        $aleatorios[$i]=random_int(1,6);
    }
    return $aleatorios;
}
function generarTabla($param) {
    echo "<tr>";
    for ($i=0;$i<count($param);$i++){
        echo "<td>".$param[$i]."</td>";
    }
}
function generaMax ($param){
    return max($param);
}
function generaMin($param){
    return min($param);
}
function valorRepite($param){
    $repite=array_count_values($param);
    $primero = array_key_first($repite);
    return $primero;
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>	
        <style>
           	table,td{border:black solid 1px;
                  border-collapse: collapse;
                  font-size:25;}
        </style>
    </head>
<body >
<h1> Ejercicio03 01.php </h1>
<?php 
$aleto=array();
$aleto=rellenarArray();
echo "<table>";
generarTabla($aleto);
$max=generaMax($aleto);
echo "<td> Max: ".$max."</td>";
$min=generaMin($aleto);
echo "<td> Min: ".$min."</td>";
$repite=valorRepite($aleto);
echo "<td> Repite: ".$repite."</td></tr>";
echo "</table>";
?>
</body>
</html>