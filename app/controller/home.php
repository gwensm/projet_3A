<?php
//Chargement du model
include_once('app/model/home.php');

class Controller
{
  public $load;
  public $model;

  function __construct()
  {
    $this->load = new Load();
    $this->model = new Model();

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
      $this->index(0,5);
    }
  }

  function index($limite, $offset)
  {
    define("PAGE_TITLE", "Page d'attente Pronto !");
    $this->load->view('home', 'home.php');
  }

  function insertData ($email, $name, $job, $message)
  {
    $data = $this->model->contact($email, $name, $job, $message);
    
    if($data)
    {
      return "ma notif de la mort qui tue";
      $this->load->view('home', 'home.php');
    }
    else
    {
      echo "tutomala";
    }
  }

}
