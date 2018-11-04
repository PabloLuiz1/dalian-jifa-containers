<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="style.css" type="text/css" rel="stylesheet">
<link href="styleFormLogin.css" type="text/css" rel="stylesheet">
<link type="icon/png" rel="icon" href="imgs/favicon.ico">
<title>Entrar</title>
</head>

<body>
    <header id="capecalho" style="background: #fff;">
      <a href="" id="linkLogo"></a>
      <figure id="logo">
        <img src="imgs/logo.png" width="330" height="210" style="margin-left: 330px; margin-top: -7px;">
      </figure>
    </header>
    <section id="conteudo">
        <div id="caixaLogin">
          <header style="background: #ed2f59;">
              <h2 style="background: #ed2f59;">Login</h2>
            </header>
            <div id="conteudoCaixaLogin">
              <form id="formulario" name="cadastroaluno" method="POST" action="logar.php">
                    <div class="caixaCampoTexto" style="background: #ed2f59;"><img src="imgs/usuarioPeq.png" class="imgIconeLogin" alt="Login"><input type="text" name="login" placeholder="Insert a login" class="campoTexto" id="login"></div><br>
                    <div class="caixaCampoTexto" style="background: #ed2f59;"><img src="imgs/cadeadoPeq.png" class="imgIconeLogin" alt="Login"><input type="password" name="senha" placeholder="Insert a password" class="campoTexto" id="senha"></div>
  <br>
                  <button type="submit" class="btnEntrar" style="background: #ed2f59;">Login</button>
              </form>
                
                
                
            </div>
        </div>
        
    </section>
  <footer id="rodape">
      <div id="linha1Rodape">
        </div>
        <div id="copyright">
          <p><span id="nomeEmpresaRodape">Dalian Jifa Bohai Rim Containers Lines (Ásia) Co. Ltda <a/></span> - © Copyright 2017 - Todos os direitos reservados.<strong></strong></P>
        </div>
    </footer>
</body>
</html>