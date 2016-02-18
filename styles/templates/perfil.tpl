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
              <input type="text" class="form-control" value="{$smarty.session.user}" id="useredit" disabled="">
            </div>
            <label  for="useredit">Archivo:</label>
            <input name="file" type="file" id="image" onChange="ver(form.file.value)">
            <div class="form-group">
              <label  for="emailedit">Email:</label>
              <input type="email" class="form-control" id="emailedit" value="{$smarty.session.email}" >
            </div>
            <div class="form-group">
              <label  for="passedit">Password:</label>
              <input type="password" class="form-control" id="passedit" value="" >
            </div>
            <div class="form-group">
              <label  for="passedit">Permisos:</label>
              <input type="text" class="form-control" id="roledit" disabled {if $smarty.session.rol == 1} value="Administrador"
              {elseif $smarty.session.rol == 2} value="Editor" {elseif $smarty.session.rol == 3} value="Invitado" {else} value="No tienes Permisos envia un ticket al Administador" {/if}>
            </div>
            <button type="submit" onclick="cambiarimagen()" class="btn btn-default">Cambiar datos</button>
            </form>
          </div><!-- /.box-body -->
        </div>
      </div>
