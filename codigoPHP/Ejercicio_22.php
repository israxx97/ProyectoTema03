<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 22 - Israel García Cabañeros</title>
    </head>
    <body>
        <?php
        switch (true) {
            case (isset($_POST['enviar'])):
                echo '<p> Nombre: ' . $_POST['username'] . '.</p>';
                echo '<p> Correo electrónico: ' . $_POST['email'] . '.</p>';
                echo '<p> Edad: ' . $_POST['edad'] . '.</p>';
                echo '<p> Password: ' . $_POST['pass'] . '.</p>';

                break;

            default:
                ?>
                <h2>Formulario</h2>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <span for="username">Nombre&nbsp;</span>
                    <input type="text" name="username">*
                    <br>
                    <span for="email">Email&nbsp;</span>
                    <input type="email" name="email">*
                    <br>
                    <span for="edad">Edad&nbsp;</span>
                    <input type="number" name="edad" min="18">*
                    <br>
                    <span for="pass">Password&nbsp;</span>
                    <input type="password" name="pass">*
                    <br>
                    <input type="submit" name="enviar" value="Enviar">
                </form>
                <?php
                break;
        }
        ?>
    </body>
</html>
