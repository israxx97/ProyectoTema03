<?php

// Creamos e inicializamos las variables.
$cadena = "Israel García Cabañeros";
$entero = 1;
$flotante = 1.5;
$booleano = true;

echo '<h1>Función echo.</h1>';
// Imprimimos los valores de las variables con la función echo.
echo '<p>La variable $cadena de tipo ' . gettype($cadena) . ' tiene el valor: ' . $cadena . '</p>';
echo '<p>La variable $entero de tipo ' . gettype($entero) . ' tiene el valor: ' . $entero . '</p>';
echo '<p>La variable $flotante de tipo ' . gettype($flotante) . ' tiene el valor: ' . $flotante . '</p>';
echo '<p>La variable $booleano de tipo ' . gettype($booleano) . ' tiene el valor: ' . $booleano . '</p>';

echo '<h1>Función print.</h1>';
// Imprimimos los valores de las variables con la función print.
print '<p>La variable $cadena de tipo ' . gettype($cadena) . ' tiene el valor: ' . $cadena . '</p>';
print '<p>La variable $entero de tipo ' . gettype($entero) . ' tiene el valor: ' . $entero . '</p>';
print '<p>La variable $flotante de tipo ' . gettype($flotante) . ' tiene el valor: ' . $flotante . '</p>';
print '<p>La variable $booleano de tipo ' . gettype($booleano) . ' tiene el valor: ' . $booleano . '</p>';

echo '<h1>Función printf.</h1>';
// Imprimimos los valores de las variables con la función printf.
printf ('<p>La variable $cadena de tipo ' . gettype($cadena) . ' tiene el valor: ' . $cadena . '</p>');
printf ('<p>La variable $entero de tipo ' . gettype($entero) . ' tiene el valor: ' . $entero . '</p>');
printf ('<p>La variable $flotante de tipo ' . gettype($flotante) . ' tiene el valor: ' . $flotante . '</p>');
printf ('<p>La variable $booleano de tipo ' . gettype($booleano) . ' tiene el valor: ' . $booleano . '</p>');

echo '<h1>Función print_r.</h1>';
// Imprimimos los valores de las variables con la función print_r.
print_r ('<p>La variable $cadena de tipo ' . gettype($cadena) . ' tiene el valor: ' . $cadena . '</p>');
print_r ('<p>La variable $entero de tipo ' . gettype($entero) . ' tiene el valor: ' . $entero . '</p>');
print_r ('<p>La variable $flotante de tipo ' . gettype($flotante) . ' tiene el valor: ' . $flotante . '</p>');
print_r ('<p>La variable $booleano de tipo ' . gettype($booleano) . ' tiene el valor: ' . $booleano . '</p>');

echo '<h1>Función var_dump.</h1>';
// Imprimimos los valores de las variables con la función var_dump.
var_dump ('<p>La variable $cadena de tipo ' . gettype($cadena) . ' tiene el valor: ' . $cadena . '</p>');
var_dump ('<p>La variable $entero de tipo ' . gettype($entero) . ' tiene el valor: ' . $entero . '</p>');
var_dump ('<p>La variable $flotante de tipo ' . gettype($flotante) . ' tiene el valor: ' . $flotante . '</p>');
var_dump ('<p>La variable $booleano de tipo ' . gettype($booleano) . ' tiene el valor: ' . $booleano . '</p>');

