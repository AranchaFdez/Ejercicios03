<?php 
$deportes=["hockey"=>"img/hockey.png" ,
    "futbol"=>"img/futbol.png",
    "padel"=>"img/padel.png",
    "golf"=>"img/golf.jpg",
    "baloncesto"=>"img/baloncesto.png"];
function generarTabla($deportes){
    foreach ($deportes as $clave=>$valor){
        echo'<tr><td>'. $clave .'</td><td><img src="'.$valor.'"/></td><tr>';
    }
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>	
        <style>
           	table,td,th{border:black solid 1px;
                  border-collapse: collapse;
                  font-size:20;}
            img{
                width: 3em;
                height:3em;
            }
        </style>
    </head>
<body >
<h1> Ejercicio03 04.php </h1>
 <table>
<?php
echo '<tr><th> Deporte</th><th>Logo</th></tr>';
generarTabla($deportes);
echo "</table>";
?>
</body>
</html>