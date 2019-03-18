<?php

/*
 * Esta función usa la función de php 
 * shell_exec(), a la que se le pasa
 * como parámetro un comando de shell,
 * el cual ejecuta y devuelve su res-
 * puesta como una cadena String.
 * 
 * En este caso le pasamos 'whoami',
 * que nos devuelve el nombre del 
 * usuario logueado en Windows en 
 * este momento.
 */
function saludo() {
    $usuario = shell_exec('whoami');
    
    return $usuario;
}
