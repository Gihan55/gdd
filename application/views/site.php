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
                <form id="login_form" class="m-t" role="form" action="<?= base_url('index.php'); ?>/AccountHandle/login"
                      method="POST">
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
                    <div class="form-group">
                        <div>
                            <div class="checkbox login-remember">
                                <label>
                                    <input name="rememberme" value="forever" checked="checked" type="checkbox">
                                    Remember Me </label>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <input name="submit" class="btn  btn-block btn-lg btn-primary" value="LOGIN" type="submit">
                        </div>
                    </div>
                    <!--userForm-->
                </form>
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
<!-- /.ModalSignup End -->

<!-- Fixed navbar start -->
<div class="navbar navbar-tshop navbar-fixed-top megamenu" role="navigation">
    <?php $this->load->view('partial/menu_access'); ?>
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

<div class="banner">
    <div class="full-container">
        <div class="slider-content">
            <ul id="pager2" class="container">
            </ul>
            <!-- prev/next links -->

            <span class="prevControl sliderControl"> <i class="fa fa-angle-left fa-3x "></i></span> <span
                class="nextControl sliderControl"> <i class="fa fa-angle-right fa-3x "></i></span>

            <div class="slider slider-v1"
                 data-cycle-swipe=true
                 data-cycle-prev=".prevControl"
                 data-cycle-next=".nextControl" data-cycle-loader="wait">
                <div class="slider-item slider-item-img1">
                    <img src="<?php echo base_url('images'); ?>/slider/slider0.jpg"
                         class="img-responsive parallaximg sliderImg" alt="img">
                </div>
                <div class="slider-item slider-item-img1">
                    <div class="sliderInfo">
                        <div class="container">
                            <div class="col-lg-12 col-md-12 col-sm-12 sliderTextFull ">
                                <div class="inner text-center">
                                    <div class="topAnima animated">
                                        <h1 class="uppercase xlarge">FREE SHIPPING</h1>

                                        <h3 class="hidden-xs"> Free Standard Shipping on Orders Over $100 </h3>
                                    </div>
                                    <a class="btn btn-danger btn-lg bottomAnima animated opacity0">SHOP NOW ON TSHOP
                                        <span class="arrowUnicode">►</span></a></div>
                            </div>
                        </div>
                    </div>
                    <img src="<?php echo base_url('images'); ?>/slider/slider1.jpg" class="img-responsive parallaximg sliderImg" alt="img"></div>
                <!--/.slider-item-->

                <div class="slider-item slider-item-img2 ">
                    <div class="sliderInfo">
                        <div class="container">
                            <div class="col-lg-12 col-md-12 col-sm-12 sliderTextFull  ">
                                <div class="inner dark maxwidth500 text-center animated topAnima">
                                    <div class=" ">
                                        <h1 class="uppercase xlarge"> CUSTOM HTML BLOCK</h1>

                                        <h3 class="hidden-xs"> Custom Slides to Your Slider </h3>
                                    </div>
                                    <a class="btn btn-danger btn-lg">SHOP NOW ON TSHOP <span
                                            class="arrowUnicode">►</span></a></div>
                            </div>
                        </div>
                    </div>
                    <img src="<?php echo base_url('images'); ?>/slider/slider3.jpg" class="img-responsive parallaximg sliderImg" alt="img"></div>
                <!--/.slider-item-->

                <div class="slider-item slider-item-img3 ">
                    <div class="sliderInfo">
                        <div class="container">
                            <div class="col-lg-5 col-md-4 col-sm-6 col-xs-8   pull-left sliderText white hidden-xs">
                                <div class="inner">
                                    <h1>TSHOP JEANS</h1>

                                    <h3 class="price "> Free Shipping on $100</h3>

                                    <p class="hidden-xs">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                        diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                        volutpat. </p>
                                    <a href="category.html" class="btn btn-primary">SHOP NOW <span class="arrowUnicode">►</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="<?php echo base_url('images'); ?>/slider/slider4.jpg" class="img-responsive parallaximg sliderImg" alt="img"></div>
                <!--/.slider-item-->

                <div class="slider-item slider-item-img3">
                    <div class="sliderInfo">
                        <div class="container">
                            <div class="col-lg-5 col-md-6 col-sm-5 col-xs-5 pull-left sliderText blankstyle transformRight">
                                <div class="inner text-right"><img src="<?php echo base_url('images'); ?>/slider/color.png" class="img-responsive"
                                                                   alt="img"></div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-5 col-xs-7   pull-left sliderText blankstyle color-white">
                                <div class="inner">
                                    <h1 class="uppercase topAnima animated ">10+ Amazing Color Theme</h1>

                                    <p class="bot tomAnima animated opacity0 hidden-xs"> Fully responsive bootstrap
                                        Ecommerce Template. Available in 10+ color schemes and easy to set. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="<?php echo base_url('images'); ?>/slider/6.jpg" class="img-responsive parallaximg sliderImg" alt="img"></div>
            </div>
            <!--/.slider slider-v1-->
        </div>
        <!--/.slider-content-->
    </div>
    <!--/.full-container-->
