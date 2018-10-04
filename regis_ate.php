<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/estilo.css" rel="stylesheet">
        <script src="js/jquery-3.1.1.js"></script>
        <script src="js/micodigo.js"></script>
        <title>Registro de atencion medica</title>
    </head>
    <body>
        <h1>Registro de atencion medica</h1>
        <h2>Datos de la atencion</h2>
        <form method="POST" action="regis_ate2.php" id="frmAtencion">
            <label>Medico que atiende</label>
            <select name="lstmed">
            <?php
            include './conexion.php';
            $bd = conectar();
            if(!$bd) return NULL;
            $res = mysqli_query($bd, "select id_med,nom_med from medicos order by nom_med");
            while($arr = mysqli_fetch_array($res)){
                echo "<option value='$arr[0]'>$arr[1]</option>";
            }
            ?>
            </select><br>
            <label>Medico que atiende</label>
            <select name="lstpac">    
            <?php
            $res = mysqli_query($bd, "select id_pac,nompac from pacientes order by nompac");
            while($arr = mysqli_fetch_array($res)){
                echo "<option value='$arr[0]'>$arr[1]</option>";          
            }
            ?>
            </select><br>
            <label>Tipo de procedimiento</label>
            <select name="lstpro">    
            <?php
            $res = mysqli_query($bd, "select * from procedimientos order by nompro");
            while($arr = mysqli_fetch_array($res)){
                echo "<option value='$arr[0]'>" . utf8_encode($arr[1]) . "</option>";          
            }
            ?>
            </select><br>
            <label>Tipo de diagnostico</label>
            <select name="lstdia">
            <?php
            $res = mysqli_query($bd, "select * from diagnosticos order by nomdia");
            while($arr = mysqli_fetch_array($res)){
                echo "<option value='$arr[0]'>$arr[1]</option>";          
            }
            mysqli_close($bd);
            ?>                
            </select><br>
            <label>Costo de la atencion</label>
            <input type="number" min="0" name="txtcos"><hr>
            <input type="submit" value="Guardar Atencion">
        </form>
        <input type="button" value="Ver precios" id="cmdPrecio">
        <input type="button" value="Ver procedimientos" id="cmdPro"><br>
        <div id=divAjax></div>
    </body>
</html>
