<?php
	$login = $_POST["login"];
	$passwd = $_POST["passwd"];
	$email = $_POST["email"];

	$req =$pdo->prepare("INSERT INTO user VALUE(NULL,?,PASSWORD(?),?,NULL,NULL)");

	//$t = array('login' => $login, 'mdp' => $passwd, 'email' => $email);
	$t = array($login,$passwd,$email);
	$req->execute($t);
	//echo $req->execute($t);

?>
