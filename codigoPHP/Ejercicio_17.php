<?php

/*
 * Creamos e inicializamos el array $a_teatro a null.
 */
for ($numFila = 1; $numFila < 20; $numFila++) {
    for ($numAsiento = 1; $numAsiento < 15; $numAsiento++) {
        $a_teatro[$numFila][$numAsiento] = null;
    }
}

/*
 * Rellenamos el array numérico $a_teatro.
 */
$a_teatro[1][4] = 'Teatrero 1';
$a_teatro[1][8] = 'Teatrero 2';
$a_teatro[19][5] = 'Teatrero 3';
$a_teatro[13][6] = 'Teatrero 4';
$a_teatro[13][7] = 'Teatrero 5';

echo '<h3>Asientos ocupados.</h3>';
/*
 * Recorremos las filas del array $a_teatro.
 */
for ($numFila = 1; $numFila < 20; $numFila++) {
    /*
     * Recorremos los asientos de cada fila. 
     */
    for ($numAsiento = 1; $numAsiento < 15; $numAsiento++) {
        /*
         * Comprobamos si la posición de la fila y el asiento
         * está definida y no es null con la función isset().
         */
        if (isset($a_teatro[$numFila][$numAsiento])) {
            /*
             * Si se cumple la condición del isset se imprime por
             * pantalla el nombre de la persona sentada en dicha
             * fila y asiento.
             */
            echo '<p>' . $a_teatro[$numFila][$numAsiento] . ' se ha sentado en la fila ' . $numFila . ', asiento ' . $numAsiento . '.</p>';
        }
    }
}

echo '<h3>Asientos libres.</h3>';

for ($numFila = 1; $numFila <= 20; $numFila++) {
    echo '<p>En la fila <b>' . $numFila . '</b> están libres';
    for ($numAsiento = 1; $numAsiento <= 15; $numAsiento++) {
        if (!isset($a_teatro[$numFila][$numAsiento])) {
            echo ' - ' . $numAsiento;
        }
    }
    echo '</p>';
}