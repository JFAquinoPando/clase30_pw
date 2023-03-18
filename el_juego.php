<?php
    include("conexion.php");


    function leerJson(){
        $json = file_get_contents("datos.json");
        $textos = json_decode($json, true);
        return $textos;
    }

    function guardar($nombre){
        global $conexion;
        $sql ="
        CREATE TABLE if not exists jugador (
            id int PRIMARY KEY auto_increment,
            player varchar(64)
        )
        ";

        $conexion->query($sql);

        $sql = "INSERT INTO jugador (player) values ('$nombre')";
        $conexion->query($sql);
        echo "El jugador $nombre se ha guardado!";
    }

    function obtener(){
        global $conexion;
        //$texto = "[PLAYER_NAME] hola, bienvenido de vuelta";
        $jugador = "";
        $sql ="SELECT player from jugador order by id desc limit 1";
        $resultado = $conexion->query($sql);

        $textos = leerJson();

        while($fila = $resultado->fetch_assoc()){
            foreach ($textos as $key => $value) {
                //echo "linea $key: {} <br> ";
                echo "<hr>".str_replace("[PLAYER_NAME]", $fila["player"], $value['text']);
            }
            
        }

    }

    if (isset($_GET["nombre"]) && trim($_GET["nombre"]) != "") {
        $jugador = $_GET["nombre"];
        guardar($jugador);
    }else{
        obtener();
    }


