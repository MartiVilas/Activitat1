<?php
    include("../database/database.php");
    include("sessions/validarSessio.php");

    if($_REQUEST['usu_nom']==$_SESSION['usu_nom'])
        header("location: error.php?error=No pots eliminar-te a tu mateix");
    else {
        $q = "DELETE FROM usuari WHERE usu_nom='$_REQUEST[usu_nom]'";
        $resul = mysqli_query($conn, $q);
        if(mysql_affected_rows($conn)>0){
            header("location: gestioUsuaris.php");
        } else {
            header("location: error.php?error=No s'ha pogut eliminar l'usuari")
        }
    }
?>