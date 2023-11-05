<?php


//esta concatenacion consiste en que si tenemos una variable con un valor y la referenciamos a otra, la nueva variable contendra siempre el valor que tenga la variable principal, aunque esta sea modificada. cosa que no pasa con una asignacion normal, que cuando se asigna un valor que contiene una variable esta ya toma ese valor para siempre, hasta que se le asigne directamente otra:


$text = "hello my friend, How are you ?";
$text1 = $text;
$text = "menssage changed";
// echo $text1;

// ¿ lo notaste?, este no cambia de valor aunque se modifique mas adelante la variable text.

//ejemplo usando la asignacion por referencia

$texto2 = "what happened bro ?";
$textComplet = &$texto2;

$textComplet = "Oooo, shit";
$texto2 = "message changed tro";
$textComplet = "Oooo, shit";
$texto2 = "shit, shit";
// nos damos cuenta que independientemente si se cambia la variable original o la referenciada,esta cambia siempre el valor, no se queda estatica.
echo $textComplet;
// echo $texto2;
//en esta ocacion, cada que se modifique ese texto, se va a cambiar tambien en la varibale textComplet.