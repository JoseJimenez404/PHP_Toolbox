<?php

/* 
--------------------------------------------------
publica : desde cualquier clase
protected : la misma clase y las clases heredadas, no se puede acceder a ella mediante instancias.
private : a la misma clase , no se puede acceder a ella mendiante instancias. 
--------------------------------------------------
*/


require_once 'saiyayin.php';
require_once 'superSaiyajin.php';

//cuando usamos el nameParameters, podemos introducir en cualquier orden siempre y cuando se ponga el nombre del parametro al que se le asignara el valor.
$goku = new Saiyajin(nombre:"Goku",nivel_pelea:1000);
echo $goku->NivelDePelea();
//-------------------------------------
echo $goku->Saludar("Hola sabandija, yo soy");
$vegueta = new Saiyajin("vegueta",990);
echo $vegueta->NivelDePelea();
echo $vegueta->Saludar();
//--------------------------------------
$gohan = new SuperSaiyajin("Gohan",1700);
echo $gohan->Saludar();
echo $gohan->NivelDePelea();
echo $gohan->Transformacion();
echo $gohan->cabello;
