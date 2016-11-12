<?php
require "lib/mail.class.php";
//Chargement du model
include_once('app/model/home.php');

class Controller extends appController
{

  function __construct()
  {
    parent::__construct();
    // include du model
    $this->model = new Model();

    // si on est sur le module = home et qu'on reçoit un POST
    if (isset($_POST['email']))
    {
      $email = $_POST["email"];
      $name = $_POST["name"];
      $job = $_POST["job"];
      $message = $_POST["message"];

      // appel de la methode insertContact
      $this->insertContact($email, $name, $job, $message);
    }
    else if(isset($_POST['newsletter_mail'])){
      $email = $_POST['newsletter_mail'];

      $this->insertNewsletter($email);
    }
    else{
      $this->index(0,5);
    }

  }

  function index($limite, $offset)
  {
    define("PAGE_TITLE", "Page d'attente Pronto !");
    $this->load->view('home', 'home.php');
  }

  function insertContact ($email, $name, $job, $message)
  {
    //on appelle la methode contact dans du model
    $data = $this->model->contact($email, $name, $job, $message);

    // si return true on passe la notif ok dans l'url
    if($data)
    {
      header("Location:?module=home&contact=ok");
    }
    else
    {
      header("Location:?module=home&contact=nok");
    }
  }
  function insertNewsletter ($email){

      try {
        $mail_obj = new Mail('sharon.colin@eemi.com', 'Pronto', 'sharon.colin@eemi.com');
        $mail_obj->ajouter_destinataire($email);
        $mail_obj->contenu('Newsletter Pronto','','<p>Vous êtes bien inscris à la <strong>newsletter</strong></p>');
        if($mail_obj->envoyer()){
          require 'app/model/newsletter.php';
          $newsletter_obj = new Newsletter();
          $newsletter_obj->saveNewsletterMail($email);
          if($newsletter_obj){
            header('location: index.php?module=home&newsletter=ok');
          }else{
            header('location: index.php?module=home&newsletter=nok');
          }
        }
      } catch (Exception $e) {
        header('location: index.php?module=home&newsletter=nok');
      }

    }
}
