<?php
  //Paramétrage des erreurs
  ini_set('display_errors', 1);
  error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

  //Chargement des paramètres
  include_once('app/config/config.inc.php');

  //Chargement du core
  include_once('core/core.php');
  include_once('core/coreController.php');
  include_once('core/coreModel.php');
  include_once('core/coreView.php');

  //Chargement de l'application
  include_once('app/appController.php');
  include_once('app/appModel.php');

  //Lancement de l'application
  include_once('app/app.php');
