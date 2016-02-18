<?php /* Smarty version 3.1.27, created on 2016-02-17 15:33:39
         compiled from "C:\xampp\htdocs\db\styles\templates\menu\balances.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2153556c4d9236443d8_27081313%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd712fc85c0533e8c122248b6bb238499b81b6f87' => 
    array (
      0 => 'C:\\xampp\\htdocs\\db\\styles\\templates\\menu\\balances.tpl',
      1 => 1455741128,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2153556c4d9236443d8_27081313',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56c4d9236ad0f5_37338959',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56c4d9236ad0f5_37338959')) {
function content_56c4d9236ad0f5_37338959 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2153556c4d9236443d8_27081313';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Prueba</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="styles/css/modal.css">
    <?php echo '<script'; ?>
 src="styles/js/status.js"><?php echo '</script'; ?>
>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
  </head>
  <body onload="principio()" class="hold-transition skin-blue sidebar-mini" >
    <?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<!-- ventana modal de cambio de perfil -->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
<?php echo $_smarty_tpl->getSubTemplate ("perfil.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

          <h1>
            Inicio
            <small>Panel Inicio</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Inicio</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->

          <!-- Main row -->
          <div class="row" >
            <!-- Left col -->
            <section class="col-lg-12 connectedSortable">
              <!-- Custom tabs (Charts with tabs)-->
              <div class="nav-tabs-custom">
                <!-- Tabs within a box -->
                <ul class="nav nav-tabs pull-right">
                  <!--<li ><a href="#revenue-chart" data-toggle="tab">Area</a></li>-->
                  <li class="active"><a href="#sales-chart" data-toggle="tab">Inicio</a></li>
                  <li class="pull-left header"><i class="fa fa-inbox"></i>Bienvenido</li>
                </ul>

                <div class="box-body">
                <div class="box box-solid box-danger">
                        <div class="box-header">
                          <h3 class="box-title">Bienvenido <?php echo $_SESSION['user'];?>
</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                          <h4>Puedes usar esta apliacion para poder monitorear el movimiento de la empresa! si tienes algun problema puedes enviarnos un ticket en $_tikets.</h4>
                        </div><!-- /.box-body -->
                      </div>
                      </div><!-- /.box-body -->
                  <!-- Morris chart - Sales -->
                  <!--<div class="chart tab-pane " id="revenue-chart" style="position: relative; height: 300px;"></div>
                  <div class="chart tab-pane active" id="sales-chart" style="position: relative; height: 300px;"></div>-->
                </div>
              </div><!-- /.nav-tabs-custom -->
              <!-- TO DO List -->

              <!-- quick email widget -->


            </section><!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">

              <!-- Map box -->

              <!-- /.box -->

              <!-- solid sales graph -->

                <div class="box-body border-radius-none">
                  <div class="chart" id="line-chart" style="height: 0px;"></div>
                </div ><!-- /.box-body -->
            </section><!-- right col -->
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <?php echo '<script'; ?>
 src="plugins/jQuery/jQuery-2.1.4.min.js"><?php echo '</script'; ?>
>
    <!-- jQuery UI 1.11.4 -->
    <?php echo '<script'; ?>
 src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"><?php echo '</script'; ?>
>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <?php echo '<script'; ?>
>
      $.widget.bridge('uibutton', $.ui.button);
    <?php echo '</script'; ?>
>
    <!-- Bootstrap 3.3.5 -->
    <?php echo '<script'; ?>
 src="bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!-- Morris.js charts -->
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="plugins/morris/morris.min.js"><?php echo '</script'; ?>
>
    <!-- Sparkline -->
    <?php echo '<script'; ?>
 src="plugins/sparkline/jquery.sparkline.min.js"><?php echo '</script'; ?>
>
    <!-- jvectormap -->
    <?php echo '<script'; ?>
 src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"><?php echo '</script'; ?>
>
    <!-- jQuery Knob Chart -->
    <?php echo '<script'; ?>
 src="plugins/knob/jquery.knob.js"><?php echo '</script'; ?>
>
    <!-- daterangepicker -->
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="plugins/daterangepicker/daterangepicker.js"><?php echo '</script'; ?>
>
    <!-- datepicker -->
    <?php echo '<script'; ?>
 src="plugins/datepicker/bootstrap-datepicker.js"><?php echo '</script'; ?>
>
    <!-- Bootstrap WYSIHTML5 -->
    <?php echo '<script'; ?>
 src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"><?php echo '</script'; ?>
>
    <!-- Slimscroll -->
    <?php echo '<script'; ?>
 src="plugins/slimScroll/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>
    <!-- FastClick -->
    <?php echo '<script'; ?>
 src="plugins/fastclick/fastclick.min.js"><?php echo '</script'; ?>
>
    <!-- AdminLTE App -->
    <?php echo '<script'; ?>
 src="dist/js/app.min.js"><?php echo '</script'; ?>
>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <?php echo '<script'; ?>
 src="dist/js/pages/dashboard.js"><?php echo '</script'; ?>
>
    <!-- AdminLTE for demo purposes -->
    <?php echo '<script'; ?>
 src="dist/js/demo.js"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
?>