</div>
<!--/.banner style1-->

<div class="container main-container">

<!-- Main component call to action -->

<div class="row featuredPostContainer globalPadding style2">
<h3 class="section-title style2 text-center"><span>NEW ARRIVALS</span></h3>

<div id="productslider" class="owl-carousel owl-theme">
<div class="item">
    <div class="product">
        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
           data-placement="left">
            <i class="glyphicon glyphicon-heart"></i>
        </a>

        <div class="image">
            <div class="quickview">
                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html"
                   data-target="#productSetailsModalAjax">Quick View </a>
            </div>
            <a href="product-details.html"><img src="<?php echo base_url('images'); ?>/product/34.jpg" alt="img"
                                                class="img-responsive"></a>

            <div class="promotion"><span class="new-product"> NEW</span> <span
                    class="discount">15% OFF</span></div>
        </div>
        <div class="description">
            <h4><a href="product-details.html">consectetuer adipiscing </a></h4>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <span class="size">XL / XXL / S </span></div>
        <div class="price"><span>$25</span></div>
        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                        class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
    </div>
</div>
<div class="item">
    <div class="product">
        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
           data-placement="left">
            <i class="glyphicon glyphicon-heart"></i>
        </a>

        <div class="image">
            <div class="quickview">
                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html"
                   data-target="#productSetailsModalAjax">Quick View </a>
            </div>
            <a href="product-details.html"><img src="images/product/30.jpg" alt="img"
                                                class="img-responsive"></a>

            <div class="promotion"><span class="discount">15% OFF</span></div>
        </div>
        <div class="description">
            <h4><a href="product-details.html">luptatum zzril delenit</a></h4>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <span class="size">XL / XXL / S </span></div>
        <div class="price"><span>$25</span></div>
        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                        class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
    </div>
</div>
<div class="item">
    <div class="product">
        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
           data-placement="left">
            <i class="glyphicon glyphicon-heart"></i>
        </a>

        <div class="image">
            <div class="quickview">
                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html"
                   data-target="#productSetailsModalAjax">Quick View </a>
            </div>
            <a href="product-details.html"><img src="images/product/36.jpg" alt="img"
                                                class="img-responsive"></a>

            <div class="promotion"><span class="new-product"> NEW</span></div>
        </div>
        <div class="description">
            <h4><a href="product-details.html">eleifend option </a></h4>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <span class="size">XL / XXL / S </span></div>
        <div class="price"><span>$25</span></div>
        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                        class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
    </div>
</div>
<div class="item">
    <div class="product">
        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
           data-placement="left">
            <i class="glyphicon glyphicon-heart"></i>
        </a>

        <div class="image">
            <div class="quickview">
                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html"
                   data-target="#productSetailsModalAjax">Quick View </a>
            </div>
            <a href="product-details.html"><img src="images/product/9.jpg" alt="img" class="img-responsive"></a>
        </div>
        <div class="description">
            <h4><a href="product-details.html">mutationem consuetudium </a></h4>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <span class="size">XL / XXL / S </span></div>
        <div class="price"><span>$25</span></div>
        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                        class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
    </div>
</div>
<div class="item">
    <div class="product">
        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
           data-placement="left">
            <i class="glyphicon glyphicon-heart"></i>
        </a>

        <div class="image">
            <div class="quickview">
                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html"
                   data-target="#productSetailsModalAjax">Quick View </a>
            </div>
            <a href="product-details.html"><img src="images/product/12.jpg" alt="img"
                                                class="img-responsive"></a></div>
        <div class="description">
            <h4><a href="product-details.html">sequitur mutationem </a></h4>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <span class="size">XL / XXL / S </span></div>
        <div class="price"><span>$25</span></div>
        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                        class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
    </div>
