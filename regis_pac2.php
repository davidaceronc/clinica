<?php
$ced = $_POST["txtced"];
$nom = $_POST["txtnom"];
$dir = $_POST["txtdir"];
$fec = $_POST["txtfec"];

include './conexion.php';
$bd = conectar();
if(!$bd) return NULL;
$res = mysqli_query($bd, "insert into pacientes values('$ced','$nom','$dir','$fec')");
if (!$res){
    echo "<h3>Error</h3>";
    echo mysqli_error($bd);
}
else{
    echo "<h3>Informacion</h3>";
    echo "<p>Registro adicionado</p>";
}
mysqli_close($bd);
echo "<a href='index.php'>Regresar</a>";
