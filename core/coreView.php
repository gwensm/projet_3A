<?php
  class coreView
  {
    function view($module,$view,$data = null)
    {
      include 'app/view/' . $module . '/' . $view;
    }
  }
