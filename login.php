<?php 
session_start();
require 'config.php';
if(isset($_POST['nome']) && !empty($_POST['senha'])){
	$nome=addslashes($_POST['nome']);
	$senha=addslashes(md5($_POST['senha']));

	$loga=$con->query("SELECT * FROM users WHERE login='$nome' AND senha='$senha'");
	if($loga->rowCount() > 0){
		header("Location: admiNMaster/index.php");
	}else{
		header("Location: login.php");
	}
}


 ?>

<link rel="stylesheet" type="text/css" href="assets/css/flexbox.css">
<link rel="stylesheet" type="text/css" href="assets/css/forms.css">
<link rel="stylesheet" type="text/css" href="assets/css/styles.css">

<div class="box_login">
	<h3>Entre em nossos sistemas para pode acessar e poder cadastrar novos elementos </h3>
	<div class="box_login_access">
		<form  method="POST">
			<input type="text" class="inp" name="nome" value="" placeholder="Login"><br>
			<input type="password" class="inp" name="senha" value="" placeholder="Senha"><br>
			<input type="submit" class="but" name="" value="ENTRAR">
		</form>
<br>
		<h4>Ainda não tem cadastro? <a class="nolink" href="#">Clique Aqui</a></h4>
</div>
</div>
