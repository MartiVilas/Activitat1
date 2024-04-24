<?php
    include("../database/database.php");
    //include("sessions/validarSessio.php");
    include("includes/head.html");
    include("includes/informacioUsuari.php");

    $query = "SELECT * FROM usuari ORDER BY usu_nivell, usu_nom ASC";
    $resul = mysqli_query($conn, $query);
?>

<table>
    <tr>
        <?php
            if(mysqli_num_rows($resul)>0){
                ?>
                <th>Nom usuari</th>
                <th>Nivell d'accès</th>
                <th>Operacions</th>
                <th>Modificar</th>
                <th>Foto</th>
                </tr>
                <?php
                        while($usuari = mysqli_fetch_object($resul)){
                            echo "<tr>";
                            echo "<td>$usuari->usu_nom</td>";
                            echo "<td>$usuari->usu_nivell</td>";
                            echo "<td><a href='./modificarUsuari.php?usu_nom=$usuari->usu_nom'>Modificar</td>";
                            echo "<td><a href='./eliminarUsuari.proc.php?usu_nom=$usuari->usu_nom'>Eliminar</td>";
                            echo "<td><img src='./img/base.webp' width=20px height=20px></td>";
                            echo "</tr>";
                        }
                        echo "<td><a href='crearUsuari.php'>Nou usuari</a></td>";
            } else {
                echo "<td>NO S'HAN TROBAT USUARIS</td>";
            }
        ?>
</table>

<?php
    include("includes/foot.html");
?>