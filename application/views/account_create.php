<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url('assets'); ?>/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('assets'); ?>/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('assets'); ?>/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="<?php echo base_url('assets'); ?>/ico/favicon.png">
    <title>TSHOP - Bootstrap E-Commerce Parallax Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets'); ?>/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets'); ?>/css/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- include pace script for automatic web page progress bar  -->


    <script>
        paceOptions = {
            elements: true
        };
    </script>

    <script src="<?php echo base_url('assets'); ?>/js/pace.min.js"></script>
</head>

<body>


<!-- Modal Login start -->
<div class="modal signUpContent fade" id="ModalLogin" tabindex="-1" role="dialog">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
                <h3 class="modal-title-site text-center"> Login to TSHOP </h3>
            </div>
            <div class="modal-body">
                <div class="form-group login-username">
                    <div>
                        <input name="Username" id="login-user" class="form-control input" size="20"
                               placeholder="Enter Username" type="text">
                    </div>
                </div>
                <div class="form-group login-password">
                    <div>
                        <input name="Password" id="login-password" class="form-control input" size="20"
                               placeholder="Password" type="password">
                    </div>
                </div>

                <div>
                    <div>
                        <input name="submit" class="btn  btn-block btn-lg btn-primary" value="LOGIN" type="submit">
                    </div>
                </div>
                <!--userForm-->

            </div>
            <div class="modal-footer">
                <p class="text-center"> Not here before? <a data-toggle="modal" data-dismiss="modal"
                                                            href="#ModalSignup"> Sign Up. </a> <br>
                    <a href="forgot-password.html"> Lost your password? </a></p>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.Modal Login -->


<!-- Modal Signup start -->
<div class="modal signUpContent fade" id="ModalSignup" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
                <h3 class="modal-title-site text-center"> REGISTER </h3>
            </div>
            <div class="modal-body">
                <div class="control-group"><a class="fb_button btn  btn-block btn-lg " href="#"> SIGNUP WITH
                        FACEBOOK </a></div>
                <h5 style="padding:10px 0 10px 0;" class="text-center"> OR </h5>

                <div class="form-group reg-username">
                    <div>
                        <input name="login" class="form-control input" size="20" placeholder="Enter Username"
                               type="text">
                    </div>
                </div>
                <div class="form-group reg-email">
                    <div>
                        <input name="reg" class="form-control input" size="20" placeholder="Enter Email" type="text">
                    </div>
                </div>
                <div class="form-group reg-password">
                    <div>
                        <input name="password" class="form-control input" size="20" placeholder="Password"
                               type="password">
                    </div>
                </div>
                <div class="form-group">
                    <div>
                        <div class="checkbox login-remember">
                            <label>
                                <input name="rememberme" id="rememberme" value="forever" checked="checked"
                                       type="checkbox">
                                Remember Me </label>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <input name="submit" class="btn  btn-block btn-lg btn-primary" value="REGISTER" type="submit">
                    </div>
                </div>
                <!--userForm-->

            </div>
            <div class="modal-footer">
                <p class="text-center"> Already member? <a data-toggle="modal" data-dismiss="modal" href="#ModalLogin">
                        Sign in </a></p>
            </div>
        </div>
        <!-- /.modal-content -->

    </div>
    <!-- /.modal-dialog -->

</div>

<!-- Fixed navbar start -->
<div class="navbar navbar-tshop navbar-fixed-top megamenu" role="navigation">
<?php $this->load->view('partial/menu_access_customer'); ?>
<!--/.navbar-top-->

<?php $this->load->view('partial/menu_top_customer'); ?>
<!--/.navbar-top-->


<div class="search-full text-right"><a class="pull-right search-close"> <i class=" fa fa-times-circle"> </i> </a>

    <div class="searchInputBox pull-right">
        <input type="search" data-searchurl="search?=" name="q" placeholder="start typing and hit enter to search"
               class="search-input">
        <button class="btn-nobg search-btn" type="submit"><i class="fa fa-search"> </i></button>
    </div>
</div>
<!--/.search-full-->

</div>
<!-- /.Fixed navbar  -->

