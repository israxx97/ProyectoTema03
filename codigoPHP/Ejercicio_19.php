<?php

/**
 * function volumenCubo().
 * 
 * Función volumenCubo() que recibe un entero o un float como parámetro
 * y este lo eleva al cubo (^3) para devolver el volumen de un cubo.
 * 
 * @param float $lado
 * @return $volumen
 */
function volumenCubo($x, $y, $z) {
    $volumen = $x * $y * $z;

    return $volumen;
}

/**
 * function areaCubo().
 * 
 * Función areaCubo() qu3e recibe un entero o un float como parámetro
 * y este lo eleva al cuadrado (^2) y lo multiplica posteriormente por
 * 6 para devolver la superficie de un cubo.
 * 
 * @param float $lado
 * @return $superficieTotal
 */
function areaCubo($x, $y, $z) {
    $superficieTotal = 2 * (($x * $y) + ($x * $z) + ($y + $z));

    return $superficieTotal;
}

/*
 * Imprimimos por pantalla el volumen de un cubo del
 * que hemos pasado como parámetro su lado.
 */
echo '<p>Volumen de un cubo con lado 5cm: ' . volumenCubo(5, 6, 7) . 'cm3.</p>';

/*
 * Imprimimos por pantalla el area total de un cubo del
 * que hemos pasado como parámetro su lado.
 */
echo '<p>Área total de un cubo con lado 5cm: ' . areaCubo(5, 6, 7) . 'cm2.</p>';
