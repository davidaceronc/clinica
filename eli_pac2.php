<?php
$victima = $_GET["victima"];
include './conexion.php';
$bd = conectar();
if(!$bd) return NULL;
$res = mysqli_query($bd, "delete from pacientes where id_pac='$victima'");
if (!$res){
    echo "<h3>Error</h3>";
    echo mysqli_error($bd);
}
else{
    echo "<h3>Informacion</h3>";
    echo "Registros eliminados: " . mysqli_affected_rows($bd);
}
mysqli_close($bd);
echo "<br><a href='index.php'>Regresar</a>";