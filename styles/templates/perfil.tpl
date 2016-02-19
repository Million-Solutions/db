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
                        <div id="ajax"></div>
            <form role="form" action="subirimg.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label  for="useredit">Nombre de Usuario:</label>
              <input type="text" class="form-control" value="{$smarty.session.user}" name="useredit" disabled="">
            </div>
            <label  for="file">Archivo:</label>
            <input name="file" type="file"  >
            <div class="form-group">
              <label  for="emailedit">Email:</label>
              <input type="email" class="form-control" name="emailedit" value="{$smarty.session.email}" >
            </div>
            <div class="form-group">
              <label  for="passedit">Password:</label>
              <input type="password" class="form-control" name="passedit" value="" >
            </div>
            <div class="form-group">
              <label  for="passedit">Permisos:</label>
              <input type="text" class="form-control" name="roledit" disabled {if $smarty.session.rol == 1} value="Administrador"
              {elseif $smarty.session.rol == 2} value="Editor" {elseif $smarty.session.rol == 3} value="Invitado" {else} value="No tienes Permisos envia un ticket al Administador" {/if}>
            </div>
            <button type="submit" class="btn btn-default">Cambiar datos</button>
            </form>

          </div><!-- /.box-body -->
        </div>
      </div>
