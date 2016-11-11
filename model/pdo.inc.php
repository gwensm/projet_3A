<?php
try
{
	$dns = 'mysql:host=localhost;dbname=test_projet_3a';
	$utilisateur = 'root';
	$motDePasse = 'localhost';
	
	$option = array(
					PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
					PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
	
	$pdo = new PDO ( $dns, $utilisateur, $motDePasse, $option );
}
catch(Exception $e)
{
	die("Problème MySQL !");
}