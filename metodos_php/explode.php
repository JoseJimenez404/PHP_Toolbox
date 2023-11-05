<?php

//convertir de string a arreglo


$fecha_1 = "2021/11/29";
$fecha_2 = "2021-11-30";
$numeros = "Uno Dos Tres";

//cada que encuentre el /, lo dividira
$array_fecha=explode("/",$fecha_1);

//se le puede agregar un limitador
//le estamos indicando que se divida en 3
$array_fecha=explode("/",$fecha_1,3);

//si le agregamos en negativo -1, tomara todos los valores menos ese

echo $array_fecha[1];