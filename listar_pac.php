<html>
    <head>
        <meta charset="UTF-8">
        <title>Listado de pacientes</title>
    </head>
    <body>
        <h1>Listado de pacientes</h1>
        <hr>
        <table border="1" width="800">
            <thead>
                <tr>
                    <th>Cedula</th>
                    <th>Nombre</th>
                    <th>Direccion</th>
                    <th>Fec. Nacimiento</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include './conexion.php';
                    $bd = conectar();
                    if(!$bd) return NULL;
                    $res = mysqli_query($bd, "select * from pacientes order by nompac");
                    while($arr = mysqli_fetch_array($res)){
                        echo "<tr>";
                        echo "<td>$arr[0]</td>";
                        echo "<td>$arr[1]</td>";
                        echo "<td>$arr[2]</td>";
                        echo "<td>$arr[3]</td>";
                        echo "</tr>";
                    }
                    mysqli_close($bd);
                    echo "<a href='index.php'>Regresar</a>";
                ?>
            </tbody>
        </table>
        
    </body>
</html>