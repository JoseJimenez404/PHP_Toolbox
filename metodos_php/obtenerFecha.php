<?php

//establecer la zona horaria
date_default_timezone_set("America/Mexico_City");

$fecha_us = date(" d F Y");
$fecha_es = date("d-m-Y");

$hora_12 = date("h:i a");
$hora_24 = date("h:i A");

$fechaCompleta = date("d-m-y h:i A");

echo $fecha_us."<br>";
echo $fecha_es."<br>";
echo $hora_12."<br>";
echo $hora_24."<br>";
echo $fechaCompleta."<br>";