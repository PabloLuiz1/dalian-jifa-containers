<?php
    require 'conexao.php';
    require 'sql.php';
    /*$bl = $_POST ['txtBl'];
    $container = $_POST ['txtContainer'];
    $navio = $_POST ['txtNavio'];
    $pais = $_POST ['txtPais'];
    $localizacao = $_POST ['txtLocalizacao'];
    $data = $_POST ['txtData'];*/
    $link = abrirConexao();
    $ficha = array (
        'blFicha' => $_POST ['txtBl'], 
        'containerFicha' => $_POST ['txtContainer'],
        'paisFicha' => $_POST ['txtPais'], 
        'navioFicha' => $_POST ['txtNavio'],
        'localizacaoFicha' => $_POST ['txtLocalizacao'],
        'dataFicha' => $_POST ['txtData']);
    
    $insert = insert('ficha', $ficha);
    if ($insert){
        echo '<script> alert ("Sucess"); window.location.href="cadastro.php";</script>';
    }
    else{
        echo '<script> alert ("Error"); </script>';
    }
    fecharConexao($link);
    
    
    
    
/*$queryInsert="INSERT INTO tbFicha(blFicha, containerFicha, paisFicha, navioFicha, localizacaoFicha, dataFicha) 
                VALUES ('$bl', '$container', '$pais', '$navio', '$localizacao', '$data')" or die(mysql_error());
				abrirConexao();	
			
			mysql_query($queryInsert) or die(mysql_error());
			if (mysql_affected_rows() > 0){
				header ("Location: cadastro.php");
			}
			else{
				echo "erro";
			}
            fecharConexao();*/
			?>	