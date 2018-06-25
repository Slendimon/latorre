<?php
require 'conexion.php';
    $tiempo= "02/05/2018 6:51 PM";
    $date=date("d/m/Y h:i A", strtotime($tiempo));
    $hora=date("H:i", strtotime($tiempo));

    echo "<br /br>$date";
    echo "<br /br>$hora";
    echo gettype($date);
    /*
    $sql = "INSERT INTO tiempo(id, tim, hora) VALUES(NULL, STR_TO_DATE('$date', '%d/%m/%Y'), STR_TO_DATE('$hora', '%h:%i%p'))";
	$mysqli->query($sql);*/
?>