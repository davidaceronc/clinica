<html>
    <head>
        <meta charset="UTF-8">
        <title>Eliminar paciente</title>
    </head>
    <body>
        <h1>Eliminar paciente</h1>
        <p>Seleccione un paciente</p>
        <hr>
        <form method="GET" action="eli_pac2.php">
            <?php
                include './conexion.php';
                $bd = conectar();
                if(!$bd) return NULL;
                $res = mysqli_query($bd, "select id_pac,nompac from pacientes order by nompac");
                while($arr = mysqli_fetch_array($res)){
                    echo "$arr[1]"; 
                    echo "<input type='radio' name='victima' value='$arr[0]'><br>";
                }
                mysqli_close($bd);
                echo "<a href='index.php'>Regresar</a>";     
            ?>
            <input type="submit" value="Eliminar!">
        </form>        
    </body>
</html>