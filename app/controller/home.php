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
    
    // include du model
    $this->model = new Model();

    // si on est sur le module = home et qu'on reçoit un POST
    if (isset($_POST['email']))
    {
      $email = $_POST["email"];
      $name = $_POST["name"];
      $job = $_POST["job"];
      $message = $_POST["message"];

      // appel de la methode insertData
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
    //on appelle la methode contact dans du model
    $data = $this->model->contact($email, $name, $job, $message);
    
    // si return true on passe la notif ok dans l'url
    if($data)
    {
      header("Location:?module=home&not=ok");
    }
    else
    {
      header("Location:?module=home&not=nok");
    }
  }

}
