<?php

/*
 * Recogemos en la variable $fechaActual la 
 * fecha actual con el formato día-mes-año.
 */
$fechaActual = date('j-m-Y');

/*
 * Pasamos el String de la fecha anterior a
 * la variable $fechaNueva con la función
 * strtotime(String, int($fechaActual())).
 */
$fechaNueva = strtotime('+60 day', strtotime($fechaActual));

/*
 * Damos formato a $fechaNueva con la función
 * date().
 */
$fechaFormateada = date('j-m-Y', $fechaNueva);

/*
 * Le damos formato de dia-mes-año a la nueva
 * fecha con la función date() y la imprimimos
 * por pantalla funto con la fecha actual después
 * de formatearla con format().
 */
echo '<p>La fecha actual es: ' . $fechaActual . '</p>';
echo '<p>La fecha dentro de 60 días es: ' . $fechaFormateada . '</p>';
