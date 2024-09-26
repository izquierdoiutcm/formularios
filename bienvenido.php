<!DOCTYPE html>
<html>
<head>
    <title>Bienvenido</title>
</head>
<body>
    <?php
        include_once('validar.php');
        $nombre = test_input($_POST['name']);//entre '' el name del input text
        $email  = test_input($_POST['email']);
        $edad   = test_input($_POST['edad']);
        //echo var_dump($edad);
    ?>
    <form action="index.php" method="POST">
        <label for="name">Nombre:</label><br>
        <input type="text" name="name" value = "<?=$nombre?>" readonly><br>
        <label for="email">E-mail:</label><br>
        <input type="text" name="email" value="<?=$email?>" readonly><br>
        <label for="edad">Edad:</label><br>
        <input type="text" name="number" value="<?=$edad?>" readonly><br><br>
        <input type="submit" value="Regresar">
    </form>
</body>
</html>