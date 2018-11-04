<?php
    require 'conexao.php';
    require 'sql.php';
    
    $fichas = select('ficha', null);
    if(!$fichas){
        echo 'Sem registros.';
    }
    else{
        echo ('<table border="1" style="margin-left: 15%; font-family: sans-serif; '
                . 'background-color: #fafafa; border: 2px solid black; '
                . 'border-spacing: 0px; width: 600px; height: auto; text-align: center;">');
        echo ('<tr style="background-color: #ed2f59; font-style: initial; color: white;">');
        echo ("<td><b>BL Number</b></td>");
            echo("<td><b>Container</b></td>");
            echo("<td><b>Country</b></td>");
            echo("<td><b>Vessel</b></td>");
            echo("<td><b>Date</b></td>");
        foreach ($fichas as $fi){
            echo ("<tr>");
                echo("<td>".$fi['blFicha']."</td>");
                echo("<td>".$fi['containerFicha']."</td>");
                echo("<td>".$fi['paisFicha']."</td>");
                echo("<td><a href=".$fi['localizacaoFicha'].">".$fi['navioFicha']."</a></td>");
                echo("<td>".$fi['dataFicha']."</td>");
            echo("</tr>");
        }
        
    }
        /*echo('<meta charset="UTF-8">');
        echo ('<table border="1" style="margin-left: 15%; font-family: sans-serif; background-color: #fafafa; border: 2px solid black; border-spacing: 0px; width: 600px; height: auto; text-align: center;">');
        echo('<tr style="background-color: #ed2f59; font-style: initial; color: white;">');
            echo ("<td><b>BL Number</b></td>");
            echo("<td><b>Container</b></td>");
            echo("<td><b>Country</b></td>");
            echo("<td><b>Vessel</b></td>");
            echo("<td><b>Date</b></td>");
        echo ("</tr>");

        abrirConexao();
        
        $querySelect = "SELECT codFicha, blFicha, containerFicha, paisFicha, navioFicha, localizacaoFicha, dataFicha FROM tbFicha";
        $resultadoConsulta = mysql_query($querySelect);
        while($linha = mysql_fetch_array($resultadoConsulta)){
        	$navio = $linha['navioFicha'];
        	$link = $linha['localizacaoFicha'];
            echo ("<tr>");
                echo("<td>".$linha['blFicha']."</td>");
                echo("<td>".$container = $linha['containerFicha']."</td>");
                echo("<td>".$pais = $linha['paisFicha']."</td>");
                echo("<td><a href=".$link.">".$navio."</a></td>");
                echo("<td>".$data = $linha['dataFicha']."</td>");
            echo("</tr>");
        }
        echo ("</table>");
        fecharConexao();
         * 
         */
?>	