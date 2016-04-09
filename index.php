<?php session_start(); 
	if(!$_SESSION['panier'])
	{
		$_SESSION['panier'] = array();
	}
?>
<HTML>
<HEAD>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="index.css">
</HEAD>
<BODY>
<div class= "top"> 
<div><img id = "imgtop" SRC= "http://practicinganthropology.org/wp-content/uploads/2010/08/napa-logo-no-text-transparent-2000x800.png"></div>
<div id="accueil"><a id = "accpolice" href="http://e3r10p11.42.fr:8080/rush/index.php"><i>Accueil</i></a></div>
<div id="panier"><a  id="panierpolice" href = "http://e3r10p11.42.fr:8080/rush/panier.php"><i>Panier</i></a></div>
<div id="connexion">
<?php
	if($_SESSION['login'])
	{
		echo'<a id="connexionpolice" href = "http://e3r10p11.42.fr:8080/rush/logout.php"><i>Disconnect</i></a>';
	}
	else
	{
		echo'<a id="connexionpolice" href = "http://e3r10p11.42.fr:8080/rush/connexion.php"><i>Connexion</i></a>';
	}
?>
</div>
<div id="inscription">
<?php
	if($_SESSION['login'])
	{
		echo'<a id="inscriptionpolice" href="http://e3r10p11.42.fr:8080/rush/accountmain.php"><i>Account</i></a></div>';
	}
	else
	{
		echo'<a id="inscriptionpolice" href="http://e3r10p11.42.fr:8080/rush/inscription.php"><i>Register</i></a></div>';
	}
?>
</div>
<div class= "middle">
PAGE PRINCIPALE
<?php
		include "print_database.php";
		my_print_database();
?>
</div>
</BODY>
</HTML>