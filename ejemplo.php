<?php 
function nombreFamilia($nombre) {
    echo "$nombre Gómez.<br>";
}
nombreFamilia("Joni");
nombreFamilia("Rosa");
nombreFamilia("Juan");

$json = file_get_contents("datos.json");
//echo $json;

//print_r(json_decode($json, true));

$paraLeer = json_decode($json, true);

foreach ($paraLeer as $key => $value) {
    echo "linea $key: {$value['text']} <br> ";
}


$cars = ["Volvo", "BMW", "Toyota"];
$autos = [
    ["auto" => "Volvo"], 
    ["auto" => "BMW"], 
    ["auto" => "Toyota"]
];




var_dump("revisando el array autos", $autos);

echo "<hr>".json_encode($autos);

/* var_dump("revisando el array cars", $cars);

echo "Me gusta " . $cars[0] . ", " . $cars[1] . " y " .
$cars[2] . ".";
 */