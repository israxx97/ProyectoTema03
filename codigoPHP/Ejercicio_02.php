<?php

// Creamos e inicializamos la variable heredoc.
$heredoc = <<<EOF
        Esto es el contenido
        de una variable heredoc
        en PHP.
EOF;

// Imprimimos el valor de la variable $heredoc.
echo "$heredoc";

// Con ' vemos que imprime el nombre de la variable y no su valor.
echo '$heredoc';