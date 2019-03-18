<?php

// Inicializamos la variable $fecha como DateTime.
$fecha = new DateTime();

/* 
 * Con la función time() recogemos la fecha y hora 
 * actuales, la pasamos a microsegundos con la 
 * función microtime() y fijamos la fecha y hora
 * basandose en esos microsegundos con setTimestamp().
 */
$fecha->setTimestamp(microtime(time()));

// Obtenemos los microsegundos con getTimestamp().
$fecha->getTimestamp();

/* 
 * Formateamos los microsegundos a una fecha con 
 * format() y lo imprimimos por pantalla.
 */
echo '<p>Fecha y hora actual con Timestamp: ';
echo $fecha->format('Y-m-d H:i:s');
echo '</p>';