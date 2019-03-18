<?php

// Creamos e inicializamos las variables.
$cadena = "Israel García Cabañeros";
$entero = 1;
$flotante = 1.5;
$booleano = true;

echo '<h1>Función echo.</h1>';
// Imprimimos los valores de las variables con la función echo.
echo 'La variable $cadena de tipo ' . gettype($cadena) . ' tiene el valor: ' . $cadena;
echo 'La variable $entero de tipo ' . gettype($entero) . ' tiene el valor: ' . $entero;
echo 'La variable $flotante de tipo ' . gettype($flotante) . ' tiene el valor: ' . $flotante;
echo 'La variable $booleano de tipo ' . gettype($booleano) . ' tiene el valor: ' . $booleano;

echo '<h1>Función print.</h1>';
// Imprimimos los valores de las variables con la función print.
print 'La variable $cadena de tipo ' . gettype($cadena) . ' tiene el valor: ' . $cadena;
print 'La variable $entero de tipo ' . gettype($entero) . ' tiene el valor: ' . $entero;
print 'La variable $flotante de tipo ' . gettype($flotante) . ' tiene el valor: ' . $flotante;
print 'La variable $booleano de tipo ' . gettype($booleano) . ' tiene el valor: ' . $booleano;

echo '<h1>Función printf.</h1>';
// Imprimimos los valores de las variables con la función printf.
printf ('La variable $cadena de tipo ' . gettype($cadena) . ' tiene el valor: ' . $cadena);
printf ('La variable $entero de tipo ' . gettype($entero) . ' tiene el valor: ' . $entero);
printf ('La variable $flotante de tipo ' . gettype($flotante) . ' tiene el valor: ' . $flotante);
printf ('La variable $booleano de tipo ' . gettype($booleano) . ' tiene el valor: ' . $booleano);

echo '<h1>Función print_r.</h1>';
// Imprimimos los valores de las variables con la función print_r.
print_r ('La variable $cadena de tipo ' . gettype($cadena) . ' tiene el valor: ' . $cadena);
print_r ('La variable $entero de tipo ' . gettype($entero) . ' tiene el valor: ' . $entero);
print_r ('La variable $flotante de tipo ' . gettype($flotante) . ' tiene el valor: ' . $flotante);
print_r ('La variable $booleano de tipo ' . gettype($booleano) . ' tiene el valor: ' . $booleano);

echo '<h1>Función var_dump.</h1>';
// Imprimimos los valores de las variables con la función var_dump.
var_dump ('La variable $cadena de tipo ' . gettype($cadena) . ' tiene el valor: ' . $cadena);
var_dump ('La variable $entero de tipo ' . gettype($entero) . ' tiene el valor: ' . $entero);
var_dump ('La variable $flotante de tipo ' . gettype($flotante) . ' tiene el valor: ' . $flotante);
var_dump ('La variable $booleano de tipo ' . gettype($booleano) . ' tiene el valor: ' . $booleano);

