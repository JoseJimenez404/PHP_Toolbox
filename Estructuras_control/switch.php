<?php
$numeroDia = 3;

switch ($numeroDia) {
    case 1:
        echo "Hoy es Lunes.";
        break;

    case 2:
        echo "Hoy es Martes.";
        break;

    case 3:
        echo "Hoy es Miércoles.";
        break;

    case 4:
        echo "Hoy es Jueves.";
        break;

    case 5:
        echo "Hoy es Viernes.";
        break;

    case 6:
        echo "Hoy es Sábado.";
        break;

    case 7:
        echo "Hoy es Domingo.";
        break;

    default:
        echo "Número inválido. Debe ser un valor entre 1 y 7.";
        break;
}
