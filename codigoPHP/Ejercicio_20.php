<?php

highlight_file('Ejercicio_20.php');

/**
 * class Ejercicio_20
 * 
 * Clase con funciones para calcular datos de un cubo.
 */
class Ejercicio_20 {

    /**
     * function volumenCubo().
     * 
     * Función volumenCubo() que recibe un entero o un float como parámetro
     * y este lo eleva al cubo (^3) para devolver el volumen de un cubo.
     * 
     * @param float $lado
     * @return $volumen
     */
    public static function volumenCubo($lado) {
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
    public static function areaCubo($lado) {
        $superficieTotal = pow($lado, 2) * 6;

        return $superficieTotal;
    }

}
