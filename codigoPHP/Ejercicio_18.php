<?php

/*
 * Creamos y rellenamos el array numérico $a_teatro.
 */
$a_teatro = array(
    array(null, null, null, 'Teatrero 1', null, null, null, 'Teatrero 2', null, null, null, null, null, null, null),
    array(null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null),
    array(null, null, null, null, null, null, null, null, null, null, null, null, null, null, null),
    array(null, null, null, null, null, null, null, null, null, null, null, null, null, null, null),
    array(null, null, null, null, null, null, null, null, null, null, null, null, null, null, null),
    array(null, null, null, null, null, null, null, null, null, null, null, null, null, null, null),
    array(null, null, null, null, null, null, null, null, null, null, null, null, null, null, null),
    array(null, null, null, null, null, null, null, null, null, null, null, null, null, null, null),
    array(null, null, null, null, null, null, null, null, null, null, null, null, null, null, null),
    array(null, null, null, null, null, null, null, null, null, null, null, null, null, null, null),
    array(null, null, null, null, null, null, null, null, null, null, null, null, null, null, null),
    array(null, null, null, null, null, null, null, null, null, null, null, null, null, null, null),
    array(null, null, null, null, null, 'Teatrero 4', 'Teatrero 5', null, null, null, null, null, null, null, null),
    array(null, null, null, null, null, null, null, null, null, null, null, null, null, null, null),
    array(null, null, null, null, null, null, null, null, null, null, null, null, null, null, null),
    array(null, null, null, null, null, null, null, null, null, null, null, null, null, null, null),
    array(null, null, null, null, null, null, null, null, null, null, null, null, null, null, null),
    array(null, null, null, null, null, null, null, null, null, null, null, null, null, null, null),
    array(null, null, null, null, 'Teatrero 3', null, null, null, null, null, null, null, null, null, null),
    array(null, null, null, null, null, null, null, null, null, null, null, null, null, null, null)
);

/*
 * Inicializamos dos contadores, el primero
 * para las filas, y el segundo, para los
 * asientos.
 */
static $contador = 0;
static $contador2 = 0;

/*
 * Recorremos las filas del teatro.
 */
foreach ($a_teatro as $key_fila => $fila) {
    $contador++;
    echo '<h3>En la fila ' . $contador . ' se sientan: </h3>';
    /*
     * Recorremos los asientos de la fila que estamos recorriendo.
     */
    while (list($key, $value) = each($fila)) {
        $contador2++;
        if ($value != null) {
            echo '<p>' . $value . ' en el asiento ' . $contador2 . '.</p>';
        }
    }
    /*
     * Devolvemos el valor 0 al contador de asientos
     * cada vez que sale del segundo bucle para
     * contar de nuevo los asientos de la siguiente 
     * fila desde 0.
     */
    $contador2 = 0;
}
