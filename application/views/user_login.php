<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard | Photo Gallery</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/square/blue.css">

    <!-- captcha refresh code -->
    <script>
        $(document).ready(function(){
            $('.refreshCaptcha').on('click', function(){
                $.get('<?php echo base_url().'index.php/photoController/refresh'; ?>', function(data){
                    $('#captImg').html(data);
                });
            });
        });
    </script>
</head>
<body>
<br>
<?php include_once ("Shared/header.php"); ?>

<div class="login-box">
    <div class="login-logo">
        <b> </b>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Enter User Name and Password</p>

        <form action="<?php echo base_url(); ?>index.php/photoController/login" method="post">
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="User Email" name="email">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Password" name="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">

                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    <?php
                    echo $this->session->flashdata("error");
                    ?>
                </div>
                <!-- /.col -->
            </div>
        </form>
<!--        <a href="--><?php //echo base_url(); ?><!--index.php/portal/reset_password_email">I forgot my password</a><br>-->
        <a href="<?php echo base_url(); ?>index.php/photoController/usersignup">Register a new membership</a><br>


    </div>
    <!-- /.login-box-body -->
</div>


<?php include_once ("Shared/footer.php"); ?>


<?php
$this->session->unset_userdata('username');
?>