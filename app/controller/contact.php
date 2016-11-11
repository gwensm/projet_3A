<?php

//chargement du model
include_once('../model/contact.php');

//var_dump($_POST);

class Controller
{
	public $load;
	public $model;

	function __construct()
	{
		$this->load = new Load();
		$this->model = new Model();

		//echo "<pre>";var_dump($this->model);echo "</pre>";
		
		//recup des parametres de  l'url
		if (isset($_POST['email']))
		{
			$email = $_POST["email"];
			$name = $_POST["name"];
			$job = $_POST["job"];
			$message = $_POST["message"];

			$this->insertData($email, $name, $job, $message);
		}
		else
		{
			$this->page404();
		}
	}

	function insertData ($email, $name, $job, $message)
	{
		$data = $this->model->contact($email, $name, $job, $message);
		
		if($data)
		{
			echo "tutobene";
		}
		else
		{
			echo "tutomala";
		}
	}

	function page404()
	{
		echo "404";
	}
}


$result = new Controller;