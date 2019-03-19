<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 23 - Israel García Cabañeros</title>
    </head>
    <body>
        <?php
        /*
         * Las siguientes lineas son para activar los errores en 
         * el caso de que no estés activados en el servidor.
         */
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        //error_reporting(E_ERROR);

        /*
         * Incluimos la libreria de validación de formularios, la
         * cual, si no se encuentra en la ruta especificada, no se
         * ejecutará ninguna línea más del programa.
         */
        require_once '../core/validacionFormularios.php';

        /*
         * Creamos una variable booleana de entrada y la inicializamos
         * a true.
         */
        $entradaOk = true;

        /*
         * Creamos un array $a_errores de errores para recorrerlo cuando
         * queramos combrobar los errores de campos introducidos en el
         * formulario.
         */
        $a_errores = [
            'username' => null,
            'email' => null,
            'edad' => null,
            'pass' => null
        ];

        /*
         * Creamos un array $a_respuesta para recorrerlo cuando queramos
         * recoger los campos introducidos en los input del formulario.
         */
        $a_respuesta = [
            'username' => null,
            'email' => null,
            'edad' => null,
            'pass' => null
        ];

        /*
         * Si usamos un switch, le pasaremos como parámetro el valor true.
         * Esto lo hacemos porque, al no tener ninguna variable, le pasamos
         * un valor real para que pueda entrar en la estructura del switch.
         * 
         * También puede hacerse con varios if() {...} anidados.
         */
        switch (true) {
            /*
             * En el caso de que exista el input type='submit' con name='enviar' y
             * este no sea igual a null se interpretarán las líneas dentro del case.
             */
            case (isset($_POST['enviar'])):
                /*
                 * Recogemos los errores en el array a partir de la librería de validación 
                 * de formularios.
                 */
                $a_errores['username'] = validacionFormularios::comprobarAlfabetico($_POST['username'], 45, 3, 1);
                $a_errores['email'] = validacionFormularios::validarEmail($_POST['email'], 100, 10, 1);
                $a_errores['edad'] = validacionFormularios::comprobarEntero($_POST['edad'], 100, 18, 1);
                $a_errores['pass'] = validacionFormularios::comprobarAlfanumerico($_POST['pass'], 60, 4, 1);

                /*
                 * Recorremos dicho array de errores con foreach.
                 */
                foreach ($a_errores as $error) {
                    /*
                     * Si se ha encontrado algún error la variable de entrada $entradaOk pasará
                     * de true a false.
                     */
                    if ($error != null) {
                        $entradaOk = false;
                    }
                }

                break;

            /*
             * En el caso de que el input type='submit' con name='enviar' no
             * exista, o este sea igual a null se interpretará el código del
             * default.
             */
            default:
                /*
                 * La variable de entrada $entradaOk pasará de true a false.
                 */
                $entradaOk = false;

                break;
        }

        /*
         * Si usamos un switch, le pasaremos como parámetro el valor true.
         * Esto lo hacemos porque, al no tener ninguna variable, le pasamos
         * un valor real para que pueda entrar en la estructura del switch.
         * 
         * También puede hacerse con varios if() {...} anidados.
         */
        switch (true) {
            /*
             * En el caso de que la variable de entrada $entradaOk sea igual a 
             * true interpretará las líneas dentro del case.
             */
            case ($entradaOk):
                /*
                 * Rellenamos el array $a_respuesta recuperando los datos introducidos
                 * en el formulario de la URL con la variable superglobal $_REQUEST.
                 */
                $a_respuesta = [
                    'username' => $_REQUEST['username'],
                    'email' => $_REQUEST['email'],
                    'edad' => $_REQUEST['edad'],
                    'pass' => $_REQUEST['pass']
                ];
                /*
                 * Imprimimos los datos del array en las siguientes lineas.
                 */
                echo '<h2>Datos introducidos.</h2>';
                echo '<p>Nombre: ' . $a_respuesta['username'] . '.</p>';
                echo '<p>Correo electrónico: ' . $a_respuesta['email'] . '.</p>';
                echo '<p>Edad: ' . $a_respuesta['edad'] . '.</p>';
                echo '<p>Contraseña: ' . $a_respuesta['pass'] . '.</p>';

                break;

            /*
             * Si la variable de entrada $entradaOk es igual a false, se vuelve
             * a mostrar el formulario imprimiendo los errores que se escribieron
             * en los input y recuperando los campos correctos con $_REQUEST.
             */
            default:
                ?>
                <h2>Formulario<span style="color: red; font-size: 15px;">&nbsp;Campo Obligatorio (*)</span></h2>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <span for="username">Nombre&nbsp;</span>
                    <input type="text" name="username" value="<?php
                    /*
                     * Si existe el campo del username en la URL y no es null, y
                     * en el array de errores no se encuentra el error del input
                     * con name='username', recupera de la URL y muestra de nuevo
                     * el campo introducido.
                     */
                    if (isset($_REQUEST['username']) && is_null($a_errores['username'])) {
                        echo $_REQUEST['username'];
                    }
                    ?>"/><font color="red">&nbsp;*</font>
                    <font color="red"><?php echo $a_errores['username']; ?></font>
                    <br>
                    <span for="email">Email&nbsp;</span>
                    <input type="email" name="email" value="<?php
                    /*
                     * Si existe el campo del username en la URL y no es null, y
                     * en el array de errores no se encuentra el error del input
                     * con name='email', recupera de la URL y muestra de nuevo
                     * el campo introducido.
                     */
                    if (isset($_REQUEST['email']) && is_null($a_errores['email'])) {
                        echo $_REQUEST['email'];
                    }
                    ?>"/><font color="red">&nbsp;*</font>
                    <font color="red"><?php echo $a_errores['email']; ?></font>
                    <br>
                    <span for="edad">Edad&nbsp;</span>
                    <input type="number" name="edad" min="18" value="<?php
                    /*
                     * Si existe el campo del username en la URL y no es null, y
                     * en el array de errores no se encuentra el error del input
                     * con name='edad', recupera de la URL y muestra de nuevo
                     * el campo introducido.
                     */
                    if (isset($_REQUEST['edad']) && is_null($a_errores['edad'])) {
                        echo $_REQUEST['edad'];
                    }
                    ?>"/><font color="red">&nbsp;*</font>
                    <font color="red"><?php echo $a_errores['edad']; ?></font>
                    <br>
                    <span for="pass">Password&nbsp;</span>
                    <input type="password" name="pass" value="<?php
                    /*
                     * Si existe el campo del username en la URL y no es null, y
                     * en el array de errores no se encuentra el error del input
                     * con name='pass', recupera de la URL y muestra de nuevo
                     * el campo introducido.
                     */
                    if (isset($_REQUEST['pass']) && is_null($a_errores['pass'])) {
                        echo $_REQUEST['pass'];
                    }
                    ?>"/><font color="red">&nbsp;*</font>
                    <font color="red"><?php echo $a_errores['pass']; ?></font>
                    <br>
                    <input type="submit" name="enviar" value="Enviar">
                </form>
                <?php
                break;
        }
        ?>
    </body>
</html>
