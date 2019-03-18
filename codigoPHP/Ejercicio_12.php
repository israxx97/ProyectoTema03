<?php

/*
 * Mostraremos el contenido de las variable
 * super globales con la funcion print_r().
 */
echo '<h1>Variables superglobales con print_r().</h1>';
echo '<h2>Variable $GLOBALS</h2>';
print_r($GLOBALS);

echo '<h2>Variable $_SERVER</h2>';
print_r($_SERVER);

echo '<h2>Variable $_GET</h2>';
print_r($_GET);

echo '<h2>Variable $_POST</h2>';
print_r($_POST);

echo '<h2>Variable $_FILES</h2>';
print_r($_FILES);

echo '<h2>Variable $_COOKIE</h2>';
print_r($_COOKIE);

echo '<h2>Variable $_SESSION</h2>';
print_r($_SESSION);

echo '<h2>Variable $_REQUEST</h2>';
print_r($_REQUEST);

echo '<h2>Variable $_ENV</h2>';
print_r($_ENV);

echo '<h1>Variables superglobales con foreach().</h1>';
echo '<h2>Variable $GLOBALS</h2>';
foreach ($GLOBALS as $key => $value) {
    echo '<p><b>' . $key . ':</b> ' . $value . '</p>';
}

echo '<h2>Variable $_SERVER</h2>';
foreach ($_SERVER as $key => $value) {
    echo '<p><b>' . $key . ':</b> ' . $value . '</p>';
}

echo '<h2>Variable $_GET</h2>';
foreach ($_GET as $key => $value) {
    echo '<p><b>' . $key . ':</b> ' . $value . '</p>';
}

echo '<h2>Variable $_POST</h2>';
foreach ($_POST as $key => $value) {
    echo '<p><b>' . $key . ':</b> ' . $value . '</p>';
}

echo '<h2>Variable $_FILES</h2>';
foreach ($_FILES as $key => $value) {
    echo '<p><b>' . $key . ':</b> ' . $value . '</p>';
}

echo '<h2>Variable $_COOKIE</h2>';
foreach ($_COOKIE as $key => $value) {
    echo '<p><b>' . $key . ':</b> ' . $value . '</p>';
}

echo '<h2>Variable $_SESSION</h2>';
foreach ($_SESSION as $key => $value) {
    echo '<p><b>' . $key . ':</b> ' . $value . '</p>';
}

echo '<h2>Variable $_REQUEST</h2>';
foreach ($_REQUEST as $key => $value) {
    echo '<p><b>' . $key . ':</b> ' . $value . '</p>';
}

echo '<h2>Variable $_ENV</h2>';
foreach ($_ENV as $key => $value) {
    echo '<p><b>' . $key . ':</b> ' . $value . '</p>';
}
