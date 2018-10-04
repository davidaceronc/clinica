<?php
    include './conexion.php';
    $bd = conectar();
    if(!$bd) return NULL;
    $res = mysqli_query($bd, "select nompro,max(costo) from procedimientos natural join atencion group by nompro order by nompro");
    echo "<ul>";
    while($arr = mysqli_fetch_array($res)){
        echo "<li>$arr[0] $ $arr[1]</li>";
    }
    echo "</ul>";
    mysqli_close($bd);
?>