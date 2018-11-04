<?php
    require 'conexao.php';
    require 'sql.php';
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $dados = array(
        'loginUsuario' => $login,
        'senhaUsuario' => $senha);
    $dados = escape($dados);
    echo ('<meta charset="UTF-8">');
    $link = abrirConexao();
    $select = select('usuario',"WHERE loginUsuario='$login' AND senhaUsuario='$senha'");
    if (!$select){
        echo ('<script> alert ("Usuário ou senha inválidos."); window.location.href="index.php";</script>');
    }
    else{
        session_start();
        $_SESSION['login'] = select['loginUsuario'];
        $_SESSION['senha'] = select['senhaUsuario'];
        header("Location: cadastro.php");
    }
    fecharConexao($link);
    /*$querySelect = "SELECT codUsuario, nomeUsuario, loginUsuario, senhaUsuario FROM tbUsuario WHERE loginUsuario ='$login' AND senhaUsuario = '$senha'";
    $retorno = mysqli_query($link, $querySelect);
    $result = mysqli_fetch_array($retorno);
    $row = mysqli_num_rows($result);
    	if($row > 0){
    		session_start();
    		session_cache_expire();
    		$_SESSION['id'] = $result['codUsuario'];
    		$_SESSION['login'] = $result['loginUsuario'];
    		$_SESSION['senha'] = $result['senhaUsuario'];
    		header ("Location: cadastro.php");
		}
		else{
			echo ('<script> alert ("Usuário ou senha inválidos."); window.location.href="index.php";</script>');
			unset ($_SESSION['login']);
			unset ($_SESSION['senha']);
		}
		fecharConexao($link);*/
?>