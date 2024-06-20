<?php
include("con_db.php");

if (isset($_POST['register'])) {
    $name = mysqli_real_escape_string($conex, $_POST['name']);
    $email = mysqli_real_escape_string($conex, $_POST['email']);
    $fechareg = date("Y-m-d");  // Cambiado el formato de la fecha para que sea compatible con MySQL

    if (strlen($name) >= 1 && strlen($email) >= 1) {
        // Quité el ID de la consulta
        $consulta = "INSERT INTO datos(Nombre, Email, Fecha_reg) VALUES ('$name', '$email', '$fechareg')";
        $resultado = mysqli_query($conex, $consulta);
        
        if ($resultado) {
            echo '<h3 class="ok">¡Te has inscrito correctamente!</h3>';
        } else {
            echo '<h3 class="bad">¡Ups! Ha ocurrido un error.</h3>';
        }
    } else {
        echo '<h3 class="bad">¡Por favor completa los campos!</h3>';
    }
}
?>