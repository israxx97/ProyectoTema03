<?php

/*
 * Recogeremos el path del archivo que
 * se está ejecutando a través de la 
 * variable super global $_SERVER, pasán-
 * dole como parámetro 'PHP_SELF'.
 */
echo '<p>Path del archivo en ejecución: ' . $_SERVER['PHP_SELF'] . '</p>';
