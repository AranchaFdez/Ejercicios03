<?php
function generarPrimeros(){
    $aleatorios=array();
    for ($i=0;$i<5;$i++){
        $num=random_int(1,49);
        $esta=in_array($num, $aleatorios);
        if($esta){
           $num= noRepetir($aleatorios);
        }
        $aleatorios[$i]=$num;
    }
    return $aleatorios;
}
function generarComplementario($aleatorios){
    $num=random_int(1,49);
    $esta=in_array($num, $aleatorios);
    if($esta){
        $num= noRepetir($aleatorios);
    }
    $aleatorios[6]=$num;
    return $aleatorios;
}
function noRepetir($aleatorios) {
    $num=0;
    $esta=true;
     while($esta){
         $num=random_int(1,49);
          $esta=in_array($num, $aleatorios);
        }
    return $num;
}
function generarTabla($bonoloto){
    echo'<tr>';
    foreach ($bonoloto as $clave=>$valor){
        if($valor==end($bonoloto)){
            echo'<td><u>Complementario  '. $valor .'</u></td>';
        }else{
            echo'<td>'. $valor .'</td>';
        }
    }
    echo '</tr>';
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>	
        <style>
           	table,td,th{border:black solid 1px;
                  border-collapse: collapse;
                  font-size:20;
                  color:blue;
                  }
            img{
                width: 3em;
                height:3em;
            }
        </style>
    </head>
<body>
<h1> Ejercicio03 05.php </h1>
<table>
<?php
$bonoloto=array();
$bonoloto=generarPrimeros();
sort($bonoloto);
$bonoloto=generarComplementario($bonoloto);
generarTabla($bonoloto);
?>
</table>
</body>
</html>