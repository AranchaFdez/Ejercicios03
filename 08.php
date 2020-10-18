<?php
$paises = array(
    'Francia' => array("Capital" => "París", "Poblacion" => "50000000"),
    'España' => array("Capital" => "Madrid", "Poblacion" => "42000000"),
    'Italia' => array("Capital" => "Roma", "Poblacion"   => "46000000"),
    'Argentina' => array("Capital" => "Buenos Aires", "Poblacion" => "40000000"),
    'Colombia' => array("Capital" => "Bogotá", "Poblacion"  => "36000000"),
    'Chile' => array("Capital" => "Santiago", "Poblacion"   => "36000000"),
    'Suecia' => array("Capital" => "Estocolmo", "Poblacion" => "25000000"),
);

$ciudades = [
    'Francia' =>    ["París","Burdeos","Niza","Lille","Nantes"],
    'España' =>     ["Madrid", "Barcelona","León","Sevilla", "Valencia", "Málaga"],
    'Italia' =>     ["Roma", "Venecia","Florencia","Pisa", "Génova", "Milán", "Turín", "Nápoles"],
    'Argentina' =>  ["Buenos Aires", "Córdoba","Parana","Rosario"],
    'Colombia' =>   ["Bogotá", "Medellín","Cali","Barranquilla", "Bucaramanga"],
    'Chile' =>      ["Santiago", "Arica","Iquique","Osorno", "Viña del Mar"],
    'Suecia' =>   ["Estocolmo", "Upsala","Gotemburgo","Lund"],
];

function generarTabla($paises,$ciudades) {
   
    foreach ($paises as $pais=>$valor){
        echo "<tr><td>".$pais."</td>";
        echo'<td>'.$valor['Capital'].'</td>';
        echo'<td>'.$valor['Poblacion'].'</td>';
        echo'<td>';
        foreach ($ciudades[$pais] as $ciudad){
               echo $ciudad.",<br>";   
            }
        }
        echo "</td></tr>";
    }


?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>
table,td,th{border:black solid 1px;
border-collapse: collapse;
font-size:25;}
td{
color:blue;}
</style>
</head>
<body >
<h1> Ejercicio03 01.php </h1>
<?php
echo "<table>";
echo  "<tr><th>Pais</th><th>Capital</th><th>Poblacion</th><th>Ciudades</th>";
generarTabla($paises,$ciudades);

?>
</body>
</html>

