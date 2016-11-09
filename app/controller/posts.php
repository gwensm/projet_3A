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
    $this->model = new Model();

    if (isset($_GET['page'])){
      if ($_GET['page']=='article'){
        if (isset($_GET['id'])){
          //Action view
          $this->view($_GET['id']);
        }else{
          $this->page404();
        }
      }else{
        $this->page404();
      }
    }else{
      $this->index(0,5);
    }
  }

  function index($limite, $offset){
    $data = $this->model->postList($limite,$offset);
    define("PAGE_TITLE", "Liste des articles");
    $this->load->view('posts', 'index.php', $data);
  }

  function view($id){
    $data = $this->model->postRead($id);
    define("PAGE_TITLE", "Détail article");
    $this->load->view('posts', 'view.php', $data);
  }

  function page404(){
    $this->load->view('404.php');
  }
}
