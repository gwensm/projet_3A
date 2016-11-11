<?php
  class coreController extends core
  {
    public $load;
    public $model;

    function __construct()
    {
      $this->load = new coreView();
    }
  }
