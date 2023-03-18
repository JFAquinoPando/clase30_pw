<?php
    include("conexion.php");
    $jugador = $_GET["nombre"];

    $sql ="
        CREATE TABLE if not exists jugador (
            id int PRIMARY KEY auto_increment,
            player varchar(64)
        )
    ";

    $conexion->query($sql);

    $sql = "INSERT INTO jugador (player) values ('$jugador')";
    $conexion->query($sql);