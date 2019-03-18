<?php

// Creamos e inicializamos la variable heredoc.
$heredoc = <<<EOF
        Esto es el contenido
        de una variable heredoc
        en PHP.
EOF;

// Imprimimos el valor de la variable $heredoc.
echo "<p>" . $heredoc . "</p>";

// Con ' vemos que imprime el nombre de la variable y no su valor.
echo '<p>La variable $heredoc no muestra su valor al <br> imprimirse por pantalla con comillas simples <br> ya que estas muestran texto plano.</p>';