</div>
<div class="item">
    <div class="product">
        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
           data-placement="left">
            <i class="glyphicon glyphicon-heart"></i>
        </a>

        <div class="image">
            <div class="quickview">
                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html"
                   data-target="#productSetailsModalAjax">Quick View </a>
            </div>
            <a href="product-details.html"><img src="images/product/13.jpg" alt="img"
                                                class="img-responsive"></a></div>
        <div class="description">
            <h4><a href="product-details.html">consuetudium lectorum.</a></h4>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <span class="size">XL / XXL / S </span></div>
        <div class="price"><span>$25</span></div>
        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                        class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
    </div>
</div>
<div class="item">
    <div class="product">
        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
           data-placement="left">
            <i class="glyphicon glyphicon-heart"></i>
        </a>

        <div class="image">
            <div class="quickview">
                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html"
                   data-target="#productSetailsModalAjax">Quick View </a>
            </div>
            <a href="product-details.html"><img src="images/product/21.jpg" alt="img"
                                                class="img-responsive"></a></div>
        <div class="description">
            <h4><a href="product-details.html">parum claram</a></h4>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <span class="size">XL / XXL / S </span></div>
        <div class="price"><span>$25</span></div>
        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                        class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
    </div>
</div>
<div class="item">
    <div class="product">
        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
           data-placement="left">
            <i class="glyphicon glyphicon-heart"></i>
        </a>

        <div class="image">
            <div class="quickview">
                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html"
                   data-target="#productSetailsModalAjax">Quick View </a>
            </div>
            <a href="product-details.html"><img src="images/product/24.jpg" alt="img"
                                                class="img-responsive"></a></div>
        <div class="description">
            <h4><a href="product-details.html">duis dolore </a></h4>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <span class="size">XL / XXL / S </span></div>
        <div class="price"><span>$25</span></div>
        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                        class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
    </div>
</div>
<div class="item">
    <div class="product">
        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
           data-placement="left">
            <i class="glyphicon glyphicon-heart"></i>
        </a>

        <div class="image">
            <div class="quickview">
                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html"
                   data-target="#productSetailsModalAjax">Quick View </a>
            </div>
            <a href="product-details.html"><img src="images/product/15.jpg" alt="img"
                                                class="img-responsive"></a></div>
        <div class="description">
            <h4><a href="product-details.html">feugait nulla facilisi</a></h4>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <span class="size">XL / XXL / S </span></div>
        <div class="price"><span>$25</span></div>
        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                        class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
    </div>
</div>
</div>
<!--/.productslider-->

</div>
<!--/.featuredPostContainer-->
</div>
<!-- /main container -->

<div class="parallax-section parallax-image-1">
    <div class="container">
        <div class="row ">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="parallax-content clearfix">
                    <h1 class="parallaxPrce"> $200 </h1>

                    <h2 class="uppercase">FREE INTERNATIONAL SHIPPING! Get Free Shipping Coupons</h2>

                    <h3> Energistically develop parallel mindshare rather than premier deliverables. </h3>

                    <div style="clear:both"></div>
                    <a class="btn btn-discover "> <i class="fa fa-shopping-cart"></i> SHOP NOW </a></div>
            </div>
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</div>
<!--/.parallax-image-1-->

<div class="container main-container">


<!-- Demo Features Content start -->

<div class="morePost row featuredPostContainer style2 globalPaddingTop ">
<!-- this div is for demo || Please remove it when use this page -->

<h3 class="section-title style2 text-center"><span>NEW FEATURES</span></h3>

<div class="container">
<div class="row xsResponse categoryProduct">


<div class="item itemauto col-lg-3 col-md-3 col-sm-6 col-xs-6">
    <div class="product">
        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
           data-placement="left">
            <i class="glyphicon glyphicon-heart"></i>
        </a>


        <div class="imageHover">

            <div class="promotion"><span class="discount">15% OFF</span></div>

            <div id="carousel-id-1" class="carousel slide" data-ride="carousel" data-interval="0">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-id-1" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-id-1" data-slide-to="1"></li>
                    <li data-target="#carousel-id-1" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active"><a href="product-details.html"> <img
                                src="images/product/5.jpg" alt="img" class="img-responsive "></a></div>
                    <div class="item"><a href="product-details.html"> <img src="images/product/21.jpg"
                                                                           alt="img"
                                                                           class="img-responsive "></a>
                    </div>
                    <div class="item"><a href="product-details.html"> <img src="images/product/30.jpg"
                                                                           alt="img"
                                                                           class="img-responsive "></a>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-id-1" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-id-1" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>


        </div>


        <div class="description">
            <h4><a href="product-details.html"> Product Slider </a></h4>

            <div class="grid-description">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            </div>
            <div class="list-description">
                <p> Sed sed rutrum purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Pellentesque risus lacus, iaculis in ante vitae, viverra hendrerit ante. Aliquam vel
                    fermentum elit. Morbi rhoncus, neque in vulputate facilisis, leo tortor sollicitudin
                    odio, quis pellentesque lorem nisi quis enim. In dolor mi, hendrerit at blandit
                    vulputate, congue a purus. Sed eget turpis sit amet orci euismod accumsan. Praesent
                    sit amet placerat elit. </p>
            </div>
            <span class="size">XL / XXL / S </span></div>
        <div class="price"><span>$25</span></div>
        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                        class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
    </div>