<div class="container main-container headerOffset">



    <div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12">
            <h2 class="section-title-inner"><span><i class="fa fa-lock"></i> Create an account</span></h2>

            <div class="row userInfo">

                <div class="col-lg-3  ">
                    <h2 class="block-title-2"> Personal Details </h2>

                    <form name="create_journal" method="post" id="create_journal"
                          action="<?= base_url('/index.php/AccountHandle/new_account') ?>"
                          enctype="multipart/form-data" class="regForm">
                        <div class="form-group">
                            <label>Title</label>
                            <input   type="text"   class="form-control" placeholder="Title" name="Title"   >
                        </div>
                        <div class="form-group">
                            <label>First Name</label>
                            <input   type="text" name="fname"
                                     class="form-control" placeholder="First Name" required >
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input  type="text" class="form-control"  name="lname"
                                   placeholder="Last Name" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input required   type="text"  name="email"
                                   class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Mobile</label>
                            <input required   type="text"  name="mobile"
                                   class="form-control" placeholder="Mobile">
                        </div>




                </div>
                <div class="col-lg-3  ">
                    <h2 class="block-title-2"> Location Info</h2>


                    <div class="form-group">
                        <label>Address 1</label>
                        <input   type="text"   name="address1"   class="form-control" placeholder="Address 1">
                    </div>
                    <div class="form-group">
                        <label>Address 2</label>
                        <input  type="text"  name="address2" class="form-control" placeholder="Address 2"  >
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <input     type="text"  name="city" class="form-control" placeholder="City">
                    </div>
                    <div class="form-group">
                        <label>Country</label>
                        <input     type="text"   name="country" class="form-control" placeholder="Country">
                    </div>
                    <div class="form-group">
                        <label>Postal Code</label>
                        <input     type="text"  name="postalcode"  class="form-control" placeholder="Postal Code">
                    </div>



                </div>
                <div class="col-lg-3  ">
                    <h2 class="block-title-2">Credit Card Info</h2>


                    <div class="form-group">
                        <label>Credit   Card</label>
                        <input   type="text"   name="creditcard"  class="form-control" placeholder="Credit Card" >
                    </div>
                    <div class="form-group">
                        <label>Credit Card Type </label>
                        <input  type="text" name="creditcardtype" class="form-control"  placeholder="Credit Card Type " >
                    </div>
                    <div class="form-group">
                        <label>Card Expire Month</label>
                        <input type="text" name="creditcardexpmonth"  class="form-control" placeholder="Card Expire Month">
                    </div>
                    <div class="form-group">
                        <label>Card Expire Year</label>
                        <input type="text"  name="creditcardexpyear" class="form-control" placeholder="Card Expire Year">
                    </div>

                    <div class="form-group">
                        <label>Date Entered</label>
                        <input   type="text" name="creditcardentereddate"   class="form-control" placeholder="Date Entered" >
                    </div>
                </div>
                <div class="col-lg-3  ">
                    <h2 class="block-title-2">Account  </h2>



                    <div class="form-group">
                        <label> Password</label>
                        <input  type="Password" name="Password" class="form-control"  placeholder="  Password" >
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" name="confirmpassword"  class="form-control" placeholder="Confirm Password">
                    </div>
                    <div  class="form-group">
                        <p>By Registering, you agree that you've read and accepted our <a class="bg-success" href="#">User Agreement</a> ,
                            you're at least 18 years old, and you consent to our <a class="bg-success" href="#">Privacy Notice</a> and
                            receiving marketing communications from us.</p>
                    </div>
                    <div class="form-group">
                        <button type="submit"  name="submit" class="btn   btn-primary"><i class="fa fa-user"></i> Register</button>
                        <button type="button" class="btn   btn-info"><i class="fa fa-close"></i> Clear    </button>
                    </div>

                    </form>
                </div>


            </div>
            <!--/row end-->

        </div>


    </div>
    <!--/row-->

    <div style="clear:both"></div>
</div>
<!-- /wrapper -->

<div class="gap"></div>

<?php $this->load->view('partial/footer'); ?>

<!-- Le javascript
================================================== -->
<?php $this->load->view('partial/common_js'); ?>
<script>
    $().ready(function () {
        // validate the comment form when it is submitted
        $("#regForm").validate();

        // validate signup form on keyup and submit
        $(".regForm").validate({
            errorLabelContainer: $(".regForm div.error")
        });
    });
</script>

</body>
</html>

