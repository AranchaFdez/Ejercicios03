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
<h1> Ejercicio03 02.php </h1>

<?php
$periodico=["El pais"=>"https://elpais.com/" ,
    "El mundo"=>"https://www.elmundo.es/",
    "Marca"=>"https://www.marca.com/",
    "La razon"=>"https://www.larazon.es/",
    "ABC"=>"https://www.abc.es/"];
echo "<ul>";
foreach ($periodico as $clave=>$valor){
    echo'<li><a href="'.$valor.'"/>'. $clave .'</li>';
}
?>
</body></html>