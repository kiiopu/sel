<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Registrar Usuario</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <form method="post">
        <h1> ¡Suscríbete! </h1>
        <input type="text" name="name" placeholder="Nombre completo">
        <input type="email" name="email" placeholder="Email">
        <input type="submit" name="register" value="Registrar">
    </form>

    <?php
    include("registrar.php");
    ?>

</body>
</html>