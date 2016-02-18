<?php /* Smarty version 3.1.27, created on 2016-02-17 22:38:42
         compiled from "C:\xampp\htdocs\db\styles\templates\perfil.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2361256c53cc2ae5817_77494390%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c84775a1f34c2e5f3cd8bad47d72d2fced3f8f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\db\\styles\\templates\\perfil.tpl',
      1 => 1455766607,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2361256c53cc2ae5817_77494390',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56c53cc2b47fb8_05999795',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56c53cc2b47fb8_05999795')) {
function content_56c53cc2b47fb8_05999795 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2361256c53cc2ae5817_77494390';
?>
<div id="cambioperfil"  class="modal" >
  <div class="box box-success modal-contenido">
          <div class="box-header with-border">
            <ul class="nav  pull-right">
              <!--<li ><a href="#revenue-chart" data-toggle="tab">Area</a></li>-->
              <li class="active" onclick="ocultarVentana()"><a href="#"  data-toggle="tab"><i class="fa fa-times-circle fa-2x"></i></a></li>
            </ul>

            <h3 class="box-title">Edita tu Perfil</h3>
          </div><!-- /.box-header -->
          <div class="box-body">
            <form role="form">
            <div class="form-group">
              <label  for="useredit">Nombre de Usuario:</label>
              <input type="text" class="form-control" value="<?php echo $_SESSION['user'];?>
" id="useredit" disabled="">
            </div>
            <label  for="useredit">Archivo:</label>
            <input name="file" type="file" id="image" onChange="ver(form.file.value)">
            <div class="form-group">
              <label  for="emailedit">Email:</label>
              <input type="email" class="form-control" id="emailedit" value="<?php echo $_SESSION['email'];?>
" >
            </div>
            <div class="form-group">
              <label  for="passedit">Password:</label>
              <input type="password" class="form-control" id="passedit" value="" >
            </div>
            <div class="form-group">
              <label  for="passedit">Permisos:</label>
              <input type="text" class="form-control" id="roledit" disabled <?php if ($_SESSION['rol'] == 1) {?> value="Administrador"
              <?php } elseif ($_SESSION['rol'] == 2) {?> value="Editor" <?php } elseif ($_SESSION['rol'] == 3) {?> value="Invitado" <?php } else { ?> value="No tienes Permisos envia un ticket al Administador" <?php }?>>
            </div>
            <button type="submit" onclick="cambiarimagen()" class="btn btn-default">Cambiar datos</button>
            </form>
          </div><!-- /.box-body -->
        </div>
      </div>
<?php }
}
?>