<!DOCTYPE html>
<html>

<head>
    <title>Formularios con php</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>

    <h1>Mi primer formulario con PHP</h1>
    <label class="error">Campo requerido</label>
    <form action="bienvenido.php" method="post">
        <label for="name">Nombre:</label><br>
        <input type="text" name="name" required><label class="error">*</label><br>
        <label for="email">E-mail:</label><br>
        <input type="email" name="email" required><label class="error">*</label><br>
        <label for="edad">Edad:</label><br>
        <input type="number" name="edad" min="10" max="100" required><label class="error">*</label><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>