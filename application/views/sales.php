

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sales</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no" />
    <link rel="icon" href="<?php echo base_url();?>assets/images/favicon.ico">
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.ico" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/search.css">
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery-migrate-1.1.1.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.easing.1.3.js"></script>
    <script src="<?php echo base_url();?>assets/js/script.js"></script>
    <script src="<?php echo base_url();?>assets/js/superfish.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.equalheights.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.mobilemenu.js"></script>
    <script src="<?php echo base_url();?>assets/js/tmStickUp.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.ui.totop.js"></script>
    <script>
        $(window).load(function(){
            $().UItoTop({ easingType: 'easeOutQuart' });
            $('#stuck_container').tmStickUp({});
        });
    </script>
    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url();?>assets/js/html5shiv.js"></script>
    <link rel="stylesheet" media="screen" href="<?php echo base_url();?>assets/css/ie.css">
    <![endif]-->
</head>
<body>
<!--==============================
              header
=================================-->
<header>
    <div class="container">
        <div class="row">
            <div class="grid_12 rel">
                <h1>
                    <a href="index.html">
                        <img src="<?php echo base_url();?>assets/images/logo.png" alt="Logo alt">
                    </a>
                </h1>
            </div>
        </div>
    </div>
    <section id="stuck_container">
        <!--==============================
                    Stuck menu
        =================================-->
        <div class="container">
            <div class="row">
                <div class="grid_12 ">

                    <div class="navigation ">
                        <nav>
                            <ul class="sf-menu">
                                <li class="current"><a href="<?php echo base_url();?>index.php/link/go/1">Home</a></li>
                                <li><a href="<?php echo base_url();?>index.php/link/go/2">About</a></li>
                                <li><a href="<?php echo base_url();?>index.php/link/go/3">Services</a></li>
                                <li><a href="<?php echo base_url();?>index.php/link/go/4">Blog</a></li>
                                <li><a href="<?php echo base_url();?>index.php/link/go/5">Contacts</a></li>
                            </ul>
                        </nav>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </section>
</header>
<!--==============================
              content
=================================-->

<section class="page1_header" style="background-color: white">


        <div class="row">
            <div class="grid_3">
                <h1>1</h1>
                <h1>2</h1>
                <h1>3</h1>
                <h1>4</h1>
                <h1>5</h1>
                <h1>6</h1>
                <h1>7</h1>
                <h1>8</h1>
                <h1>9</h1>
            </div>
            <div class="grid_9">
                <h1>Search Item to find here</h1>
                <br>
                <form method="post">
                    <input type="text" class="textbox" placeholder="Search">
                    <input title="Search" value="" type="submit" class="button">
                </form>
                <br><br> 
                <!-- Item images here -->
                <div class="col-md-3 col-sm-6 "  style="margin-bottom: 20px; margin-top: 20px">
                    <div class="card h-100">

                        <img style="height: 200px; width: 200px;" src="<?php echo base_url();?>assets/images/proj1.jpg" alt="" class="img_inner fleft">
                        <img style="height: 200px; width: 200px;" src="<?php echo base_url();?>assets/images/desk1.jpg" alt="" class="img_inner fleft">
                        <img style="height: 200px; width: 200px;" src="<?php echo base_url();?>assets/images/desk2.png" alt="" class="img_inner fleft">
                        <img style="height: 200px; width: 200px;" src="<?php echo base_url();?>assets/images/led1.jpg" alt="" class="img_inner fleft">
                        <div class="card-body">
                            <h4 class="card-title">
                                <?php
                                echo "Projectors";
                                ?>
                                <?php echo "vjbsdjvsbdv"; ?>
                            </h4>

                            <p class="card-text"><?php echo "cjbnsdjvsbdj"; ?></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    <br><br>
</section>


<!--==============================
              footer
=================================-->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="grid_12">
                <div class="copyright"><span class="brand">Stable</span> &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a>
                    <div class="sub-copy">Website designed by <a href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com</a></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<a href="#" id="toTop" class="fa fa-chevron-up"></a>
</body>
</html>