</div>
<!--/.item-->


<div class="item itemauto col-lg-3 col-md-3 col-sm-6 col-xs-6">
    <div class="product">
        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
           data-placement="left">
            <i class="glyphicon glyphicon-heart"></i>
        </a>


        <div class="imageHover">

            <div id="carousel-id-2" class="carousel slide carousel-fade" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-id-2" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-id-2" data-slide-to="1"></li>
                    <li data-target="#carousel-id-2" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active"><a href="product-details.html"> <img
                                src="images/product/22.jpg" alt="img" class="img-responsive "></a></div>
                    <div class="item"><a href="product-details.html"> <img src="images/product/5.jpg"
                                                                           alt="img"
                                                                           class="img-responsive "></a>
                    </div>
                    <div class="item"><a href="product-details.html"> <img src="images/product/18.jpg"
                                                                           alt="img"
                                                                           class="img-responsive "></a>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-id-2" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-id-2" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>


        </div>


        <div class="description">
            <h4><a href="product-details.html"> Slider FadeIn </a></h4>

            <div class="grid-description">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            </div>
            <div class="list-description">
                <p> Sed sed rutrum purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Pellentesque risus lacus, iaculis in ante vitae, viverra hendrerit ante. Aliquam vel
                    fermentum elit. Morbi rhoncus, neque in vulputate facilisis, leo tortor sollicitudin
                    odio, quis pellentesque lorem nisi quis enim. In dolor mi, hendrerit at blandit
                    vulputate, congue a purus. Sed eget turpis sit amet orci euismod accumsan. Praesent
                    sit amet placerat elit. </p>
            </div>
            <span class="size">XL / XXL / S </span></div>
        <div class="price"><span>$25</span></div>
        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                        class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
    </div>
</div>

<!--/.item-->
<div class="item itemauto  col-lg-3 col-md-3 col-sm-6 col-xs-6">
    <div class="product">
        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
           data-placement="left">
            <i class="glyphicon glyphicon-heart"></i>
        </a>


        <div class="imageHover">
            <a href="product-details.html">
                <img src="images/product/12.jpg" alt="img" class="img-responsive primaryImage">
                <img src="images/product/21.jpg" alt="img" class="img-responsive secondaryImage"></a>

            <div class="promotion"><span class="discount">15% OFF</span></div>
        </div>


        <div class="description">
            <h4><a href="product-details.html"> Hover FadeIn </a></h4>

            <div class="grid-description">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            </div>
            <div class="list-description">
                <p> Sed sed rutrum purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Pellentesque risus lacus, iaculis in ante vitae, viverra hendrerit ante. Aliquam vel
                    fermentum elit. Morbi rhoncus, neque in vulputate facilisis, leo tortor sollicitudin
                    odio, quis pellentesque lorem nisi quis enim. In dolor mi, hendrerit at blandit
                    vulputate, congue a purus. Sed eget turpis sit amet orci euismod accumsan. Praesent
                    sit amet placerat elit. </p>
            </div>
            <span class="size">XL / XXL / S </span></div>
        <div class="price"><span>$25</span></div>
        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                        class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
    </div>
</div>
<!--/.item-->

