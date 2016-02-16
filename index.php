<?php
$view = isset($_GET['p']) ? $_GET['p'] : 'index';

include('core/core.php');
require('core/libs/smarty/Smarty.class.php');

  if(file_exists('core/controllers/'.$view.'Controller.php')){
    include('core/controllers/'.$view.'Controller.php');
  }else{
    include('core/controllers/404Controller.php');
  }


 ?>
