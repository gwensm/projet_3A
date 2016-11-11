<?php

class Model
{
	public $pdo;

	function __construct()
	{
		try
		{
			$dns = 'mysql:host=localhost;dbname=test_projet_3a';
			$utilisateur = 'root';
			$motDePasse = 'localhost';
			
			$option = array(
							PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
							PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
			
			$this->pdo = new PDO ( $dns, $utilisateur, $motDePasse, $option );
		}
		catch(Exception $e)
		{
			die("Problème MySQL !");
		}
	}

	function contact($email, $name, $job, $message)
	{
		try
		{	
			$query = $this->pdo->prepare("	INSERT INTO `contact`( `nom`, `job`, `mail`, `message`) 	
										VALUES (:nom, :job ,:mail, :message)");

			$query->bindValue(':nom', $name, PDO::PARAM_STR);
			$query->bindValue(':job', $job, PDO::PARAM_STR);
			$query->bindValue(':mail', $email, PDO::PARAM_STR);
			$query->bindValue(':message', $message, PDO::PARAM_STR);

			$retour = $query->execute();
			return true;
		}
		catch (Exception $e)
		{
			return false;
		}
	}
}