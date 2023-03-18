<?php
    include("conexion.php");
    $texto = "[PLAYER_NAME] hola, bienvenido de vuelta";
    $jugador = "";
    $sql ="SELECT player from jugador limit 1";
    $resultado = $conexion->query($sql);
    while($fila = $resultado->fetch_assoc()){
        $jugador = $fila["player"];
    }

    echo str_replace("[PLAYER_NAME]", $jugador, $texto);



