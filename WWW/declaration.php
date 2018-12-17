<!DOCTYPE html>
<html lang="fr" >
	<head>
		<meta charset="UTF-8">
		<title>DUDH | Déclaration complète</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body data-hijacking="on" data-animation="scaleDown" class='declaration'>

<!--
	<section class="cd-section visible">
		<div>
			LE CONTENU
		</div>
	</section>

Attention : Le class "visible" n'est à écrire que sur la toute première page, mettre juste "cd-section" pour les autres.
 -->

 	<div class="consigne">
 		<h1>Consigne de lecture <br/>
 		de la Déclaration des Droits de l'Homme</h1>
 		<div class="fleche_content">
	 		<div class="fleche_icons">
	 			<?php
	 				include_once("_INC/fleche_haut.php");
	 			?>
	 		</div>
	 		<div class="fleche"> <h3>Flèche du haut</h3><p>Permet de revenir à la page précèdente</p></div>
	 		<div class="fleche_icons">
	 			<?php
	 				include_once("_INC/fleche_bas.php");
	 			?>
	 		</div>
	 		<div class="fleche"> <h3>Flèche du bas</h3><p>Permet d'aller à la page suivante</p></div></div>
 		</div>
 	</div>

 	<?php
	include_once ("_INC/illustration1.php");
	include_once ("_INC/preambule.php");
	include_once ("_INC/illustration2.php");
	include_once ('_INC/article1-2-3.php');
	include_once ('_INC/article4-5-6.php');
	include_once ("_INC/illustration3.php");
	include_once ('_INC/article7-8.php');
	include_once ('_INC/article9-10-11.php');
	include_once ('_INC/article12-13-14.php');
	include_once ("_INC/illustration4.php");

	include_once ('_INC/article15-16.php');
	include_once ('_INC/article17-18.php');
	include_once ('_INC/article19-20-21.php');
	include_once ("_INC/illustration5.php");
	include_once "_INC/article22-23-24.php";
	include_once "_INC/article25-26.php";
	include_once ("_INC/illustration6.php");
	include_once "_INC/article27-28-29.php";
	include_once "_INC/article30.php";
	include_once ("_INC/illustration7.php");
	?>

	<a class="credits" href="credits.php">Mentions légales</a>
	<script src="js/app.js"></script>
	</body>
</html>