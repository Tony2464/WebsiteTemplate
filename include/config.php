<?php
try {
	$bdd = new PDO('mysql:host=localhost;dbname=cowork','root','root');//a changer pour le serveur : dbaname (nom de la base de donnees), nom utlisateur puis mdp de la bdd
  }catch(Exception $e) {
	die('Erreur : ' . $e->getMessage());
}
?>
