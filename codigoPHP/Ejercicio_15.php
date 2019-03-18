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
 * Inicializamos un acumulador a 0 que sumará
 * el total de los salarios.
 */
$acumulador = 0;

/*
 * Recorremos $a_salario con un foreach.
 */
foreach ($a_salario as $key => $value) {
    echo '<p>El ' . $key . ' se cobran ' . $value . '€</p>';
    $acumulador += $value;
}

/*
 * Imprimimos por pantalla el total del acumulador.
 */
echo 'El salario semanal es de ' . $acumulador . '€';
