<?php

/* 
 * Recogeremos la IP de nuestro equipo
 * a través de la variable super global
 * $_SERVER, pasándole como parámetro
 * 'REMOTE_ADDR'.
 */
echo '<p>Dirección IP del equipo: ' . $_SERVER['REMOTE_ADDR'] . '</p>';
