<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Photo Gallery </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<?php include_once("Shared/header_user.php");  ?>

<?php include_once ("Shared/navigationbar_user.php"); ?>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Home</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <?php
        $dataVolumeUsedTodays = $dataVolumeUsedToday;
        $dataVolumeRemainingTodays = $dataVolumeRemainingToday;
        $totalStorageUseds = $totalStorageUsed;
        $totalStorageRemainings = $totalStorageRemaining;
        ?>

<!--        --><?php //echo 'Data Volume Used Today= '. $dataVolumeUsedToday; ?>
<!--        --><?php //echo 'Data Volume Remaining Today= '.$dataVolumeRemainingToday; ?>
<!--        --><?php //echo 'Total Data Storage Used= '.$totalStorageUsed; ?>
<!--        --><?php //echo 'Total Data Storage Remaining= '.$totalStorageRemaining; ?>

<!--        <div id="dom-target" style="display: none;">-->
<!--            --><?php
//            $output = $volumeUsed; // Again, do some operation, get the output.
//            echo htmlspecialchars($output); /* You have to escape because the result
//                                           will not be valid HTML otherwise. */
//            ?>
<!--        </div>-->

        <!-- Main content -->
        <section class="content">


            <div class="row">
                <div class="col-md-6">
                    <!-- Line chart -->

                    <!-- /.box -->

                    <!-- Area chart -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <i class="fa fa-bar-chart-o"></i>

                            <h3 class="box-title">Total Storage	</h3>

                            <div class="box-tools pull-right">
                                <!--                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>-->
                                <!--                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>-->
                            </div>
                        </div>
                        <div class="box-body">
                            <div id="storage-donut-chart" style="height: 300px;"></div>
                        </div>
                        <!-- /.box-body-->
                    </div>
                    <!-- /.box -->

                </div>
                <!-- /.col -->

                <div class="col-md-6">
                    <!-- Bar chart -->

                    <!-- Donut chart -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <i class="fa fa-bar-chart-o"></i>

                            <h3 class="box-title">Data Volume Used today</h3>

                            <div class="box-tools pull-right">
<!--                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>-->
<!--                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>-->
                            </div>
                        </div>
                        <div class="box-body">
                            <div id="volume-donut-chart" style="height: 300px;"></div>
                        </div>
                        <!-- /.box-body-->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>

            <div class="row">
                <div class="box box-primary">
                    <table id="example1" class="table table-bordered table-striped ">
                        <thead>
                        <tr>

                            <th>Total Storage</th>
                            <th>Storage Used</th>
                            <th>Storage Remaining</th>

                            <th>Total Data Volume</th>
                            <th>Data Volume Used today</th>
                            <th>Data Volume Remaining for today</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td>10</td>
                            <td><?php echo $totalStorageUsed; ?></td>
                            <td><?php echo $totalStorageRemaining; ?></td>

                            <td>25</td>
                            <td><?php echo $dataVolumeUsedToday; ?></td>
                            <td><?php echo $dataVolumeRemainingToday; ?></td>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->




        <!-- /.form-group -->

        <!-- /.tab-pane -->
    </div>
    </aside>

    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url(); ?>assets/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url(); ?>assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url(); ?>assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>


<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
<!-- FLOT CHARTS -->
<script src="<?php echo base_url(); ?>assets/bower_components/Flot/jquery.flot.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="<?php echo base_url(); ?>assets/bower_components/Flot/jquery.flot.resize.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="<?php echo base_url(); ?>assets/bower_components/Flot/jquery.flot.pie.js"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="<?php echo base_url(); ?>assets/bower_components/Flot/jquery.flot.categories.js"></script>
<script>
    $(function () {

        /*
         * DONUT CHART
         * -----------
         */

        var num = <?php echo $dataVolumeRemainingTodays ?>;

        var volumeUsedData = [
            { label: 'Remaining', data: <?php echo $dataVolumeRemainingTodays ?>, color: '#3c8dbc' },

            { label: 'Used', data: <?php echo $dataVolumeUsedTodays ?>, color: '#f56954' }
        ]

        var storageUsedData = [
            { label: 'Free', data: <?php echo $totalStorageRemainings ?>, color: '#3c8dbc' },

            { label: 'Used', data: <?php echo $totalStorageUseds ?>, color: '#f56954' }
        ]
        $.plot('#storage-donut-chart', storageUsedData, {
            series: {
                pie: {
                    show       : true,
                    radius     : 1,
                    innerRadius: 0.5,
                    label      : {
                        show     : true,
                        radius   : 2 / 3,
                        formatter: labelFormatter,
                        threshold: 0.1
                    }

                }
            },
            legend: {
                show: false
            }
        })
        $.plot('#volume-donut-chart', volumeUsedData, {
            series: {
                pie: {
                    show       : true,
                    radius     : 1,
                    innerRadius: 0.5,
                    label      : {
                        show     : true,
                        radius   : 2 / 3,
                        formatter: labelFormatter,
                        threshold: 0.1
                    }

                }
            },
            legend: {
                show: false
            }
        })
        /*
         * END DONUT CHART
         */

    })

    /*
     * Custom Label formatter
     * ----------------------
     */
    function labelFormatter(label, series) {
        return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
            + label
            + '<br>'
            + Math.round(series.percent) + '%</div>'
    }
</script>
</body>

<?php  include_once ("Shared/footer_portal.php");   ?>

</html>


