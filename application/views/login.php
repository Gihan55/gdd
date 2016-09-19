<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>JmS | Login</title>

    <link href="<?php echo base_url('assets'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets'); ?>/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo base_url('assets'); ?>/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url('assets'); ?>/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen  animated fadeInDown">
    <div>
        <div>

            <h1 class="logo-name">
                JmS
            </h1>

        </div>
        <h3 class="m-t-md">Applied Journal Management System</h3>

        <p class="m-t-md">Log in</p>
        <?php if (isset($login_fail)): ?>
            <div class="alert alert-danger alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <?=$login_fail?>
            </div>
        <?php endif; ?>

        <form id="login_form" class="m-t" role="form" action="<?= base_url('index.php'); ?>/AccountHandle/login"
              method="POST">
            <div class="form-group">
                <input name="Username" type="text" class="form-control" placeholder="Username">
            </div>
            <div class="form-group">
                <input name="Password" type="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group"><p>
                    <input type="checkbox" name="remember" value="remember"/> Remember Me</p>
            </div>
            <button type="submit" name="submit" class="btn btn-primary block full-width m-b">Login</button>

            <a href="<?= base_url('/index.php/users/forgot_password') ?>">
                <small>Forgot password?</small>
            </a>
            <div><br/>
                <a href="<?= base_url('/index.php/users/register/author') ?>" target="_blank"
                   class="btn btn-primary block full-width m-b">New Author</a>
            </div>
        </form>

    </div>
</div>

<!-- Mainly scripts -->
<script src="<?php echo base_url('assets'); ?>/js/jquery-2.1.1.js"></script>
<script src="<?php echo base_url('assets'); ?>/js/bootstrap.min.js"></script>

<!-- Jquery Validate -->
<script src="<?php echo base_url('assets'); ?>/js/plugins/validate/jquery.validate.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $("#login_form").validate({
            rules: {
                username: {
                    required: true,
                    minlength: 3
                },
                password: {
                    required: true,
                    minlength: 3
                }
            }
        });
    });
</script>

</body>

</html>
