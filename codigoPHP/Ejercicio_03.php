<?php

// Seleccionar el idioma.
setlocale(LC_TIME, 'es_ES.UTF-8');

// Establecer la zona horaria predeterminada a usar.
date_default_timezone_set('Europe/Madrid');

// Imprimir la fecha y hora de hoy.
echo date('l jS \de F Y h:i:s A');