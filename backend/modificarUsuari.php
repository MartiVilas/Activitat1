<?php
    include("../database/database.php");
    //include("sessions/validarSessio.php");
    include("includes/head.html");
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Usuario</title>
</head>
<body>
    <h2>Modificar Usuario</h2>
    <form action="modificarUsuari.proc.php" method="POST">
        <label for="usu_nom">Nom d'Usuari:</label>
        <select name="usu_nom" id="usu_nom">
            <?php
            include 'conexio.php';
            $sql = "SELECT usu_nom FROM Usuaris";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='" . $row['usu_nom'] . "'>" . $row['usu_nom'] . "</option>";
            }
            mysqli_close($conn);
            ?>
        </select><br><br>
        <label for="usu_password">Nueva Contrasenya:</label>
        <input type="password" name="usu_password" id="usu_password"><br><br>
        <label for="usu_nivell">Nuevo nivel de acceso:</label>
        <select name="usu_nivell" id="usu_nivell">
            <option value="admin">admin</option>
            <option value="user">user</option>
        </select><br><br>

        <input type="submit" value="Modificar Usuari">
    </form>
</body>
</html>