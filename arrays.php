<?php
    $listado = [
        "el1" => "Leche",
        1 => "Pan",
        14 => "Carne",
        2 =>"Queso",
        3 =>"Bebidas",
        4 => "Carbón"
    ];
    $listado2 = [
        "verduras",
        "frutas",
        "yerba",
        "azucar"
    ];

    /* for ($i=0; $i < sizeof($listado); $i++) { 
        //$listado2[] = $listado[$i];
        array_push($listado2, $listado[$i]);
    } */

    foreach ($listado as $key => $value) {
        array_push($listado2, /* $value */ $listado[$key]);
    }


    print_r($listado2);
    echo sizeof($listado);
    echo $listado2[7];

    echo json_encode($listado2);