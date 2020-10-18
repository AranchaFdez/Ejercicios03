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

function obtenerDatos($paises,$pais) {
    foreach ($paises as $clave=>$valor){
        if($pais==$clave){
            //array_push($datos,$clave); tb se puede añadir con el metodo array_push
            $datos["pais"]=$clave;
            foreach ($valor as $key=>$v) {
                //array_push($datos,$key,$v);
                $datos[$key]=$v;
            }
        }
    }
    return $datos;
}
function obtenerCiudades($ciudades,$pais,&$datos) {
    foreach ($ciudades as $clave=>$valor){
        if($pais==$clave){
            foreach ($valor as $key=>$v) {
                $datos[]=$v;
            }
        }
    }
   return $datos;
}
function generarEnlace(&$datos,$pais) {
    $enlace="https://www.google.es/maps/place/";
    $datos["enlace"]=$enlace.$pais;
    return $datos;
}

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
$aleatorio=array();
$pais=array_rand($paises,1);

$aleatorio=obtenerDatos($paises, $pais);
$aleatorio=obtenerCiudades($ciudades, $pais, $aleatorio);
$aleatorio=generarEnlace($aleatorio, $pais);
print "<pre>";
print_r($aleatorio);
print "</pre>";
foreach ($aleatorio as $clave=>$valor){
    echo'<p>'.$clave .'-->'. $valor;
}
?>
</body>
</html>


