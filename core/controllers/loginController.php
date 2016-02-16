<?php

if($_POST){

  include('core/models/class.Acceso.php');
  $acceso = new Acceso();
  $acceso->Login();

  exit;
}else {

if(isset($_SESSION['id'])){

  $template = new Smarty();
  $template->display('index.tpl');
}else{

  $template = new Smarty();
  $template->display('login.tpl');
  #$template->display('pages/charts/chartjs.tpl');
}

}


 ?>
