<?php
    $id_med = $_POST["lstmed"];
    $id_pac = $_POST["lstpac"];
    $codpro = $_POST["lstpro"];
    $coddia = $_POST["lstdia"];
    $costo = $_POST["txtcos"];
    
    include './conexion.php';
    $bd = conectar();
    if(!$bd) return NULL;
    $res = mysqli_query($bd, "insert into atencion values (null,'$id_med','$id_pac','$codpro','$coddia',NOW(),'$costo')");
    if (!$res){
    echo "<h3>Error</h3>";
    echo mysqli_error($bd);
    }
    else{
        echo "<h3>Informacion</h3>";
        echo "Registro Exitoso";
    }
    mysqli_close($bd);
?>