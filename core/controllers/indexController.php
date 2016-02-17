<?php

if(isset($_SESSION['id'])){

  $template = new Smarty();
  $template->display('index.tpl');
  #$template->display('pages/charts/chartjs.tpl');
}else {
  $template = new Smarty();
  $template->display('login.tpl');
}

 ?>
