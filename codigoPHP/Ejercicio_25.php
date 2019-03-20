<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 25 - Israel García Cabañeros</title>
    </head>
    <body>
        <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        require_once '../core/validacionFormularios.php';

        $a_errores = [
            'alfabeticoobligatorio' => null,
            'alfabeticonoobligatorio' => null,
            'alfanumericoobligatorio' => null,
            'alfanumericonoobligatorio' => null,
            'enteroobligatorio' => null,
            'enteronoobligatorio' => null,
            'floatobligatorio' => null,
            'floatnoobligatorio' => null,
            'passobligatorio' => null,
            'passnoobligatorio' => null,
            'emailobligatorio' => null,
            'emailnoobligatorio' => null,
            'telefonoobligatorio' => null,
            'telefononoobligatorio' => null,
            'dniobligatorio' => null,
            'dninoobligatorio' => null,
            'codigopostalobligatorio' => null,
            'codigopostalnoobligatorio' => null,
            'urlobligatorio' => null,
            'urlnoobligatorio' => null,
            'fechaobligatorio' => null,
            'fechanoobligatorio' => null,
            'radiobutton' => null,
            'select' => null
        ];

        $a_radiobutton = [
            'opcion1',
            'opcion2'
        ];

        $a_select = [
            'opcion1',
            'opcion2',
            'opcion3',
            'opcion4'
        ];

        $entradaOk = true;

        switch (true) {
            case (isset($_POST['enviar'])):
                $a_errores['alfabeticoobligatorio'] = validacionFormularios::comprobarAlfabetico($_POST['alfabeticoobligatorio'], 20, 5, 1);
                $a_errores['alfabeticonoobligatorio'] = validacionFormularios::comprobarAlfabetico($_POST['alfabeticonoobligatorio'], 20, 5, 0);

                $a_errores['alfanumericoobligatorio'] = validacionFormularios::comprobarAlfaNumerico($_POST['alfanumericoobligatorio'], 20, 5, 1);
                $a_errores['alfanumericonoobligatorio'] = validacionFormularios::comprobarAlfaNumerico($_POST['alfanumericonoobligatorio'], 20, 5, 0);

                $a_errores['enteroobligatorio'] = validacionFormularios::comprobarEntero($_POST['enteroobligatorio'], 100, 1, 1);
                $a_errores['enteronoobligatorio'] = validacionFormularios::comprobarEntero($_POST['enteronoobligatorio'], 100, 1, 0);

                $a_errores['floatobligatorio'] = validacionFormularios::comprobarFloat($_POST['floatobligatorio'], 100, 1, 1);
                $a_errores['floatnoobligatorio'] = validacionFormularios::comprobarFloat($_POST['floatnoobligatorio'], 100, 1, 0);

                $a_errores['passobligatorio'] = validacionFormularios::validarPassword($_POST['passobligatorio'], 1, 5);
                $a_errores['passnoobligatorio'] = validacionFormularios::validarPassword($_POST['passnoobligatorio'], 0, 5);

                $a_errores['emailobligatorio'] = validacionFormularios::validarEmail($_POST['emailobligatorio'], 50, 6, 1);
                $a_errores['emailnoobligatorio'] = validacionFormularios::validarEmail($_POST['emailnoobligatorio'], 50, 6, 0);

                $a_errores['telefonoobligatorio'] = validacionFormularios::validaTelefono($_POST['telefonoobligatorio'], 1);
                $a_errores['telefononoobligatorio'] = validacionFormularios::validaTelefono($_POST['telefononoobligatorio'], 0);

                $a_errores['dniobligatorio'] = validacionFormularios::validarDni($_POST['dniobligatorio'], 1);
                $a_errores['dninoobligatorio'] = validacionFormularios::validarDni($_POST['dninoobligatorio'], 0);

                $a_errores['codigopostalobligatorio'] = validacionFormularios::validarCp($_POST['codigopostalobligatorio'], 1);
                $a_errores['codigopostalnoobligatorio'] = validacionFormularios::validarCp($_POST['codigopostalnoobligatorio'], 0);

                $a_errores['urlobligatorio'] = validacionFormularios::validarURL($_POST['urlobligatorio'], 1);
                $a_errores['urlnoobligatorio'] = validacionFormularios::validarURL($_POST['urlnoobligatorio'], 0);

                $a_errores['fechaobligatorio'] = validacionFormularios::validarFecha($_POST['fechaobligatorio'], 1);
                $a_errores['fechanoobligatorio'] = validacionFormularios::validarFecha($_POST['fechanoobligatorio'], 0);

                $a_errores['radiobutton'] = validacionFormularios::validarElementoEnLista($_POST['radiobutton'], $a_radiobutton, 1);

                $a_errores['select'] = validacionFormularios::validarElementoEnLista($_POST['select'], $a_select, 1);

                foreach ($a_errores as $error) {
                    if ($error != null) {
                        $entradaOk = false;
                    }
                }

                break;

            default:
                $entradaOk = false;

                break;
        }

        switch (true) {
            case ($entradaOk):
                $a_respuesta = [
                    'alfabeticoobligatorio' => $_REQUEST['alfabeticoobligatorio'],
                    'alfabeticonoobligatorio' => $_REQUEST['alfabeticonoobligatorio'],
                    'alfanumericoobligatorio' => $_REQUEST['alfanumericoobligatorio'],
                    'alfanumericonoobligatorio' => $_REQUEST['alfanumericonoobligatorio'],
                    'enteroobligatorio' => $_REQUEST['enteroobligatorio'],
                    'enteronoobligatorio' => $_REQUEST['enteronoobligatorio'],
                    'floatobligatorio' => $_REQUEST['floatobligatorio'],
                    'floatnoobligatorio' => $_REQUEST['floatnoobligatorio'],
                    'passobligatorio' => $_REQUEST['passobligatorio'],
                    'passnoobligatorio' => $_REQUEST['passnoobligatorio'],
                    'emailobligatorio' => $_REQUEST['emailobligatorio'],
                    'emailnoobligatorio' => $_REQUEST['emailnoobligatorio'],
                    'telefonoobligatorio' => $_REQUEST['telefonoobligatorio'],
                    'telefononoobligatorio' => $_REQUEST['telefononoobligatorio'],
                    'dniobligatorio' => $_REQUEST['dniobligatorio'],
                    'dninoobligatorio' => $_REQUEST['dninoobligatorio'],
                    'codigopostalobligatorio' => $_REQUEST['codigopostalobligatorio'],
                    'codigopostalnoobligatorio' => $_REQUEST['codigopostalnoobligatorio'],
                    'urlobligatorio' => $_REQUEST['urlobligatorio'],
                    'urlnoobligatorio' => $_REQUEST['urlnoobligatorio'],
                    'fechaobligatorio' => $_REQUEST['fechaobligatorio'],
                    'fechanoobligatorio' => $_REQUEST['fechanoobligatorio'],
                    'radiobutton' => $_REQUEST['radiobutton'],
                    'select' => $_REQUEST['select']
                ];

                echo '<p>Alfabético obligatorio: ' . $a_respuesta['alfabeticoobligatorio'] . '.</p>';
                echo '<p>Alfabético no obligatorio: ' . $a_respuesta['alfabeticonoobligatorio'] . '.</p>';

                echo '<p>Alfanumérico obligatorio: ' . $a_respuesta['alfanumericoobligatorio'] . '.</p>';
                echo '<p>Alfanumérico no obligatorio: ' . $a_respuesta['alfanumericonoobligatorio'] . '.</p>';

                echo '<p>Entero obligatorio: ' . $a_respuesta['enteroobligatorio'] . '.</p>';
                echo '<p>Entero no obligatorio: ' . $a_respuesta['enteronoobligatorio'] . '.</p>';

                echo '<p>Float obligatorio: ' . $a_respuesta['floatobligatorio'] . '.</p>';
                echo '<p>Float no obligatorio: ' . $a_respuesta['floatnoobligatorio'] . '.</p>';

                echo '<p>Contraseña obligatoria: ' . $a_respuesta['passobligatorio'] . '.</p>';
                echo '<p>Contraseña no obligatoria: ' . $a_respuesta['passnoobligatorio'] . '.</p>';

                echo '<p>Correo electrónico obligatorio: ' . $a_respuesta['emailobligatorio'] . '.</p>';
                echo '<p>Correo electrónico no obligatorio: ' . $a_respuesta['emailnoobligatorio'] . '.</p>';

                echo '<p>Teléfono obligatorio: ' . $a_respuesta['telefonoobligatorio'] . '.</p>';
                echo '<p>Teléfono no obligatorio: ' . $a_respuesta['telefononoobligatorio'] . '.</p>';

                echo '<p>DNI obligatorio: ' . $a_respuesta['dniobligatorio'] . '.</p>';
                echo '<p>DNI no obligatorio: ' . $a_respuesta['dninoobligatorio'] . '.</p>';

                echo '<p>Código postal obligatorio: ' . $a_respuesta['codigopostalobligatorio'] . '.</p>';
                echo '<p>Código postal no obligatorio: ' . $a_respuesta['codigopostalnoobligatorio'] . '.</p>';

                echo '<p>URL obligatoria: ' . $a_respuesta['urlobligatorio'] . '.</p>';
                echo '<p>URL no obligatoria: ' . $a_respuesta['urlnoobligatorio'] . '.</p>';

                echo '<p>Fecha obligatoria: ' . $a_respuesta['fechaobligatorio'] . '.</p>';
                echo '<p>Fecha no obligatoria: ' . $a_respuesta['fechanoobligatorio'] . '.</p>';

                echo '<p>Radio Button seleccionado: ' . $a_respuesta['radiobutton'] . '.</p>';

                echo '<p>Select seleccionado: ' . $a_respuesta['select'] . '.</p>';

                break;

            default:
                ?>
                <h2>Formulario<span style="color: red; font-size: 15px;">&nbsp;Campo Obligatorio (*)</span></h2>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <span for="alfabeticoobligatorio">Alfabético obligatorio&nbsp;</span>
                    <input type="text" name="alfabeticoobligatorio" value="<?php
                    if (isset($_REQUEST['alfabeticoobligatorio']) && is_null($a_errores['alfabeticoobligatorio'])) {
                        echo $_REQUEST['alfabeticoobligatorio'];
                    }
                    ?>"/><font color="red">&nbsp;*</font>
                    <font color="red"><?php echo $a_errores['alfabeticoobligatorio']; ?></font>
                    <br>
                    <span for="alfabeticonoobligatorio">Alfabético no obligatorio&nbsp;</span>
                    <input type="text" name="alfabeticonoobligatorio" value="<?php
                    if (isset($_REQUEST['alfabeticonoobligatorio']) && is_null($a_errores['alfabeticonoobligatorio'])) {
                        echo $_REQUEST['alfabeticonoobligatorio'];
                    }
                    ?>"/>
                    <font color="red"><?php echo $a_errores['alfabeticonoobligatorio']; ?></font>
                    <br>
                    <span for="alfanumericoobligatorio">Alfanumérico obligatorio&nbsp;</span>
                    <input type="text" name="alfanumericoobligatorio" value="<?php
                    if (isset($_REQUEST['alfanumericoobligatorio']) && is_null($a_errores['alfanumericoobligatorio'])) {
                        echo $_REQUEST['alfanumericoobligatorio'];
                    }
                    ?>"/><font color="red">&nbsp;*</font>
                    <font color="red"><?php echo $a_errores['alfanumericoobligatorio']; ?></font>
                    <br>
                    <span for="alfanumericonoobligatorio">Alfanumérico no obligatorio&nbsp;</span>
                    <input type="text" name="alfanumericonoobligatorio" value="<?php
                    if (isset($_REQUEST['alfanumericonoobligatorio']) && is_null($a_errores['alfanumericonoobligatorio'])) {
                        echo $_REQUEST['alfanumericonoobligatorio'];
                    }
                    ?>"/>
                    <font color="red"><?php echo $a_errores['alfanumericonoobligatorio']; ?></font>
                    <br>
                    <span for="enteroobligatorio">Entero obligatorio&nbsp;</span>
                    <input type="text" name="enteroobligatorio" value="<?php
                    if (isset($_REQUEST['enteroobligatorio']) && is_null($a_errores['enteroobligatorio'])) {
                        echo $_REQUEST['enteroobligatorio'];
                    }
                    ?>"/><font color="red">&nbsp;*</font>
                    <font color="red"><?php echo $a_errores['enteroobligatorio']; ?></font>
                    <br>
                    <span for="enteronoobligatorio">Entero no obligatorio&nbsp;</span>
                    <input type="text" name="enteronoobligatorio" value="<?php
                    if (isset($_REQUEST['enteronoobligatorio']) && is_null($a_errores['enteronoobligatorio'])) {
                        echo $_REQUEST['enteronoobligatorio'];
                    }
                    ?>"/>
                    <font color="red"><?php echo $a_errores['enteronoobligatorio']; ?></font>
                    <br>
                    <span for="floatobligatorio">Float obligatorio&nbsp;</span>
                    <input type="text" name="floatobligatorio" value="<?php
                    if (isset($_REQUEST['floatobligatorio']) && is_null($a_errores['floatobligatorio'])) {
                        echo $_REQUEST['floatobligatorio'];
                    }
                    ?>"/><font color="red">&nbsp;*</font>
                    <font color="red"><?php echo $a_errores['floatobligatorio']; ?></font>
                    <br>
                    <span for="floatnoobligatorio">Float no obligatorio&nbsp;</span>
                    <input type="text" name="floatnoobligatorio" value="<?php
                    if (isset($_REQUEST['floatnoobligatorio']) && is_null($a_errores['floatnoobligatorio'])) {
                        echo $_REQUEST['floatnoobligatorio'];
                    }
                    ?>"/>
                    <font color="red"><?php echo $a_errores['floatnoobligatorio']; ?></font>
                    <br>
                    <span for="passobligatorio">Contraseña obligatoria&nbsp;</span>
                    <input type="password" name="passobligatorio" value="<?php
                    if (isset($_REQUEST['passobligatorio']) && is_null($a_errores['passobligatorio'])) {
                        echo $_REQUEST['passobligatorio'];
                    }
                    ?>"/><font color="red">&nbsp;*</font>
                    <font color="red"><?php echo $a_errores['passobligatorio']; ?></font>
                    <br>
                    <span for="passnoobligatorio">Contraseña no obligatoria&nbsp;</span>
                    <input type="password" name="passnoobligatorio" value="<?php
                    if (isset($_REQUEST['passnoobligatorio']) && is_null($a_errores['passnoobligatorio'])) {
                        echo $_REQUEST['passnoobligatorio'];
                    }
                    ?>"/>
                    <font color="red"><?php echo $a_errores['passnoobligatorio']; ?></font>
                    <br>
                    <span for="emailobligatorio">Correo electrónico obligatorio&nbsp;</span>
                    <input type="email" name="emailobligatorio" value="<?php
                    if (isset($_REQUEST['emailobligatorio']) && is_null($a_errores['emailobligatorio'])) {
                        echo $_REQUEST['emailobligatorio'];
                    }
                    ?>"/><font color="red">&nbsp;*</font>
                    <font color="red"><?php echo $a_errores['emailobligatorio']; ?></font>
                    <br>
                    <span for="emailnoobligatorio">Correo electrónico no obligatorio&nbsp;</span>
                    <input type="email" name="emailnoobligatorio" value="<?php
                    if (isset($_REQUEST['emailnoobligatorio']) && is_null($a_errores['emailnoobligatorio'])) {
                        echo $_REQUEST['emailnoobligatorio'];
                    }
                    ?>"/>
                    <font color="red"><?php echo $a_errores['emailnoobligatorio']; ?></font>
                    <br>
                    <span for="telefonoobligatorio">Teléfono obligatorio&nbsp;</span>
                    <input type="text" name="telefonoobligatorio" value="<?php
                    if (isset($_REQUEST['telefonoobligatorio']) && is_null($a_errores['telefonoobligatorio'])) {
                        echo $_REQUEST['telefonoobligatorio'];
                    }
                    ?>"/><font color="red">&nbsp;*</font>
                    <font color="red"><?php echo $a_errores['telefonoobligatorio']; ?></font>
                    <br>
                    <span for="telefononoobligatorio">Teléfono no obligatorio&nbsp;</span>
                    <input type="text" name="telefononoobligatorio" value="<?php
                    if (isset($_REQUEST['telefononoobligatorio']) && is_null($a_errores['telefononoobligatorio'])) {
                        echo $_REQUEST['telefononoobligatorio'];
                    }
                    ?>"/>
                    <font color="red"><?php echo $a_errores['telefononoobligatorio']; ?></font>
                    <br>
                    <span for="dniobligatorio">DNI obligatorio&nbsp;</span>
                    <input type="text" name="dniobligatorio" value="<?php
                    if (isset($_REQUEST['dniobligatorio']) && is_null($a_errores['dniobligatorio'])) {
                        echo $_REQUEST['dniobligatorio'];
                    }
                    ?>"/><font color="red">&nbsp;*</font>
                    <font color="red"><?php echo $a_errores['dniobligatorio']; ?></font>
                    <br>
                    <span for="dninoobligatorio">DNI no obligatorio&nbsp;</span>
                    <input type="text" name="dninoobligatorio" value="<?php
                    if (isset($_REQUEST['dninoobligatorio']) && is_null($a_errores['dninoobligatorio'])) {
                        echo $_REQUEST['dninoobligatorio'];
                    }
                    ?>"/>
                    <font color="red"><?php echo $a_errores['dninoobligatorio']; ?></font>
                    <br>
                    <span for="codigopostalobligatorio">Código postal obligatorio&nbsp;</span>
                    <input type="text" name="codigopostalobligatorio" value="<?php
                    if (isset($_REQUEST['codigopostalobligatorio']) && is_null($a_errores['codigopostalobligatorio'])) {
                        echo $_REQUEST['codigopostalobligatorio'];
                    }
                    ?>"/><font color="red">&nbsp;*</font>
                    <font color="red"><?php echo $a_errores['codigopostalobligatorio']; ?></font>
                    <br>
                    <span for="codigopostalnoobligatorio">Código postal no obligatorio&nbsp;</span>
                    <input type="text" name="codigopostalnoobligatorio" value="<?php
                    if (isset($_REQUEST['codigopostalnoobligatorio']) && is_null($a_errores['codigopostalnoobligatorio'])) {
                        echo $_REQUEST['codigopostalnoobligatorio'];
                    }
                    ?>"/>
                    <font color="red"><?php echo $a_errores['codigopostalnoobligatorio']; ?></font>
                    <br>
                    <span for="urlobligatorio">URL obligatoria&nbsp;</span>
                    <input type="url" name="urlobligatorio" value="<?php
                    if (isset($_REQUEST['urlobligatorio']) && is_null($a_errores['urlobligatorio'])) {
                        echo $_REQUEST['urlobligatorio'];
                    }
                    ?>"/><font color="red">&nbsp;*</font>
                    <font color="red"><?php echo $a_errores['urlobligatorio']; ?></font>
                    <br>
                    <span for="urlnoobligatorio">URL no obligatoria&nbsp;</span>
                    <input type="url" name="urlnoobligatorio" value="<?php
                    if (isset($_REQUEST['urlnoobligatorio']) && is_null($a_errores['urlnoobligatorio'])) {
                        echo $_REQUEST['urlnoobligatorio'];
                    }
                    ?>"/>
                    <font color="red"><?php echo $a_errores['urlnoobligatorio']; ?></font>
                    <br>
                    <span for="fechaobligatorio">Fecha obligatoria&nbsp;</span>
                    <input type="text" name="fechaobligatorio" value="<?php
                    if (isset($_REQUEST['fechaobligatorio']) && is_null($a_errores['fechaobligatorio'])) {
                        echo $_REQUEST['fechaobligatorio'];
                    }
                    ?>"/><font color="red">&nbsp;*</font>
                    <font color="red"><?php echo $a_errores['fechaobligatorio']; ?></font>
                    <br>
                    <span for="fechanoobligatorio">Fecha no obligatoria&nbsp;</span>
                    <input type="text" name="fechanoobligatorio" value="<?php
                    if (isset($_REQUEST['fechanoobligatorio']) && is_null($a_errores['fechanoobligatorio'])) {
                        echo $_REQUEST['fechanoobligatorio'];
                    }
                    ?>"/>
                    <font color="red"><?php echo $a_errores['fechanoobligatorio']; ?></font>
                    <br>
                    <font color="red">*</font>
                    <span for="radiobutton">Radio Button&nbsp;</span>
                    <input type="radio" name="radiobutton" <?php echo (isset($_REQUEST['radiobutton']) && $_REQUEST['radiobutton'] == 'opcion1' ? 'checked' : ''); ?> value="opcion1" checked>Opción 1
                    <input type="radio" name="radiobutton" <?php echo (isset($_REQUEST['radiobutton']) && $_REQUEST['radiobutton'] == 'opcion2' ? 'checked' : ''); ?> value="opcion2">Opción 2
                    <font color="red"><?php echo $a_errores['radiobutton']; ?></font>
                    <br>
                    <font color="red">*</font>
                    <span for="select">Select&nbsp;</span>
                    <select name="select" value="<?php echo $_REQUEST['select']; ?>">
                        <option value="opcion1" value="opcion1" <?php echo (isset($_REQUEST['select']) && $_REQUEST['select'] == 'opcion1' ? 'selected' : ''); ?>>Opción 1</option>
                        <option value="opcion2" value="opcion2" <?php echo (isset($_REQUEST['select']) && $_REQUEST['select'] == 'opcion2' ? 'selected' : ''); ?>>Opción 2</option>
                        <option value="opcion3" value="opcion3" <?php echo (isset($_REQUEST['select']) && $_REQUEST['select'] == 'opcion3' ? 'selected' : ''); ?>>Opción 3</option>
                        <option value="opcion4" value="opcion4" <?php echo (isset($_REQUEST['select']) && $_REQUEST['select'] == 'opcion4' ? 'selected' : ''); ?>>Opción 4</option>
                    </select>
                    <font color="red"><?php echo $a_errores['select']; ?></font>
                    <br><br>
                    <input type="submit" name="enviar" value="Enviar">
                </form>
                <?php
                break;
        }
        ?>
    </body>
</html>