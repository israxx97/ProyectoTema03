<!DOCTYPE html>
<html>
    <head>
        <title>Tratamiento - Israel García Cabañeros</title>
    </head>
    <body>
        <h2>Datos introducidos</h2>
        <?php
        echo '<p> Nombre: ' . $_REQUEST['username'] . '.</p>';
        echo '<p> Correo electrónico: ' . $_REQUEST['email'] . '.</p>';
        echo '<p> Edad: ' . $_REQUEST['edad'] . '.</p>';
        echo '<p> Password: ' . $_REQUEST['pass'] . '.</p>';
        ?>
    </body>
</html>

