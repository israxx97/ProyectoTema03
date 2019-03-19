<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 21 - Israel García Cabañeros</title>
    </head>
    <body>
        <h2>Formulario</h2>
        <form action="Tratamiento.php" method="POST">
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
    </body>
</html>