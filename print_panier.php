<?php
session_start(); 
	function print_panier()
	{
		if($_SESSION['panier'])
		{
		 $mytab= unserialize(file_get_contents("database/element"));
		foreach ($_SESSION['panier'] as $elem)
		 {
		 	$name = $elem;
		 	foreach($mytab as $thename)
		 	{
		 		if($name === $thename['name'])
		 		{
		 		$link = $thename['link'];
		 		echo"<div class= 'dataelem'><img id= 'small' SRC = $link></div>";
		 		}
		 	}
		}
		}
	}