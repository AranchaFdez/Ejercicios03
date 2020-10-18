<?php

require_once 'infopaises.php';

?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>	
        <style>
           	table,td{border:black solid 1px;
                  border-collapse: collapse;
                  font-size:50;}
        </style>
    </head>
<body >
<h1> Ejercicio03 01.php </h1>
<?php 
$maximo=mostrarMaxPoblacion($paises);
echo "El pais con mas poblacion es :<b>".$maximo."</b><br>";
echo "Ciudades de ".$maximo." :<br>";
imprimirCiudades($ciudades, $maximo);

?>
</body>
</html>
