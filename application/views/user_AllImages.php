<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> All Images |  | Photo Gallery</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

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

    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            width: 50%;
            border-radius: 5px;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        img {
            border-radius: 5px 5px 0 0;
        }

        .container {
            padding: 2px 16px;
        }
    </style>
</head>
<?php include_once("Shared/header_user.php");  ?>

<?php include_once("Shared/navigationbar_user.php"); ?>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

     <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">All Images</li>
            </ol>
        </section>


        <div class="box">

            <!-- /.box-header -->
            <div class="box-body">

                <div class="col-md-8">
                    <form method="post" action="<?php echo base_url(); ?>index.php/photoController/addImage" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>Upload Images:</label>
                            <input type="file" name="images[]" class="form-control">  <!--  multiple-->

                        </div>

                        <input type="submit" name="imgSubmit" class="btn btn-success" value="SUBMIT">
                        <?php
                        echo $errors;
                        ?>
                    </form>
                </div>
                <div class="col-md-4">
                    <table id="example1" class="table table-bordered table-striped ">
                        <thead>
                        <tr>

                            <th>Total Storage</th>
                            <th>Data Volume Used today</th>
                        </tr>
                        </thead>
                        <tbody>

                                <tr>
                                    <td><?php echo $dataUsed.'/10'; ?></td>
                                    <td><?php echo $volumeUsed.'/25'; ?></td>

                                </tr>
                        </tbody>
                    </table>
                    <?php if(!empty($gallery) && $gallery->num_rows() > 0){ ?>
                        <a href="<?php echo base_url(); ?>index.php/photoController/deleteAllImages"" class="badge badge-danger">Delete All Images</a>
                    <?php } ?>

                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <?php if(!empty($gallery) && $gallery->num_rows() > 0){ ?>
                                <div class="box-header">
                                    <h3 class="box-title">All Images</h3>
                                </div>
                                <div class="gallery-img">
                                    <?php foreach($gallery->result() as $imgRow){ ?>

                                        <div class="card" id="imgb_<?php echo $imgRow->id; ?>">
                                            <img src="<?php echo base_url('uploads/images/'.$imgRow->image_path); ?>" style="width: 90%" >
                                            <div class="container">
<!--                                                <a href="javascript:void(0);" class="badge badge-danger" onclick="deleteImage('<?php //echo $imgRow->id; ?>//')">delete</a>
-->
                                                <a href="<?php echo base_url(); ?>index.php/photoController/deleteImage/<?php echo $imgRow->id; ?>" onclick="return confirm('Are you sure?')" class="badge badge-danger">Delete</a>

                                                <p><?php echo $imgRow->date_time; ?></p>
                                            </div>
                                        </div>

                                    <?php } ?>
                                </div>
                            <?php } else { echo "No Image"; } ?>
                        </div>

                    </div>
                </div>


            </div>
            <!-- /.box-body -->
        </div>


    </div>
    </aside>

    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<script>
    function deleteImage(id){

        var result = confirm("Are you sure to delete?");
        alert('Some problem occurred, please try again.',result);

        if(result){
            $.post( "<?php echo base_url('/photoController/deleteImage'); ?>", {id:id}, function(resp) {
                if(resp == 'ok'){
                    $('#imgb_'+id).remove();
                    alert('The image has been removed from the gallery');
                }else{
                    alert('Some problem occurred, please try again.');
                }
            });
        } else {
            alert('Some problem occurred, please try again.');

        }
    }
</script>
<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>

<?php  include_once ("Shared/footer_portal.php");   ?>

</html>


