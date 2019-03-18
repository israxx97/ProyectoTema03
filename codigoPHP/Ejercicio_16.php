<?php

/*
 * Declaramos un array asociativo $a_salario y 
 * lo rellenamos con con los días de la semana
 * y sus correspondientes valores. 
 */
$a_salario = [
    'Lunes' => 60,
    'Martes' => 60,
    'Miércoles' => 60,
    'Jueves' => 60,
    'Viernes' => 70,
    'Sábado' => 80,
    'Domingo' => 0
];

/*
 * Recorremos $a_salario con la función array_values().
 */
echo "<h1>Función array_values.</h1>";
print_r(array_values($a_salario));

