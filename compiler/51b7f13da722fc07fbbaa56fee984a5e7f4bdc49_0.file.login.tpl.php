<?php /* Smarty version 3.1.27, created on 2016-02-19 11:13:32
         compiled from "C:\xampp\htdocs\db\styles\templates\login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2648256c73f2c8fbce2_58703098%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51b7f13da722fc07fbbaa56fee984a5e7f4bdc49' => 
    array (
      0 => 'C:\\xampp\\htdocs\\db\\styles\\templates\\login.tpl',
      1 => 1455898411,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2648256c73f2c8fbce2_58703098',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56c73f2c949589_95856244',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56c73f2c949589_95856244')) {
function content_56c73f2c949589_95856244 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2648256c73f2c8fbce2_58703098';
?>
<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Inicio de Sesion</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

  </head>
<style>
body {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #eee;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>
  <body>
<center>
    <div class="container">
      <div id="ajax"></div>
      <form class="form-signin">
        <h2 class="form-signin-heading">Inicio de Sesión</h2>
        <label for="inputEmail" class="sr-only">Nombre de Usuario</label>
        <input type="text" id="user" value="" class="form-control" placeholder="Nombre de Usuario" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Contraseña</label>
        <input type="password" value="" id="pass" class="form-control" placeholder="Contraseña" required="">
        <div class="checkbox">
          <label>
            <input type="checkbox" id="session" value="1"> Recordarme
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" id="send_request" type="button">Iniciar Sesion</button>
      </form>
    </div> <!-- /container -->
</center>
    <?php echo '<script'; ?>
>
    window.onload = function(){
        document.getElementById('send_request').onclick = function(){
          var connect, user, pass, session, form, result;
          user = document.getElementById('user').value;
          pass = document.getElementById('pass').value;
          session  = document.getElementById('session').checked ? true : false;

          if(user != '' &&  pass != ''){

          form = 'user=' + user + '&pass=' + pass + '&session=' + session;
          connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
          connect.onreadystatechange = function(){
            if(connect.readyState == 4 && connect.status == 200){
                if(parseInt(connect.responseText) == 1){
                  result = '<div class="alert alert-success" role="alert">';
                  result += '<strong>CONECTADO </strong>Bienvenido, pronto estaras dentro.</div>';
                  location.href = 'index.php';
                  document.getElementById('ajax').innerHTML = result;

                }else{
                  result = '<div class="alert alert-danger" role="alert">';
                  result += '<strong>ERROR </strong>Las credenciales ingresadas son incorrectas</div>';
                  document.getElementById('ajax').innerHTML = result;
                }
            }else if(connect.readyState != 4){
              result = '<div class="alert alert-info" role="alert">';
              result += '<strong>Cargando</strong></div>';
              document.getElementById('ajax').innerHTML = result;
            }
          }
          connect.open('POST','?p=login',true);
          connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
          connect.send(form);
        }else{
          result = '<div class="alert alert-warning" role="alert">';
          result += '<strong>Datos Vacíos </strong>Por favor ingrese los datos</div>';
          document.getElementById('ajax').innerHTML = result;
        }
        }
    }
    <?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
?>