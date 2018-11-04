<html>
  <head>
    <meta charset="utf-8">
    <link href="style.css" type="text/css" rel="stylesheet">
    <link href="styleFormLogin.css" type="text/css" rel="stylesheet">
    <link type="icon/png" rel="icon" href="imgs/favicon.ico">
    <title>Cadastro
    </title>
    <script type="text/javascript" src="validacao.js"></script>
    <?php
      include("validar.php");
    ?>
  </head>
  <body>
    <header id="capecalho" style="background: #ed2f59;">
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
    <section id="conteudo">
      <div id="conteudoCaixaLogin">
          <form name="cadastroFicha" action="insertFicha.php" method="POST" onSubmit="return validar();">
          <label for="txtBl" class="labelFicha" id="labelFicha">BL Number: 
          </label>
          <input type="text" name="txtBl" style="width: 200px; height: 25px; position: relative; border: 1px solid #000; margin-top: 10px; margin-left: 10px; margin-bottom: 10px;" id="txtBl">
          </label>
        <br>
        <label for="txtContainer" class="lblContainer" id="lblContainer">Container: 
        </label>
        <input type="text" name="txtContainer" id="txtContainer" style="width: 200px; height: 25px; position: relative; border: 1px solid #000; margin-top: 10px; margin-left: 10px; margin-bottom: 10px;">
        </label>
      <br>
      <label for="txtPais" class="lblPais" id="lblPais">Country: 
      </label>
      <input type="text" name="txtPais" id="txtPais" style="width: 200px; height: 25px; position: relative; border: 1px solid #000; margin-top: 10px; margin-left: 10px; margin-bottom: 10px;" >
      <br>
      <label for="txtNavio" class="lblNavio" id="lblNavio">Vessel: 
      </label>
      <input type="text" name="txtNavio"  id="txtNavio" style="width: 200px; height: 25px; position: relative; border: 1px solid #000; margin-top: 10px; margin-left: 10px; margin-bottom: 10px;">
      <br>
      <label for="txtLocalizacao" class="labelLocalizacao" id="labelLocalizacao">Location (link): 
      </label>
      <input type="text" name="txtLocalizacao" id="txtLocalizacao" style="width: 200px; height: 25px; position: relative; border: 1px solid #000; margin-top: 10px; margin-left: 10px; margin-bottom: 10px;">
      <br>
      <label for="txtData" class="labelData" id="labelData">Date: 
      </label>
      <input type="date" name="txtData" id="txtData" style="width: 200px; height: 25px; position: relative; border: 1px solid #000; margin-top: 10px; margin-left: 10px; margin-bottom: 10px;" required>
      <br>
      <br>
      <input type="submit" class="btnEntrar" style="background: #ed2f59;" id="btnCadastrar" value="Insert">
      <input type="reset" class="btnEntrar" style="background: #ed2f59; margin-left: -250px;" id="btnResetar" value="Reset">
      </form>
    </div>
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
