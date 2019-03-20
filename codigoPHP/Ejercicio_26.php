<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once '../core/validacionFormularios.php';

$entradaOk = true;

$a_errores = [
    'temperaturaHoy' => null,
    'temperaturaAyer' => null,
    'presionAtmosferica' => null,
    'estadoCielo' => null,
    'estadoAnimo' => null,
    'planHoy' => null
];

$a_respuesta = [
    'temperaturaHoy' => null,
    'temperaturaAyer' => null,
    'presionAtmosferica' => null,
    'estadoCielo' => null,
    'estadoAnimo' => null,
    'planHoy' => null
];

$a_estadoCieloSelect = [
    'soleado',
    'despejado',
    'nublado'
];

$a_estadoAnimoRadio = [
    'bueno',
    'malo',
    'comoElTiempo'
];

switch (true) {
    case (isset($_POST['enviar'])):
        $a_errores['temperaturaHoy'] = validacionFormularios::comprobarFloat($_POST['temperaturaHoy'], 55, -98, 1);
        $a_errores['temperaturaAyer'] = validacionFormularios::comprobarFloat($_POST['temperaturaAyer'], 55, -98, 1);
        $a_errores['presionAtmosferica'] = validacionFormularios::comprobarFloat($_POST['presionAtmosferica'], 1.184, 0.690, 1);
        $a_errores['estadoCielo'] = validacionFormularios::validarElementoEnLista($_POST['estadoCielo'], $a_estadoCieloSelect, 1);
        $a_errores['estadoAnimo'] = validacionFormularios::validarElementoEnLista($_POST['estadoAnimo'], $a_estadoAnimoRadio, 1);
        $a_errores['planHoy'] = validacionFormularios::comprobarAlfaNumerico($_POST['planHoy'], 255, 1, 1);

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
            'temperaturaHoy' => $_REQUEST['temperaturaHoy'],
            'temperaturaAyer' => $_REQUEST['temperaturaAyer'],
            'presionAtmosferica' => $_REQUEST['presionAtmosferica'],
            'estadoCielo' => $_REQUEST['estadoCielo'],
            'estadoAnimo' => $_REQUEST['estadoAnimo'],
            'planHoy' => $_REQUEST['planHoy']
        ];

        echo '<h1>Datos introducidos.</h1>';
        echo '<p>Temperatura de hoy: ' . $a_respuesta['temperaturaHoy'] . '</p>';
        echo '<p>Temperatura de ayer: ' . $a_respuesta['temperaturaAyer'] . '</p>';
        echo '<p>Presión atmosférica: ' . $a_respuesta['presionAtmosferica'] . '</p>';
        echo '<p>Estado del cielo: ' . $a_respuesta['estadoCielo'] . '</p>';
        echo '<p>Estado de ánimo: ' . $a_respuesta['estadoAnimo'] . '</p>';
        echo '<p>Plan para hoy: ' . $a_respuesta['planHoy'] . '</p>';

        break;

    default:
        ?>
        <h2>Formulario<span style="color: red; font-size: 15px;">&nbsp;Campo Obligatorio (*)</span></h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <span for="temperaturaHoy">Temperatura hoy (ºC)&nbsp;</span>
            <input type="text" name="temperaturaHoy" value="<?php
            if (isset($_REQUEST['temperaturaHoy']) && is_null($a_errores['temperaturaHoy'])) {
                echo $_REQUEST['temperaturaHoy'];
            }
            ?>" placeholder="Rango de -98ºC a 55ºC"/><font color="red">&nbsp;*</font>
            <font color="red"><?php echo $a_errores['temperaturaHoy']; ?></font>
            <br>
            <span for="temperaturaAyer">Temperatura ayer (ºC)&nbsp;</span>
            <input type="text" name="temperaturaAyer" value="<?php
            if (isset($_REQUEST['temperaturaAyer']) && is_null($a_errores['temperaturaAyer'])) {
                echo $_REQUEST['temperaturaAyer'];
            }
            ?>" placeholder="Rango de -98ºC a 55ºC"/><font color="red">&nbsp;*</font>
            <font color="red"><?php echo $a_errores['temperaturaAyer']; ?></font>
            <br>
            <span for="presionAtmosferica">Presión atmosférica (atm)&nbsp;</span>
            <input type="text" name="presionAtmosferica" value="<?php
            if (isset($_REQUEST['presionAtmosferica']) && is_null($a_errores['presionAtmosferica'])) {
                echo $_REQUEST['presionAtmosferica'];
            }
            ?>" placeholder="Rango de 0.690atm a 1.184atm"/><font color="red">&nbsp;*</font>
            <font color="red"><?php echo $a_errores['presionAtmosferica']; ?></font>
            <br>
            <span for="estadoCielo">Estado del cielo&nbsp;</span>
            <select name="estadoCielo">
                <option value="soleado" <?php echo (isset($_REQUEST['estadoCielo']) && $_REQUEST['estadoCielo'] == 'soleado' ? 'selected' : ''); ?>>Soleado</option>
                <option value="despejado" <?php echo (isset($_REQUEST['estadoCielo']) && $_REQUEST['estadoCielo'] == 'despejado' ? 'selected' : ''); ?>>Despejado</option>
                <option value="nublado" <?php echo (isset($_REQUEST['estadoCielo']) && $_REQUEST['estadoCielo'] == 'nublado' ? 'selected' : ''); ?>>Nublado</option>
            </select><font color="red">&nbsp;*</font>
            <font color="red"><?php echo $a_errores['estadoCielo']; ?></font>
            <br>
            <span for="estadoAnimo">Estado de ánimo&nbsp;</span>
            <input type="radio" name="estadoAnimo" <?php echo (isset($_REQUEST['estadoAnimo']) && $_REQUEST['estadoAnimo'] == 'bueno' ? 'checked' : ''); ?> value="bueno" checked>Bueno
            <input type="radio" name="estadoAnimo" <?php echo (isset($_REQUEST['estadoAnimo']) && $_REQUEST['estadoAnimo'] == 'malo' ? 'checked' : ''); ?> value="malo">Malo
            <input type="radio" name="estadoAnimo" <?php echo (isset($_REQUEST['estadoAnimo']) && $_REQUEST['estadoAnimo'] == 'comoElTiempo' ? 'checked' : ''); ?> value="comoElTiempo">Como el tiempo
            <font color="red"><?php echo $a_errores['estadoAnimo']; ?></font>
            <br>
            <span for="planHoy">Plan para hoy&nbsp;</span>
            <input type="text" name="planHoy" value="<?php
            if (isset($_REQUEST['planHoy']) && is_null($a_errores['planHoy'])) {
                echo $_REQUEST['planHoy'];
            }
            ?>" placeholder=""/><font color="red">&nbsp;*</font>
            <font color="red"><?php echo $a_errores['planHoy']; ?></font>
            <br>
            <input type="submit" name="enviar" value="Enviar">
        </form>
        <?php
        break;
}
