<?php
// Pedimos al usuario que ingrese el precio del producto y lo almacenamos en la variable $precio.
$precio = (float)readline("Ingresa el precio del producto: ");

// Pedimos al usuario que ingrese el porcentaje de descuento y lo almacenamos en la variable $porcentaje.
$porcentaje = (float)readline("Ingresa un porcentaje de 0 a 100 para aplicar el descuento: ");

// Verificamos si el porcentaje ingresado es mayor a 100.
while ($porcentaje > 100) {
    // Si es mayor a 100, mostramos un mensaje de error y pedimos al usuario que ingrese nuevamente el porcentaje.
    echo "El porcentaje debe ser entre 0 y 100. Por favor, ingrésalo nuevamente: ";
    $porcentaje = (float)readline();
}

// Calculamos el descuento aplicado al precio original.
$descuento = $precio * $porcentaje / 100;

// Calculamos el precio final restando el descuento al precio original.
$precioFinal = $precio - $descuento;

// Verificamos si el descuento aplicado es mayor o igual al 50%.
if ($descuento >= 50) {
    // Si el descuento es mayor o igual al 50%, mostramos un mensaje de "Gran descuento" y el precio final.
    echo "¡Gran descuento! \n";
    // Formateamos el precio final para mostrarlo con dos decimales.
    echo "$" . number_format($precioFinal, 2);
} else {
    // Si el descuento es menor al 50%, mostramos un mensaje de "Descuento aplicado" y el precio final.
    echo "Descuento aplicado \n";
    // Formateamos el precio final para mostrarlo con dos decimales.
    echo "$" . number_format($precioFinal, 2);
}
?>



