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
function volumenCubo($lado) {
    $volumen = pow($lado, 3);

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
function areaCubo($lado) {
    $superficieTotal = pow($lado, 2) * 6;

    return $superficieTotal;
}

/*
 * Imprimimos por pantalla el volumen de un cubo del
 * que hemos pasado como parámetro su lado.
 */
echo '<p>Volumen de un cubo con lado 5cm: ' . volumenCubo(5) . 'cm3.</p>';

/*
 * Imprimimos por pantalla el area total de un cubo del
 * que hemos pasado como parámetro su lado.
 */
echo '<p>Área total de un cubo con lado 5cm: ' . areaCubo(5) . 'cm2.</p>';
