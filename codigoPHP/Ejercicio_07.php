<?php

/*
 * Imprimiremos el nombre del fichero que se 
 * está ejecutando de la siguiente forma:
 *    + Variable super global $_SERVER, a 
 *      esta variable le pasamos como pará-
 *      metro 'PHP_SELF'.
 *    + Función explode(), que divide un String
 *      en varios pasándole como parámetros,
 *      el separador y el String que queremos 
 *      separar, en este caso el contenido de
 *      $_SERVER.
 *    + Función array_pop(), que coge el último
 *      elemento del array, en este caso del
 *      array de la función explode(), este
 *      elemento será el nombre del fichero que 
 *      estamos ejecutando.
 */
echo '<p>Nombre del fichero en ejecución: ' . array_pop(explode('/', $_SERVER['PHP_SELF'])) . '</p>';
