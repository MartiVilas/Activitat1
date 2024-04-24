<?php
    include("../database/database.php");
    //include("sessions/validarSessio.php");
    include("includes/head.html");
?>


<form action="crearUsuari.proc.php" method="POST" enctype="multipart/form-data">
    <table>
    <tr>
            <td>Mail usuari:</td>
            <td><input name="usu_nom" size="20"></td>
        </tr>
        <tr>
            <td>Paraula clau:</td>
            <td><input name="usu_password" size="20"></td>
        </tr>
        <tr>
            <td>Nivell d'accés:</td>
            <td>
                <select name="usu_nivell">
                    <option value="user">Usuari</option>
                    <option value="admin">Administrador</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Imagen:</td>
            <td><input type="file" name="usu_img" accept="image/*"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Enviar"></td>
        </tr>
    </table>
</form>