<div class="item itemauto  col-lg-3 col-md-3 col-sm-6 col-xs-6">
    <div class="product">
        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
           data-placement="left">
            <i class="glyphicon glyphicon-heart"></i>
        </a>


        <div class="imageHover imageHoverFlip">
            <a href="product-details.html"><img src="images/product/7.jpg" alt="img"
                                                class="img-responsive primaryImage">
                <img src="images/product/13.jpg" alt="img" class="img-responsive secondaryImage"></a>

            <div class="promotion"><span class="discount">15% OFF</span></div>
        </div>


        <div class="description">
            <h4><a href="product-details.html"> Hover Flip </a></h4>

            <div class="grid-description">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            </div>
            <div class="list-description">
                <p> Sed sed rutrum purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Pellentesque risus lacus, iaculis in ante vitae, viverra hendrerit ante. Aliquam vel
                    fermentum elit. Morbi rhoncus, neque in vulputate facilisis, leo tortor sollicitudin
                    odio, quis pellentesque lorem nisi quis enim. In dolor mi, hendrerit at blandit
                    vulputate, congue a purus. Sed eget turpis sit amet orci euismod accumsan. Praesent
                    sit amet placerat elit. </p>
            </div>
            <span class="size">XL / XXL / S </span></div>
        <div class="price"><span>$25</span></div>
        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                        class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
    </div>
</div>
<!--/.item-->


</div>
</div>

</div>
<!-- Demo Features Content end -->

<!-- Main component call to action -->

<div class="morePost row featuredPostContainer style2 globalPaddingTop ">
<h3 class="section-title style2 text-center"><span>FEATURES PRODUCT</span></h3>

<div class="container">
<div class="row xsResponse">
<div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
    <div class="product">
        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
           data-placement="left">
            <i class="glyphicon glyphicon-heart"></i>
        </a>

        <div class="image">
            <div class="quickview">
                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html"
                   data-target="#productSetailsModalAjax">Quick View </a>
            </div>
            <a href="product-details.html"><img src="images/product/30.jpg" alt="img"
                                                class="img-responsive"></a>

            <div class="promotion"><span class="new-product"> NEW</span> <span
                    class="discount">15% OFF</span></div>
        </div>
        <div class="description">
            <h4><a href="product-details.html">aliquam erat volutpat</a></h4>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <span class="size">XL / XXL / S </span></div>
        <div class="price"><span>$25</span> <span class="old-price">$75</span></div>
        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                        class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
    </div>
</div>
<!--/.item-->
<div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
    <div class="product">
        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
           data-placement="left">
            <i class="glyphicon glyphicon-heart"></i>
        </a>

        <div class="image">
            <div class="quickview">
                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html"
                   data-target="#productSetailsModalAjax">Quick View </a>
            </div>
            <a href="product-details.html"><img src="images/product/31.jpg" alt="img"
                                                class="img-responsive"></a>

            <div class="promotion"><span class="discount">15% OFF</span></div>
        </div>
        <div class="description">
            <h4><a href="product-details.html">ullamcorper suscipit lobortis </a></h4>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <span class="size">XL / XXL / S </span></div>
        <div class="price"><span>$25</span></div>
        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                        class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
    </div>
</div>
<!--/.item-->
<div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
    <div class="product">
        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
           data-placement="left">
            <i class="glyphicon glyphicon-heart"></i>
        </a>

        <div class="image">
            <div class="quickview">
                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html"
                   data-target="#productSetailsModalAjax">Quick View </a>
            </div>
            <a href="product-details.html"><img src="images/product/34.jpg" alt="img"
                                                class="img-responsive"></a>

            <div class="promotion"><span class="new-product"> NEW</span></div>
        </div>
        <div class="description">
            <h4><a href="product-details.html">demonstraverunt lectores </a></h4>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <span class="size">XL / XXL / S </span></div>
        <div class="price"><span>$25</span></div>
        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                        class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
    </div>
</div>
<!--/.item-->
<div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
    <div class="product">
        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
           data-placement="left">
            <i class="glyphicon glyphicon-heart"></i>
        </a>

        <div class="image">
            <div class="quickview">
                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html"
                   data-target="#productSetailsModalAjax">Quick View </a>
            </div>
            <a href="product-details.html"><img src="images/product/12.jpg" alt="img"
                                                class="img-responsive"></a></div>
        <div class="description">
            <h4><a href="product-details.html">humanitatis per</a></h4>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <span class="size">XL / XXL / S </span></div>
        <div class="price"><span>$25</span></div>
        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                        class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
    </div>
</div>
<!--/.item-->
<div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
    <div class="product">
        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
           data-placement="left">
            <i class="glyphicon glyphicon-heart"></i>
        </a>

        <div class="image">
            <div class="quickview">
                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html"
                   data-target="#productSetailsModalAjax">Quick View </a>
            </div>
            <a href="product-details.html"><img src="images/product/33.jpg" alt="img"
                                                class="img-responsive"></a></div>
        <div class="description">
            <h4><a href="product-details.html">Eodem modo typi</a></h4>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <span class="size">XL / XXL / S </span></div>
        <div class="price"><span>$25</span></div>
        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                        class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
    </div>
