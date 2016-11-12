<?php

class Model extends appModel
{
	public $pdo;

	function contact($email, $name, $job, $message)
	{
		try
		{
			$query = $this->pdo->prepare("INSERT INTO `Pronto_contact`
																			(`contact_name`, `contact_job`, `contact_mail`, `contact_msg`)
																		VALUES
																			(:nom, :job ,:mail, :message)");

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
