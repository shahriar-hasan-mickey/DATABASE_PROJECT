<?php
    session_start();
    include('database_connection.php');
    include('functions.php');
    include('constants.php');
?>



<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo SITE_NAME;?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/chosen.min.css">
        <link rel="stylesheet" href="assets/css/ionicons.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/simple-line-icons.css">
        <link rel="stylesheet" href="assets/css/jquery-ui.css">
        <link rel="stylesheet" href="assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>




<!-- header start -->
        <header class="header-area">
            <header class="header-area">

            <?php
            if(isset($_SESSION['customer_id'])){
            ?>    
                <div class="header-top black-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12 col-sm-4">
                                
                            </div>

                            <div class="col-lg-8 col-md-8 col-12 col-sm-8">
                                <div class="account-curr-lang-wrap f-right">
                                    <ul>
                                        
                                        <?php
                                        echo "<span style = 'color: white;'>WELCOME ".$_SESSION['customer_name']."&nbsp&nbsp&nbsp</span>";
                                        ?>
                                            <li class="top-hover"><a href="#"><span>&#9881;</span></i> <i class="ion-chevron-down"></i></a>
                                                <ul>
                                                    <li><a href="my_profile.php">My Profile  </a></li>
                                                    <li><a href="order_history.php">Order History</a></li>
                                                    <li><a href="logout.php">Logout</a></li>
                                                </ul>
                                            </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?> 
            <div class="header-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-12 col-sm-4">
                            <div class="logo">
                                <a href="home.php">
                                    <img alt="" src="assets/img/logo/logo_bracu.png" style="object-fit:contain;
                                                    width:168px;
                                                    height:150px;
                                                    border: none #CCC"
                                    />
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8 col-12 col-sm-8" id="right_header" style="padding-top: 60px">
                            <?php
                            if(isset($_SESSION['customer_id'])){
                            ?>
                                <div class="header-middle-right f-right">
                                    <div class="header-login" id="right_header">
                                        <a href="my_profile.php">
                                            <div class="header-icon-style">
                                                <i class="icon-user icons"></i>
                                            </div>
                                            <div class="login-text-content">
                                                <?php
                                                    echo $_SESSION['customer_name']."<br>".$_SESSION['contact_no'];
                                                ?>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="header-wishlist">
                                       &nbsp;
                                    </div>
                                    <div class="header-cart">
                                        <a href="cart.php">
                                            <div class="header-icon-style">
                                                <i class="icon-handbag icons"></i>
                                                <?php
                                                    $count=0;
                                                    if(isset($_SESSION['cart_item_id'])){
                                                        $count = count($_SESSION['cart_item_id']);
                                                    }
                                                ?>
                                                <span class="count-style"><?php echo $count?></span>
                                            </div>
                                            <div class="cart-text">
                                                
                                                <span class="digit">My Cart </span>
                                                <span class="cart-digit-bold"></span>
                                            </div>
                                        </a>
                                        
                                    </div>
                                </div>
                        
                            <?php
                            }else{
                            ?>
                            <div class="header-middle-right f-right">
                                        <div class="header-login" id="right_header">
                                            <a href="login_cse370.php">
                                                <div class="header-icon-style">
                                                    <i class="icon-user icons"></i>
                                                </div>


                                                <div class="login-text-content">
                                                    <p>Register <br> or <span>Sign in</span></p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="header-wishlist">
                                           &nbsp;
                                        </div>
                                        <div class="header-cart">
                                            <a href="cart.php">
                                                <!-- <div class="header-icon-style">
                                                    <i class="icon-handbag icons"></i>
                                                    
                                                    <span class="count-style"></span>
                                                </div>
                                                <div class="cart-text">
                                                    
                                                    <span class="digit">My Cart </span>
                                                    <span class="cart-digit-bold">0</span>
                                                </div> -->
                                            </a>
                                            
                                        </div>
                                    </div>
                                </div>

                                                    

                            <?php
                            }
                            ?>
                    </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom transparent-bar black-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="main-menu">
                                <nav>
                                    <ul>
                                        <li><a href="home.php">Home</a></li>
                                        <li><a href="shop.php">food store</a></li>
                                        <li><a href="about-us.php">about us</a></li>
                                        <li><a href="contact-us.php">contact us</a></li>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile-menu-area-start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mobile-menu">
                                <nav id="mobile-menu-active">
                                    <ul>
                                        <li><a href="home.php">Home</a></li>
                                        <li><a href="about-us.php">about us</a></li>
                                        <li><a href="contact-us.php">contact us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile-menu-area-end -->
        </header>