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
    <!-- jQuery library -->
    <script src="<?php echo base_url(); ?>assets/jquery/jquery.js"></script>

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
<br>
<?php include_once ("Shared/header.php"); ?>
<div class="register-box">
    <div class="register-logo">
        <b> </b>
    </div>

    <div class="register-box-body">
        <p class="login-box-msg">Register a new membership</p>

        <form action="<?php echo base_url(); ?>index.php/photoController/signup" method="post">
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="User Name" name="username">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="email" class="form-control" placeholder="Email" name="email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>

<!--            <div class="form-group has-feedback">-->
<!--                <div class="fc-row">-->
<!--                    <div class="radio">-->
<!--                        <label>-->
<!--                            <input type="radio" name="gender" id="optionsRadios1" value="Male" checked="">-->
<!--                            Male-->
<!--                        </label>-->
<!--                    </div>-->
<!--                    <div class="radio">-->
<!--                        <label>-->
<!--                            <input type="radio" name="gender" id="optionsRadios2" value="Female">-->
<!--                            Female-->
<!--                        </label>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Password" name="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Retype password" name="confirmpassword">
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            </div>



<!--            <div class="form-group">-->
<!--                <label class="control-label visible-ie8 visible-ie9">Submit Captcha Code</label>-->
<!--                <p style="padding-left: 50px" id="captImg">--><?php //echo $captchaImg; ?><!--</p>-->
<!--                <p>Can't read the image? click <a href="javascript:void(0);" class="refreshCaptcha">here</a> to refresh.</p>-->
<!--                <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" required="true" placeholder="Captcha" name="captcha">-->
<!--            </div>-->

            <div class="row">
                <!-- /.col -->
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                    <?php
                    echo $this->session->flashdata("error");
                    ?>
                </div>
                <!-- /.col -->
            </div>
            <a href="<?php echo base_url(); ?>index.php/photoController/userlogin" class="text-center">I already have a membership</a>
        </form>
    </div>

</div>
<!-- /.form-box -->
</div>

<br>


<br>

<?php include_once ("Shared/footer.php"); ?>
</html>

<?php
$this->session->unset_userdata('username');
?>