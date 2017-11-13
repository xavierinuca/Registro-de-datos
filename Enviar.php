<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $nombre = $_GET['nombre'];
        $valor = $_GET['valor'];
        $vidaUtil = $_GET['anos'];
        $porcentaje = $_GET['porcentaje'];
        $ano = 2015;
        echo '<h3>REGISTROS DE ACTIVOS FIJOS-EMPRESA XYZ</h3><br>';
        echo 'El nombre del bien es:' . $nombre . '<br><br>';
        echo 'Porcentaje de depreciaci&oacute;n anual: ' . $porcentaje . '%<br><br>';
        echo "<table border ='1' cellspacing='0' cellpadding='2' bordercolor='666633' WIDTH='500'>";
        echo "<tr><td>VALOR</td><td>VIDA &Uacute;TIL</b></td><td>A&Ntilde;O</td></tr>";
        echo '<tr><td>' . $valor . '</td><td>' . $vidaUtil . '</td><td>' . $ano . '</td></tr>';
        $vidaUtil = $vidaUtil - 1;
        for ($i = $vidaUtil; $i >= 1; $i--) {
            if ($valor <= 1) {
                break;
            } else {
                $valor = $valor - ($valor * ($porcentaje / 100));
                $ano++;
                echo '<tr><td>' . $valor . '</td><td>' . $i . '</td><td>' . $ano . '</td></tr>';
            }
        }
        echo "</table>";
        ?>
    </body>
</html>
