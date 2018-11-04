<html>
  <head>
    <meta charset="utf-8">
    <link href="style.css" type="text/css" rel="stylesheet">
    <link href="styleFormLogin.css" type="text/css" rel="stylesheet">
    <link type="icon/png" rel="icon" href="imgs/favicon.ico">
    <title>Delete</title>
    <?php
      include("validar.php");
    ?>
  </head>
  <body>
    <header id="capecalho">
      <a href="" id="linkLogo">
      </a>
      <figure id="logo">
      </figure>
      <nav id="menu">
          <ul>
                <li><a class="hvr-underline-from-center" href="cadastro.php">Insert</a></li>
                <li><a class="hvr-underline-from-center" href="consulta.php">Track</a></li>
                <li><a class="hvr-underline-from-center" href="excluir.php">Delete</a></li>
                <li><a class="hvr-underline-from-center" href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <section id="conteudo" style="margin-top: -48px;">
      <a href="http://localhost/Primo/consulta.php" style="position: relative; float: left; width: 66px; height: 30px;"><button class="btnEntrar" style="position: relative; float: left; padding: 0px; margin-left: 100px; margin-right: 100px; width: 66px; height: 30px;">
        Return
      </button></a>
      <form name="pesquisar" onSubmit="return validarBl();" id="pesquisar" method="POST" action="result.php" style="margin-top: 60px; margin-bottom: 20px; width: 400px; height: 30px; margin-left: 700px; margin-bottom: 415px; margin-top: 80px;">
        <input  type="text" name="txtPesquisa" style="width: 200px; height: 25px; position: relative; border: 1px solid #000; margin-top: 0px; margin-left: 10px; margin-bottom: 10px;" placeholder="Insert BL number:">
        <input type="submit" style="background: #ed2f59; position: relative; float: left; padding: 0px; margin-left: 250px; margin-top: -38px; width: 66px; height: 30px;" class="btnEntrar" id="btnEntrar" value="Search">
      </form>
      <?php
    	include ("conexao.php");
        echo('<meta charset="UTF-8">');
        echo ('<table border="1" style="margin-bottom: 20px; margin-top: -480px; margin-left: 30%; font-family: sans-serif; background-color: #fafafa; border: 2px solid black; border-spacing: 0px; width: 750px; height: auto; text-align: center;">');
        echo('<tr style="background-color: #ed2f59; font-style: initial; color: white;">');
            echo ("<td><b>BL number</b></td>");
            echo("<td><b>Container</b></td>");
            echo("<td><b>Country</b></td>");
            echo("<td><b>Vessel</b></td>");
            echo("<td><b>Date</b></td>");
            echo("<td><b>Actions</b></td>");
        echo ("</tr>");

        abrirConexao();
        
        $querySelect = "SELECT codFicha, blFicha, containerFicha, paisFicha, navioFicha, localizacaoFicha, dataFicha FROM tbFicha";
        $resultadoConsulta = mysql_query($querySelect);
        while($linha = mysql_fetch_array($resultadoConsulta)){
        	$navio = $linha['navioFicha'];
        	$link = $linha['localizacaoFicha'];
        	$id = $linha['blFicha'];
            echo ("<tr>");
                echo("<td>".$linha['blFicha']."</td>");
                echo("<td>".$container = $linha['containerFicha']."</td>");
                echo("<td>".$pais = $linha['paisFicha']."</td>");
                echo("<td><a href=".$link.">".$navio."</a></td>");
                echo("<td>".$data = $linha['dataFicha']."</td>");
                echo('<td name="id"><a style="margin-left: 2%;" href="deleteFicha.php?id=$id"><img src="imgs/delete.png"></td>');
            echo("</tr>");
        }
        fecharConexao();
    ?>
      
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
