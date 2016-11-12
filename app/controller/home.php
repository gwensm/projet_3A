<?php
require "lib/mail.class.php";
//Chargement du model
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
    define("PAGE_TITLE", "Page d'attente Pronto !");
    $arrayVars = array();
    if (isset($_POST['newsletter_mail'])) {
      //On gère l'envoi de mail ici
      $email = $_POST['newsletter_mail'];
      try {
        $mail_obj = new Mail('sharon.colin@eemi.com', 'Pronto', 'sharon.colin@eemi.com');
        $mail_obj->ajouter_destinataire($email);
        $mail_obj->contenu('Newsletter Pronto','','<p>Vous êtes bien inscris à la <strong>newsletter</strong></p>');
        if($mail_obj->envoyer()){
          require 'app/model/newsletter.php';
          $newsletter_obj = new Newsletter();
          $newsletter_obj->saveNewsletterMail($email);
          header('location: index.php?module=home&newsletter=true');
        }
      } catch (Exception $e) {
         $arrayVars['msg_error'] = $e->getMessage();
      }
    }
    $this->load->view('home', 'home.php', $arrayVars);
  }

}
