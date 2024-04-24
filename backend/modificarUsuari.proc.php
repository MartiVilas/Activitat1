<?php
include("../database/database.php");
include("sessions/validarSessio.php");

$sql = "UPDATE Usuaris SET usu_passsword='$usu_password', usu_nivell='$usu_nivell' WHERE usu_nom='$usu_nom'";
if (mysqli_query($conn, $sql)) {
    header('Location: gestioUsuaris.php');
} else {
    header('Location: error.php?msg=Error al modificar el usuario');
}
?>