<?php
  include ("conexao.php");
  $id = $_GET['id'];

      $queryDelete = "DELETE FROM tbFicha WHERE blFicha ='$id'";
      abrirConexao();
      $resultadoQuery = mysql_query($queryDelete);
			if ($resultadoQuery){
				exit;
				echo ("<script> alert('Ficha: '.$id.' excluída com sucesso.');</script>");
			}
			else{
				echo ("<script> alert('Erro.');</script>");
			}
?>