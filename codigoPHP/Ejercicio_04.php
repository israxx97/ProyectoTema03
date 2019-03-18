<?php

// Seleccionamos el idioma.
setlocale(LC_TIME, 'pt_PT.UTF-8');

// Establecemos la zona horaria predeterminada a usar.
date_default_timezone_set('Europe/Madrid');

// Imprimimos la fecha y hora de hoy.
/*
 * l -> Día en letra.
 * jS -> Número de día + th.
 * \d -> Escapa una d.
 * \e -> Escapa una e.
 * F -> Mes en letra.
 * Y -> Año.
 * h -> Horas.
 * i -> Minutos.
 * s -> Segundos.
 * A -> AM/PM.
 */
echo '<p>Fecha y hora en Lisboa: ';
echo date('l jS \d\e F Y h:i:s A');
echo '</p>';