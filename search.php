<html>
  <head>
    <meta charset="utf-8">
    <link href="style.css" type="text/css" rel="stylesheet">
    <link href="styleFormLogin.css" type="text/css" rel="stylesheet">
    <link type="icon/png" rel="icon" href="imgs/favicon.ico">
    <title>Search</title>
    <script type="text/javascript" src="validacao.js"></script>
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
    <section id="conteudo" style="margin-top: -48px; height: 68.3%;">
      <a href="search.php" style="position: relative; float: left; width: 66px; height: 30px;"><button class="btnEntrar" style="background: #ed2f59;position: relative; float: left; padding: 0px; margin-left: 505%;; margin-right: 100px; width: 66px; height: 30px;a{color: #fff;} a:link, a:visited{text-decoration: none;}">
        Return
      </button></a>
      <form name="pesquisar" action="result.php" method="POST" style="margin-top: 70px; margin-bottom: 20px; width: 400px; height: 30px; margin-left: 50%;" onSubmit="return validarBl();">
        <input type="text" style="width: 200px; height: 25px; position: relative; border: 1px solid #000; margin-top: 10px; margin-left: 10px; margin-bottom: 10px;" name="txtPesquisa" id ="txtPesquisa" placeholder="Insert BL number:">
        <input type="submit" style="background: #ed2f59; position: relative; float: left; padding: 0px; margin-left: 250px; margin-top: -38px; width: 66px; height: 30px;" class="btnEntrar" id="btnEntrar" value="Search">
      </form>
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