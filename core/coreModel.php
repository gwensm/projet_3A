<?php
  class coreModel extends core
  {

    function __construct()
    {
      try
      {
        $dns = 'mysql:host=localhost;dbname=angehrn';
        $utilisateur = 'angehrn';
        $motDePasse = '85715';

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

  }
