<?php
//Chargement du model
//include_once('app/model/posts.php');

class Controller
{
  public $load;
  public $model;

  function __construct()
  {
    $this->load = new Load();

    $this->index(0,5);
  }

  function index($limite, $offset){
    $data = "";
    define("PAGE_TITLE", "Page d'attente Pronto !");
    $this->load->view('home', 'home.php', $data);
  }

}