</div>
<!--/.item-->
<div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
    <div class="product">
        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
           data-placement="left">
            <i class="glyphicon glyphicon-heart"></i>
        </a>

        <div class="image">
            <div class="quickview">
                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html"
                   data-target="#productSetailsModalAjax">Quick View </a>
            </div>
            <a href="product-details.html"><img src="images/product/10.jpg" alt="img"
                                                class="img-responsive"></a></div>
        <div class="description">
            <h4><a href="product-details.html">sequitur mutationem </a></h4>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <span class="size">XL / XXL / S </span></div>
        <div class="price"><span>$25</span></div>
        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                        class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
    </div>
</div>
<!--/.item-->
<div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
    <div class="product">
        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
           data-placement="left">
            <i class="glyphicon glyphicon-heart"></i>
        </a>

        <div class="image">
            <div class="quickview">
                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html"
                   data-target="#productSetailsModalAjax">Quick View </a>
            </div>
            <a href="product-details.html"><img src="images/product/37.jpg" alt="img"
                                                class="img-responsive"></a></div>
        <div class="description">
            <h4><a href="product-details.html">consuetudium lectorum.</a></h4>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <span class="size">XL / XXL / S </span></div>
        <div class="price"><span>$25</span></div>
        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                        class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
    </div>
</div>
<!--/.item-->
<div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
    <div class="product">
        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
           data-placement="left">
            <i class="glyphicon glyphicon-heart"></i>
        </a>

        <div class="image">
            <div class="quickview">
                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html"
                   data-target="#productSetailsModalAjax">Quick View </a>
            </div>
            <a href="product-details.html"><img src="images/product/35.jpg" alt="img"
                                                class="img-responsive"></a></div>
        <div class="description">
            <h4><a href="product-details.html">parum claram</a></h4>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <span class="size">XL / XXL / S </span></div>
        <div class="price"><span>$25</span> <span class="old-price">$75</span></div>
        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                        class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
    </div>
</div>
<!--/.item-->
<div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
    <div class="product">
        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
           data-placement="left">
            <i class="glyphicon glyphicon-heart"></i>
        </a>

        <div class="image">
            <div class="quickview">
                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html"
                   data-target="#productSetailsModalAjax">Quick View </a>
            </div>
            <a href="product-details.html"><img src="images/product/13.jpg" alt="img"
                                                class="img-responsive"></a></div>
        <div class="description">
            <h4><a href="product-details.html">duis dolore </a></h4>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <span class="size">XL / XXL / S </span></div>
        <div class="price"><span>$25</span></div>
        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                        class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
    </div>
</div>
<!--/.item-->
<div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
    <div class="product">
        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
           data-placement="left">
            <i class="glyphicon glyphicon-heart"></i>
        </a>

        <div class="image">
            <div class="quickview">
                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html"
                   data-target="#productSetailsModalAjax">Quick View </a>
            </div>
            <a href="product-details.html"><img src="images/product/21.jpg" alt="img"
                                                class="img-responsive"></a>

            <div class="promotion"><span class="new-product"> NEW</span> <span
                    class="discount">15% OFF</span></div>
        </div>
        <div class="description">
            <h4><a href="product-details.html">aliquam erat volutpat</a></h4>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <span class="size">XL / XXL / S </span></div>
        <div class="price"><span>$25</span></div>
        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                        class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
    </div>
</div>
<!--/.item-->
<div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
    <div class="product">
        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
           data-placement="left">
            <i class="glyphicon glyphicon-heart"></i>
        </a>

        <div class="image">
            <div class="quickview">
                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html"
                   data-target="#productSetailsModalAjax">Quick View </a>
            </div>
            <a href="product-details.html"><img src="images/product/14.jpg" alt="img"
                                                class="img-responsive"></a>

            <div class="promotion"><span class="discount">15% OFF</span></div>
        </div>
        <div class="description">
            <h4><a href="product-details.html">ullamcorper suscipit lobortis </a></h4>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <span class="size">XL / XXL / S </span></div>
        <div class="price"><span>$25</span></div>
        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                        class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
    </div>
