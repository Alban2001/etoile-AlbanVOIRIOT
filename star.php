<?php

/*** AFFICHAGE D'UNE ETOILE
****
**** AUTEUR : Alban VOIRIOT
****
**** LANGAGES : HTML5, PHP7
**** 
**** DATE : 06/05/2022 
***/

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Affichage d'une étoile</title>
</head>
<body>

<h1>Affichage d'une l'étoile :</h1><br><br>

<form action="" method="post">
	<label>Veuillez choisir un nombre : </label>
	<input type="number" name="tailleEtoile" min="0">
	<input type="submit" value="Actualiser">
	<br><br>
</form>

<?php
	
	// Si le champ est vide, alors affecter la variable $tailleEtoile à 0
	if(empty($_POST["tailleEtoile"])){
		$tailleEtoile=0;
	}
	else{	// Sinon, affecter la variable $tailleEtoile à celle du champ
		$tailleEtoile=$_POST["tailleEtoile"];
	}
	
	// Si la variable $tailleEtoile est égale à 0, alors on n'affiche rien (pas d'étoile)
	if($tailleEtoile==0){
		echo "";
	}
	else{	// Sinon, on affiche de l'étoile en fonction de la taille choisie
		afficherEtoile($tailleEtoile);
	}
	

	function afficherEtoile($tailleEtoile){


	/*************** ZONE 1 *********************/

	$zone1=1;

	for(; $zone1 <= $tailleEtoile; $zone1++){
		for($j=$tailleEtoile; $j >= $zone1; $j--){
			echo ("&nbsp&nbsp");
		}
		for($a=$tailleEtoile; $a >= 1; $a--){
			echo ("&nbsp&nbsp&nbsp&nbsp&nbsp");
		}

	echo"*";

	for($i=0; $i < $zone1; $i++){
		echo ("&nbsp&nbsp&nbsp&nbsp");
	}
	
	echo "*";
	
	echo "<br>";
	
	}

	/*******************************************/


	/*************** ZONE 2 *********************/

	for ($i=0; $i < $tailleEtoile; $i++) { 
		echo "***";
	}
	for ($i=0; $i < $tailleEtoile; $i++) { 
		echo ("&nbsp&nbsp&nbsp&nbsp");
	}
	for ($i=0; $i < $tailleEtoile; $i++) { 
		echo "***";
	}

	echo "<br>";

	/*******************************************/

	/*************** ZONE 3 *********************/

	$zone3=1;

	for(; $zone3 < $tailleEtoile; $zone3++){
		for($j=1; $j <= $zone3; $j++){
			echo ("&nbsp&nbsp");
		}
		echo"*";

	for($j=0; $j < $tailleEtoile; $j++){
		echo ("&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp");
	}

	$i=$tailleEtoile;

	for(; $i > $zone3; $i--){
		echo ("&nbsp&nbsp&nbsp&nbsp");
	}

	echo "*";

	echo "<br>";

	}

	/*******************************************/

	/*************** ZONE 4 *********************/

	$zone4=$tailleEtoile;

	for(; $zone4 >= 1; $zone4--){
		for($j=1; $j <= $zone4; $j++){
			echo ("&nbsp&nbsp");
		}
		echo"*";

	for($j=0; $j < $tailleEtoile; $j++){
		echo ("&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp");
	}

	$i=$tailleEtoile;

	for(; $i > $zone4; $i--){
		echo ("&nbsp&nbsp&nbsp&nbsp");
	}

	echo "*";

	echo "<br>";	
		
	}

	/*******************************************/

	/*************** ZONE 5 *********************/

	for ($i=0; $i < $tailleEtoile; $i++) { 
		echo "***";
	}
	for ($i=0; $i < $tailleEtoile; $i++) { 
		echo ("&nbsp&nbsp&nbsp&nbsp");
	}
	for ($i=0; $i < $tailleEtoile; $i++) { 
		echo "***";
	}

	echo "<br>";

	/*******************************************/

	/*************** ZONE 6 *********************/

	$zone6=1;

	for(; $zone6 <= $tailleEtoile; $zone6++){
		for($j=1; $j <= $zone6; $j++){
			echo ("&nbsp&nbsp");
		}
		for($a=$tailleEtoile; $a >= 1; $a--){
			echo ("&nbsp&nbsp&nbsp&nbsp&nbsp");
		}
		echo"*";

	$i=$tailleEtoile;

	for(; $i >= $zone6; $i--){
		echo ("&nbsp&nbsp&nbsp&nbsp");
	}
	
	echo "*";

	echo "<br>";
	
	}

	/*******************************************/

	}

?>

</body>
</html>
