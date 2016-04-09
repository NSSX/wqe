<?php include "redirection.php"; admin_test(); ?>
<?php session_start(); ?>
<HTML>
<HEAD>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="index.css">
</HEAD>
<BODY>
<div class= "top"> 
<div><img id = "imgtop" SRC= "http://practicinganthropology.org/wp-content/uploads/2010/08/napa-logo-no-text-transparent-2000x800.png"></div>
<div id="accueil"><a id = "accpolice" href="http://e3r10p11.42.fr:8080/rush/index.php"><i>Accueil</i></a></div>
<div id="panier"><i id="panierpolice">Panier</i></div>
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
PAGE ADMIN
<form id="form" action="modif_focus.php" method="POST">
        <?php include 'actual_elem.php'; ?>
  		Name: <input type="text" name="actual" value= "<?php echo actual('name'); ?>"/>
        <br />
        <br />
        New Name: <input type="text" name="name" value= "<?php echo actual('name'); ?>"/>
        <br />
        <br />
         PRIX: <input type="text" name="price" value= "<?php echo actual('price'); ?>"/>
        <br />
        <br />
        <img id='small' SRC = "<?php echo actual('link'); ?>">
       <br />
        <br />
        IMG LINK: <input type="text" name="link" value= "<?php echo actual('link'); ?>"/>
        <br />
        <br />
        DESCRIPTION: <input type="text" name="description" value= "<?php echo actual('description'); ?>"/>
        <br />
        <br />
        <input type="submit" name="submit" value="OK">
</form>
</div>
</BODY>
</HTML>