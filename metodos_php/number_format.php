<?php

//nos sirve para formatear numeros
//estructura
// number_format(cantidad, decimales, sep_decimal, sep_millar);

$cantidad  = 12732.77;
// $cantidad2  = 1931.81;

$cantidad = number_format($cantidad,0,"",".");

echo number_format($cantidad);