<?php /* Smarty version 3.1.27, created on 2016-02-19 15:42:32
         compiled from "C:\xampp\htdocs\db\styles\templates\menu\graficos.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2191956c77e38b89158_25389397%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ed40fb5111d2df12da94b21eb62c1a32a7964a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\db\\styles\\templates\\menu\\graficos.tpl',
      1 => 1455914550,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2191956c77e38b89158_25389397',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56c77e38c1d8f3_88423433',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56c77e38c1d8f3_88423433')) {
function content_56c77e38c1d8f3_88423433 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2191956c77e38b89158_25389397';
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
              <div class="box box-danger col-lg-12" >
                <div class="box-header with-border">
                  <h3 class="box-title">Donut Chart</h3>
                  <div class="box-tools pull-right">
<!--                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>-->
                  </div>
                </div>
                <div><form class="form-inline" role="form">
                    <div class="form-group">
                      <label for="email">Escoga el rango de tiempo:</label>
                      <select id="select1" class="form-control">
                      <option value="p1-12">28 Ene - 28 Feb</option>
                    </select>
                    </div>
                    <div class="form-group">
                      <label for="empresa">Escoga la Empresa: </label>
                      <select id="select2" class="form-control">
                      <option value="1">Empresa Ochoa</option>
                    </select>
                    </div>
                    <button type="button" class="btn btn-default">Buscar</button>
                  </form></div>
                <div class="box-body">
                    <canvas id="pieChart" style="height:250px"></canvas>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
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
                  <div class="chart" id="line-chart"></div>
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
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-user bg-yellow"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                    <p>New phone +1(800)555-1234</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                    <p>nora@example.com</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-file-code-o bg-green"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                    <p>Execution time 5 seconds</p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Update Resume
                    <span class="label label-success pull-right">95%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Laravel Integration
                    <span class="label label-warning pull-right">50%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Back End Framework
                    <span class="label label-primary pull-right">68%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>
              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Allow mail redirect
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Other sets of options are available
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Expose author name in posts
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Allow the user to show his name in blog posts
                </p>
              </div><!-- /.form-group -->

              <h3 class="control-sidebar-heading">Chat Settings</h3>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Show me as online
                  <input type="checkbox" class="pull-right" checked>
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Turn off notifications
                  <input type="checkbox" class="pull-right">
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Delete chat history
                  <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                </label>
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
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
    <!-- ChartJS 1.0.1 -->
    <!-- jQuery 2.1.4 -->
    <?php echo '<script'; ?>
 src="plugins/jQuery/jQuery-2.1.4.min.js"><?php echo '</script'; ?>
>
    <!-- Bootstrap 3.3.5 -->
    <?php echo '<script'; ?>
 src="bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!-- ChartJS 1.0.1 -->
    <?php echo '<script'; ?>
 src="plugins/chartjs/Chart.min.js"><?php echo '</script'; ?>
>
    <!-- FastClick -->
    <?php echo '<script'; ?>
 src="plugins/fastclick/fastclick.min.js"><?php echo '</script'; ?>
>
    <!-- AdminLTE App -->
    <?php echo '<script'; ?>
 src="dist/js/app.min.js"><?php echo '</script'; ?>
>
    <!-- AdminLTE for demo purposes -->
    <?php echo '<script'; ?>
 src="dist/js/demo.js"><?php echo '</script'; ?>
>
    <!-- graficos -->
    <?php echo '<script'; ?>
 >
    window.onload = $(function () {
      alert("hola");
        //-------------
        //- PIE CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.

        var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
        var pieChart = new Chart(pieChartCanvas);
        var PieData = [
          {
            value: 700,
            color: "#f56954",
            highlight: "#f56954",
            label: "Chrome"
          },
        ];
        var pieOptions = {
          //Boolean - Whether we should show a stroke on each segment
          segmentShowStroke: true,
          //String - The colour of each segment stroke
          segmentStrokeColor: "#fff",
          //Number - The width of each segment stroke
          segmentStrokeWidth: 2,
          //Number - The percentage of the chart that we cut out of the middle
          percentageInnerCutout: 50, // This is 0 for Pie charts
          //Number - Amount of animation steps
          animationSteps: 100,
          //String - Animation easing effect
          animationEasing: "easeOutBounce",
          //Boolean - Whether we animate the rotation of the Doughnut
          animateRotate: true,
          //Boolean - Whether we animate scaling the Doughnut from the centre
          animateScale: false,
          //Boolean - whether to make the chart responsive to window resizing
          responsive: true,
          // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
          maintainAspectRatio: true,
          //String - A legend template
          
          legendTemplate: "<ul class=\"<?php echo '<%'; ?>
=name.toLowerCase()<?php echo '%>'; ?>
-legend\"><?php echo '<%'; ?>
 for (var i=0; i<segments.length; i++){<?php echo '%>'; ?>
<li><span style=\"background-color:<?php echo '<%'; ?>
=segments[i].fillColor<?php echo '%>'; ?>
\"></span><?php echo '<%'; ?>
if(segments[i].label){<?php echo '%>'; ?>
<?php echo '<%'; ?>
=segments[i].label<?php echo '%>'; ?>
<?php echo '<%'; ?>
}<?php echo '%>'; ?>
</li><?php echo '<%'; ?>
}<?php echo '%>'; ?>
</ul>"
        };
        
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        pieChart.Doughnut(PieData, pieOptions);

        barChartOptions.datasetFill = false;
        barChart.Bar(barChartData, barChartOptions);
      });
<?php echo '</script'; ?>
>
</body>

</html>
<?php }
}
?>