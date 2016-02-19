<?php

if($_POST){

  $acceso = new Acceso();
  $acceso->Login();
    $entrar = new Salir();
    $entrar->Entrar();
    if($_SESSION['status'] == 1){ $_SESSION['status'] = 'Conectado'; }else{ $_SESSION['status'] = 'Desconetado'; }
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
