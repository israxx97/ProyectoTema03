<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 27 - Israel García Cabañeros</title>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $(function () {
                var availableTags = [
                    'Java',
                    'PHP',
                    'JavaScript',
                    'HTML',
                    'CSS',
                    'Python',
                    'JSP',
                    'Ruby',
                    'Perl'
                ];
                $('.lenguajeProgramacion').autocomplete({
                    source: availableTags
                });
            });
        </script>
    </head>
    <body>
        <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        include_once '../core/validacionFormularios.php';

        $entradaOk = true;

        $a_errores[][] = '';
        $a_respuesta[][] = '';

        $a_genero = [
            'Masculino',
            'Femenino'
        ];

        $contadorPersona = 0;
        $numeroPregunta = 0;

        while ($contadorPersona < 6) {
            $a_errores[$numeroPregunta]['edad'] = null;
            $a_respuesta[$numeroPregunta]['edad'] = null;

            $a_errores[$numeroPregunta]['lenguajeProgramacion'] = null;
            $a_respuesta[$numeroPregunta]['lenguajeProgramacion'] = null;

            $a_errores[$numeroPregunta]['genero'] = null;
            $a_respuesta[$numeroPregunta]['genero'] = null;

            $a_errores[$numeroPregunta]['correoElectronico'] = null;
            $a_respuesta[$numeroPregunta]['correoElectronico'] = null;

            $a_errores[$numeroPregunta]['codigoPostal'] = null;
            $a_respuesta[$numeroPregunta]['codigoPostal'] = null;

            $contadorPersona++;
            $numeroPregunta++;

            /* echo '$contadorPersona -> ' . $contadorPersona . '<br>';
              echo '$numeroPregunta -> ' . $numeroPregunta . '<br>'; */
        }

        $numero = $contadorPersona;

        switch (true) {
            case (isset($_POST['enviar'])):
                for ($contadorPersona = 1; $contadorPersona < $numero; $contadorPersona++) {
                    $a_errores[$contadorPersona]['edad'] = validacionFormularios::comprobarEntero($_POST['edad' . $contadorPersona], 100, 18, 1);
                    $a_errores[$contadorPersona]['lenguajeProgramacion'] = validacionFormularios::comprobarAlfabetico($_POST['lenguajeProgramacion' . $contadorPersona], 20, 1, 0);
                    $a_errores[$contadorPersona]['genero'] = validacionFormularios::validarElementoEnLista($_POST['genero' . $contadorPersona], $a_genero, 0);
                    $a_errores[$contadorPersona]['correoElectronico'] = validacionFormularios::validarEmail($_POST['correoElectronico' . $contadorPersona], 100, 10, 1);
                    $a_errores[$contadorPersona]['codigoPostal'] = validacionFormularios::validarCp($_POST['codigoPostal' . $contadorPersona], 1);
                }

                foreach ($a_errores as $contadorPersona => $a_encuestado) {
                    foreach ($a_encuestado as $numeroPregunta => $nombre) {
                        if ($a_errores[$contadorPersona][$numeroPregunta] != null) {
                            $entradaOk = false;
                            $_POST[$numeroPregunta . $contadorPersona] = '';
                        }
                    }
                }
                break;

            default:
                $entradaOk = false;
                break;
        }

        switch (true) {
            case ($entradaOk):
                for ($contadorPersona = 1; $contadorPersona < $numero; $contadorPersona++) {
                    $a_respuesta[$contadorPersona]['edad'] = $_POST['edad' . $contadorPersona];
                    $a_respuesta[$contadorPersona]['lenguajeProgramacion'] = $_POST['lenguajeProgramacion' . $contadorPersona];
                    $a_respuesta[$contadorPersona]['genero'] = $_POST['genero' . $contadorPersona];
                    $a_respuesta[$contadorPersona]['correoElectronico'] = $_POST['correoElectronico' . $contadorPersona];
                    $a_respuesta[$contadorPersona]['codigoPostal'] = $_POST['codigoPostal' . $contadorPersona];
                }
                ?>
                <h2>Edades introducidas.</h2>
                <ul class="lista">
                    <?php for ($contadorPersona = 1; $contadorPersona < $numero; $contadorPersona++) { ?>
                        <li><?php echo $a_respuesta[$contadorPersona]['edad']; ?></li>
                    <?php } ?>
                </ul>

                <h2>Lenguajes de programación introducidos.</h2>
                <ul class="lista">
                    <?php for ($contadorPersona = 1; $contadorPersona < $numero; $contadorPersona++) { ?>
                        <li><?php echo $a_respuesta[$contadorPersona]['lenguajeProgramacion']; ?></li>
                    <?php } ?>
                </ul>

                <h2>Géneros introducidos.</h2>
                <ul class="lista">
                    <?php for ($contadorPersona = 1; $contadorPersona < $numero; $contadorPersona++) { ?>
                        <li><?php echo $a_respuesta[$contadorPersona]['genero']; ?></li>
                    <?php } ?>
                </ul>

                <h2>Correos electrónicos introducidos.</h2>
                <ul class="lista">
                    <?php for ($contadorPersona = 1; $contadorPersona < $numero; $contadorPersona++) { ?>
                        <li><?php echo $a_respuesta[$contadorPersona]['correoElectronico']; ?></li>
                    <?php } ?>
                </ul>

                <h2>Códigos postales introducidos.</h2>
                <ul class="lista">
                    <?php for ($contadorPersona = 1; $contadorPersona < $numero; $contadorPersona++) { ?>
                        <li><?php echo $a_respuesta[$contadorPersona]['codigoPostal']; ?></li>
                    <?php } ?>
                </ul>
                <?php
                break;

            default:
                ?>
                <h2>Formulario<span style="color: red; font-size: 15px;">&nbsp;Campo Obligatorio (*)</span></h2>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

                    <?php for ($contadorPersona = 1; $contadorPersona < $numero; $contadorPersona++) { ?>
                        <span for="edad">Edad de la <?php echo $contadorPersona; ?>ª persona</span>
                        <input type="text" name="edad<?php echo $contadorPersona; ?>" value="<?php
                        if (isset($_REQUEST['edad' . $contadorPersona]) && is_null($a_errores[$contadorPersona]['edad'])) {
                            echo $_REQUEST['edad' . $contadorPersona];
                        }
                        ?>" placeholder="Rango de 18 a 100"/><font color="red">&nbsp;*</font>
                        <font color="red"><?php echo $a_errores[$contadorPersona]['edad']; ?></font>
                        <br>
                    <?php } ?>

                    <?php for ($contadorPersona = 1; $contadorPersona < $numero; $contadorPersona++) { ?>
                        <span for="lenguajeProgramacion">Lenguaje de programación de la <?php echo $contadorPersona ?>ª persona</span>
                        <input type="text" class="lenguajeProgramacion" name="lenguajeProgramacion<?php echo $contadorPersona; ?>" value="<?php
                               if (isset($_REQUEST['lenguajeProgramacion' . $contadorPersona]) && is_null($a_errores[$contadorPersona]['lenguajeProgramacion'])) {
                                   echo $_REQUEST['lenguajeProgramacion' . $contadorPersona];
                               }
                               ?>" placeholder="PHP"/>
                        <font color="red"><?php echo $a_errores[$contadorPersona]['lenguajeProgramacion']; ?></font>
                        <br>
                    <?php } ?>

                    <?php for ($contadorPersona = 1; $contadorPersona < $numero; $contadorPersona++) { ?>
                        <span for="genero"><font color="red">*&nbsp;</font>Género de la <?php echo $contadorPersona ?>ª persona</span>
                        <input type="radio" name="genero<?php echo $contadorPersona; ?>" value="Masculino" 
                               <?php echo (isset($_REQUEST['genero' . $contadorPersona]) && $_REQUEST['genero' . $contadorPersona] == 'Masculino' ? 'checked' : ''); ?> checked>Masculino
                        <input type="radio" name="genero<?php echo $contadorPersona; ?>" value="Femenino" 
                               <?php echo (isset($_REQUEST['genero' . $contadorPersona]) && $_REQUEST['genero' . $contadorPersona] == 'Femenino' ? 'checked' : ''); ?>>Femenino
                        <font color="red"><?php echo $a_errores[$contadorPersona]['genero']; ?></font>
                        <br>
                    <?php } ?>

                    <?php for ($contadorPersona = 1; $contadorPersona < $numero; $contadorPersona++) { ?>
                        <span for="correoElectronico">Correo electrónico de la <?php echo $contadorPersona ?>ª persona</span>
                        <input type="email" name="correoElectronico<?php echo $contadorPersona; ?>" value="<?php
                        if (isset($_REQUEST['correoElectronico' . $contadorPersona]) && is_null($a_errores[$contadorPersona]['correoElectronico'])) {
                            echo $_REQUEST['correoElectronico' . $contadorPersona];
                        }
                        ?>" placeholder="PHP"/><font color="red">&nbsp;*</font>
                        <font color="red"><?php echo $a_errores[$contadorPersona]['correoElectronico']; ?></font>
                        <br>
                    <?php } ?>

                    <?php for ($contadorPersona = 1; $contadorPersona < $numero; $contadorPersona++) { ?>
                        <span for="codigoPostal">Código postal de la <?php echo $contadorPersona ?>ª persona</span>
                        <input type="text" name="codigoPostal<?php echo $contadorPersona; ?>" value="<?php
                        if (isset($_REQUEST['codigoPostal' . $contadorPersona]) && is_null($a_errores[$contadorPersona]['codigoPostal'])) {
                            echo $_REQUEST['codigoPostal' . $contadorPersona];
                        }
                        ?>" placeholder="PHP"/><font color="red">&nbsp;*</font>
                        <font color="red"><?php echo $a_errores[$contadorPersona]['codigoPostal']; ?></font>
                        <br>
                    <?php } ?>
                    <br>
                    <input type="submit" name="enviar" value="Enviar">
                </form>
                <?php
                break;
        }
        ?>
    </body>
</html>