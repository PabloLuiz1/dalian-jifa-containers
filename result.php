<html>
  <head>
    <meta charset="utf-8">
    <link href="style.css" type="text/css" rel="stylesheet">
    <link href="styleFormLogin.css" type="text/css" rel="stylesheet">
    <link type="icon/png" rel="icon" href="imgs/favicon.ico">
    <title>Result</title>
  </head>
  <body>
    <header id="capecalho" style="background: #ed2f59;">
      <a href="" id="linkLogo">
      </a>
      <figure id="logo">
          <img src="imgs/logo.png" width="330" height="210" style="margin-left: -200px; margin-top: 10px;">
      </figure>
      <nav id="menu">
        </nav>
    </header>
    <section id="conteudo" style="margin-top: -48px;">
      <a href="search.php" style="position: relative; float: left; width: 66px; height: 30px;"><button class="btnEntrar" style="background: #ed2f59;position: relative; float: left; padding: 0px; margin-left: 505%;; margin-right: 100px; width: 66px; height: 30px;a{color: #fff;} a:link, a:visited{text-decoration: none;}">
        Return
      </button></a>
      <form name="pesquisar" action="pesquisar.php" method="POST" style="margin-top: 60px; margin-bottom: 20px; width: 400px; height: 30px; margin-left: 200px;">
      </form>
<?php
    require 'conexao.php';
    require 'sql.php';
    
    $pesquisa = $_POST['txtPesquisa'];
    $pesquisa = escape($pesquisa);
    $fichas = select('ficha', "WHERE blFicha='$pesquisa'");
    if (!$fichas){
        echo ('<script> alert("Não há registros."); window.location.href="consulta.php";</script>');
    }
    else{
        echo ('<table border="1" style="margin-bottom: 20px; margin-top: -25px; margin-left: 35%; '
                . 'font-family: sans-serif; background-color: #fafafa; border: 2px solid black; '
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
                echo("<td><a href=".$fi['localizacaoFicha']." target='janelaConsulta'>".$fi['navioFicha']."</a></td>");
                echo("<td>".$fi['dataFicha']."</td>");
            echo("</tr>");
        }
        echo ("</table>");
    }
	/*$pesquisa = $_POST ['txtPesquisa'];
	error_reporting(0);
    include("conexao.php");
    echo('<meta charset="UTF-8">');
    echo ('<table border="1" style="margin-bottom: 20px; margin-top: -25px; margin-left: 35%; font-family: sans-serif; background-color: #fafafa; border: 2px solid black; border-spacing: 0px; width: 600px; height: auto; text-align: center;">');
    echo('<tr style="background-color: #ed2f59; font-style: initial; color: white;">');
    	echo ("<td><b>BL Number</b></td>");
        echo("<td><b>Container</b></td>");
        echo("<td><b>Country</b></td>");
        echo("<td><b>Vessel</b></td>");
        echo("<td><b>Date</b></td>");
	echo ("</tr>");
	abrirConexao();
	$querySelect = "SELECT codFicha, blFicha, containerFicha, paisFicha, navioFicha, localizacaoFicha, dataFicha FROM tbFicha WHERE blFicha = '$pesquisa'";
    $resultadoConsulta = mysql_query($querySelect);
    while($linha = mysql_fetch_array($resultadoConsulta)){
		$navio = $linha['navioFicha'];
        $link = $linha['localizacaoFicha'];
		echo ("<tr>");
			echo("<td>".$linha['blFicha']."</td>");
			echo("<td>".$container = $linha['containerFicha']."</td>");
			echo("<td>".$pais = $linha['paisFicha']."</td>");
           	echo('<td><a href='.$link.' target="janelaConsulta">'.$navio.'</a></td>');
			echo("<td>".$data = $linha['dataFicha']."</td>");
		echo("</tr>");
	}
	fecharConexao();
    echo ("</table>");
	if (($cont < 10) || ($pesquisa = '')){
        consultarFichas();
    }
    else
    {
        
    }*/
?>
<iframe name="janelaConsulta" id="janelaConsulta" style="margin-left: 23%;">
</iframe>
      </div>
    </div>
  </div>
</section>
<footer id="rodape">
  <div id="linha1Rodape">
  </div>
  <div id="copyright">
    <p>
      <span id="nomeEmpresaRodape">Dalian Jifa Bohai Rim Containers Lines (Ásia) Co. Ltda.
        <a/>
      </span> - © Copyright 2017 - Todos os direitos reservados.
      <strong>
      </strong>
    </P>
  </div>
</footer>
</body>
</html>