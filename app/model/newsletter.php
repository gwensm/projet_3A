<?php
class Newsletter {
	private $pdo;
	public function __construct() {
		try {
			$config = require 'config/db_config.php';
			// connexion à la bdd
			$dns = 'mysql:host='. $config['host'] .';dbname='. $config['database'];
			$utilisateur = $config['user'];
			$motDePasse = $config['mdp'];
			// options de connexion
			$options = array(
							PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
							PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

			$this->pdo = new PDO($dns, $utilisateur, $motDePasse, $options);
		}
		catch(Exception $e) {
			die ($e->getMessage());
		}
	}

	public function saveNewsletterMail($email){
		try {
			$query = "INSERT INTO Pronto_newsletter (newsletter_mail) VALUES (:email)";
			$insert = $this->pdo->prepare($query);
			$insert->bindValue(':email', $email, PDO::PARAM_STR);
			$insert->execute();
			return true;
		} catch (Exception $e) {
			die($e->getMessage());
		}
		

	}

}