</div>
<!--/.item-->
<div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
    <div class="product">
        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
           data-placement="left">
            <i class="glyphicon glyphicon-heart"></i>
        </a>

        <div class="image">
            <div class="quickview">
                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html"
                   data-target="#productSetailsModalAjax">Quick View </a>
            </div>
            <a href="product-details.html"><img src="images/product/17.jpg" alt="img"
                                                class="img-responsive"></a>

            <div class="promotion"><span class="new-product"> NEW</span></div>
        </div>
        <div class="description">
            <h4><a href="product-details.html">demonstraverunt lectores </a></h4>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <span class="size">XL / XXL / S </span></div>
        <div class="price"><span>$25</span></div>
        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                        class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
    </div>
</div>
<!--/.item-->
</div>
<!-- /.row -->

<div class="row">
    <div class="load-more-block text-center"><a class="btn btn-thin" href="#"> <i
                class="fa fa-plus-sign">+</i> load more products</a></div>
</div>
</div>
<!--/.container-->
</div>
<!--/.featuredPostContainer-->

<hr class="no-margin-top">
<div class="width100 section-block ">
    <div class="row featureImg">
        <div class="col-md-3 col-sm-3 col-xs-6"><a href="category.html"><img src="images/site/new-collection-1.jpg"
                                                                             class="img-responsive" alt="img"></a>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6"><a href="category.html"><img src="images/site/new-collection-2.jpg"
                                                                             class="img-responsive" alt="img"></a>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6"><a href="category.html"><img src="images/site/new-collection-3.jpg"
                                                                             class="img-responsive" alt="img"></a>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6"><a href="category.html"><img src="images/site/new-collection-4.jpg"
                                                                             class="img-responsive" alt="img"></a>
        </div>
    </div>
    <!--/.row-->
</div>
<!--/.section-block-->

<div class="width100 section-block">
    <h3 class="section-title"><span> BRAND</span> <a id="nextBrand" class="link pull-right carousel-nav"> <i
                class="fa fa-angle-right"></i></a> <a id="prevBrand" class="link pull-right carousel-nav"> <i
                class="fa fa-angle-left"></i> </a></h3>

    <div class="row">
        <div class="col-lg-12">
            <ul class="no-margin brand-carousel owl-carousel owl-theme">
                <li><a><img src="images/brand/1.gif" alt="img"></a></li>
                <li><img src="images/brand/2.png" alt="img"></li>
                <li><img src="images/brand/3.png" alt="img"></li>
                <li><img src="images/brand/4.png" alt="img"></li>
                <li><img src="images/brand/5.png" alt="img"></li>
                <li><img src="images/brand/6.png" alt="img"></li>
                <li><img src="images/brand/7.png" alt="img"></li>
                <li><img src="images/brand/8.png" alt="img"></li>
                <li><img src="images/brand/1.gif" alt="img"></li>
                <li><img src="images/brand/2.png" alt="img"></li>
                <li><img src="images/brand/3.png" alt="img"></li>
                <li><img src="images/brand/4.png" alt="img"></li>
                <li><img src="images/brand/5.png" alt="img"></li>
                <li><img src="images/brand/6.png" alt="img"></li>
                <li><img src="images/brand/7.png" alt="img"></li>
                <li><img src="images/brand/8.png" alt="img"></li>
            </ul>
        </div>
    </div>
    <!--/.row-->
</div>
<!--/.section-block-->

</div>
<!--main-container-->

<div class="parallax-section parallax-image-2">
    <div class="w100 parallax-section-overley">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="parallax-content clearfix">
                        <h1 class="xlarge"> Trusted Seller 500+ </h1>
                        <h5 class="parallaxSubtitle"> Lorem ipsum dolor sit amet consectetuer </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/.parallax-section-->

<!-- Product Details Modal  -->
<!-- Modal -->
<div class="modal fade" id="productSetailsModalAjax" tabindex="-1" role="dialog"
     aria-labelledby="productSetailsModalAjaxLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- End Modal -->

