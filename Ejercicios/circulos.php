<?php
const PI = 3.1416;

//perimetro = 2 * PI * R
//Area = PI* R al cuadrado
$radio = readline("de que radio es el circulo :");
echo "El perimetro del circulo es \n";
echo 2 * PI * $radio;
echo "El Area del circulo es \n";
//con pow podemos elevar al cuadrado, al cubo etc, solo le indicamos el numero a elevar
echo PI * pow($radio,2);