<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-3 col-sm-4 col-xs-6">
                    <h3> Support </h3>
                    <ul>
                        <li class="supportLi">
                            <p> Lorem ipsum dolor sit amet, consectetur </p>
                            <h4><a class="inline" href="callto:+12025550151"> <strong> <i class="fa fa-phone"> </i> +1-202-555-0151 </strong> </a></h4>
                            <h4><a class="inline" href="mailto:help@yourweb.com"> <i class="fa fa-envelope-o"> </i>
                                    help@yourweb.com </a></h4>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Shop </h3>
                    <ul>
                        <li><a href="#">
                                Men's
                            </a></li>
                        <li><a href="#">
                                Women's</a></li>
                        <li><a href="#">
                                Kids'
                            </a></li>
                        <li><a href="#">Shoes
                            </a></li>
                        <li><a href="#">
                                Gift Cards
                            </a></li>

                    </ul>

                </div>

                <div style="clear:both" class="hide visible-xs"></div>

                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Information </h3>
                    <ul class="list-unstyled footer-nav">
                        <li><a href="#">Questions?
                            </a></li>

                        <li><a href="#"> Order Status
                            </a></li>
                        <li><a href="#"> Sizing Charts
                            </a></li>
                        <li><a href="#"> Return Policy </a></li>
                        <li><a href="#">
                                Contact Us
                            </a></li>

                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> My Account </h3>
                    <ul>
                        <li><a href="account.html"> My Account </a></li>
                        <li><a href="my-address.html"> My Address </a></li>
                        <li><a href="wishlist.html"> Wish List </a></li>
                        <li><a href="order-list.html"> Order list </a></li>
                        <li><a href="order-status.html"> Order Status </a></li>
                    </ul>
                </div>

                <div style="clear:both" class="hide visible-xs"></div>

                <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                    <h3> Stay in touch </h3>
                    <ul>
                        <li>
                            <div class="input-append newsLatterBox text-center">
                                <input type="text" class="full text-center" placeholder="Email ">
                                <button class="btn  bg-gray" type="button"> Subscribe <i
                                        class="fa fa-long-arrow-right"> </i></button>
                            </div>
                        </li>
                    </ul>
                    <ul class="social">
                        <li><a href="http://facebook.com"> <i class=" fa fa-facebook"> &nbsp; </i> </a></li>
                        <li><a href="http://twitter.com"> <i class="fa fa-twitter"> &nbsp; </i> </a></li>
                        <li><a href="https://plus.google.com"> <i class="fa fa-google-plus"> &nbsp; </i> </a></li>
                        <li><a href="http://youtube.com"> <i class="fa fa-pinterest"> &nbsp; </i> </a></li>
                        <li><a href="http://youtube.com"> <i class="fa fa-youtube"> &nbsp; </i> </a></li>
                    </ul>
                </div>
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </div>
    <!--/.footer-->

    <div class="footer-bottom">
        <div class="container">
            <p class="pull-left"> &copy; TSHOP 2014. All right reserved. </p>

            <div class="pull-right paymentMethodImg"><img height="30" class="pull-right"
                                                          src="images/site/payment/master_card.png" alt="img"> <img
                    height="30" class="pull-right" src="images/site/payment/visa_card.png" alt="img"><img height="30"
                                                                                                          class="pull-right"
                                                                                                          src="images/site/payment/paypal.png"
                                                                                                          alt="img">
                <img height="30" class="pull-right" src="images/site/payment/american_express_card.png" alt="img"> <img
                    height="30" class="pull-right" src="images/site/payment/discover_network_card.png" alt="img">
                <img height="30" class="pull-right" src="images/site/payment/google_wallet.png" alt="img">

            </div>
        </div>
    </div>
    <!--/.footer-bottom-->
</footer>


<div class="modal fade hide" id="modalAds" role="dialog">
    <div class="modal-dialog  modal-bg-1">
        <div class="modal-body-content">
            <a class="close" data-dismiss="modal">×</a>

            <div class="modal-body">
                <div class="col-lg-6 col-sm-8 col-xs-8">
                    <h3>enter your <br>email to receive</h3>

                    <p class="discountLg">10% OFF </p>

                    <p>We invite you to subscribe to our newsletter and receive 10% discount.
                    </p>

                    <div class="clearfx">
                        <form id="newsletter" class="newsletter">
                            <input type="text" id="subscribe" name="s" placeholder="Enter email">
                            <button class="subscribe-btn">Subscribe</button>
                        </form>
                    </div>

                    <p><a href="category.html" class="link shoplink"> SHOP NOW <i class="fa fa-caret-right"> </i> </a>
                    </p>


                </div>
            </div>

        </div>
    </div>
</div>
<?php $this->load->view('partial/common_js'); ?>
<script>
    // this script required for subscribe modal
    $(window).load(function () {
        // full load
        $('#modalAds').modal('show');
        $('#modalAds').removeClass('hide');
    });

</script>
<script>

</script>
</body>
</html>
