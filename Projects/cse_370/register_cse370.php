
<?php
session_start();


include('database_connection.php');
include('functions.php');



$msg = "";
// if(!isset($_SESSION['IS_LOGIN'])){
    if(isset($_POST['register'])){
    	$contact_no = $_POST['contact_no'];
    	$password = $_POST['password'];
        $location = $_POST['location'];
        $customer_name = $_POST['c_name'];

    	$sql = "SELECT * FROM customer WHERE contact_no='$contact_no'";
        $res = mysqli_query($connection, $sql);
        if(mysqli_num_rows($res)!=0){
            $msg = "THE PHONE NUMBER HAS ALREADY BEEN REGEISTERED!!\n PLEASE REGISTER WITH A NEW NUMBER";
        } else {
        	$sql="INSERT INTO customer (contact_no, location, type, max_discount, password, customer_name) values ('$contact_no', '$location', 'non_regular', 0, '$password', '$customer_name')";
        	$res=mysqli_query($connection,$sql);
        	$_SESSION['IS_LOGIN']='yes';
        	$_SESSION['customer']=$row['cid'];
        	echo "SUCCESS";
                // if(!isset($_SESSION['IS_LOGIN']))
        	redirect('shop.php');
        }
    }
// }else{
//     redirect('home.php');
// }    
?>


<!doctype html>
<html class="no-js" lang="zxx">
	<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Food Ordering User Register</title>
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
            <div class="header-top black-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12 col-sm-4">
                        </div>



                    </div>
                </div>
            </div>
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
                            <div class="header-middle-right f-right">
                                <div class="header-login" id="right_header">
                                    <a href="login-register.html">
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
                                    <a href="#">
                                        <div class="header-icon-style">
                                            <i class="icon-handbag icons"></i>
                                            <span class="count-style">02</span>
                                        </div>
                                        <div class="cart-text">
                                            <span class="digit">My Cart</span>
                                            <span class="cart-digit-bold">$209.00</span>
                                        </div>
                                    </a>
                                    <div class="shopping-cart-content">
                                        <ul>
                                            <li class="single-shopping-cart">
                                                <div class="shopping-cart-img">
                                                    <a href="#"><img alt="" src="assets/img/cart/cart-1.jpg"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="#">Phantom Remote </a></h4>
                                                    <h6>Qty: 02</h6>
                                                    <span>$260.00</span>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="ion ion-close"></i></a>
                                                </div>
                                            </li>
                                            <li class="single-shopping-cart">
                                                <div class="shopping-cart-img">
                                                    <a href="#"><img alt="" src="assets/img/cart/cart-2.jpg"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="#">Phantom Remote</a></h4>
                                                    <h6>Qty: 02</h6>
                                                    <span>$260.00</span>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="ion ion-close"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="shopping-cart-total">
                                            <h4>Shipping : <span>$20.00</span></h4>
                                            <h4>Total : <span class="shop-total">$260.00</span></h4>
                                        </div>
                                        <div class="shopping-cart-btn">
                                            <a href="cart-page.html">view cart</a>
                                            <a href="checkout.html">checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                        <li><a href="shop.php">Item Menue</a></li>
                                        <li><a href="contact.html"></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </header>






		<div class="tab-content">
		                                <div id="lg1" class="tab-pane active">
		                                    <div class="login-form-container">

                                                <div class="register-login-button" style="
                                                    border: medium none;
                                                    cursor: pointer;
                                                    margin-left : 45%;
                                                    
                                                ">


                                                    <script>
                                                        function redirecting(){
                                                            window.location.href='login_cse370.php';
                                                        }
                                                    </script>

                                                    <button onclick = "redirecting()" type="submit" name="login"
                                                        style="
                                                        margin-bottom: 20px;
                                                        background-color: red;
                                                        border: medium none;
                                                        border-radius: 3px;
                                                        color: white;
                                                        cursor: pointer;
                                                        font-size: 14px;
                                                        font-weight: 500;
                                                        line-height: 1;
                                                        padding: 11px 30px;
                                                        text-transform: uppercase;
                                                        transition: all 0.3s ease 0s;
                                                        on
                                                        "
                                                    ><span>Login</span></button>
                                                </div>


		                                        <div class="login-register-form">
		                                            <form action="#" method="post">
                                                        <input type="text" name="c_name" placeholder="Customer name" required>
		                                                <input type="text" name="contact_no" placeholder="Phone number" required>
                                                        <input type="text" name="location" placeholder="Location" required>
		                                                <input type="password" name="password" placeholder="Password" required>
		                                                <div class="button-box">
		                                                <div class = "login_msg"><?php echo $msg?></div>

		                                                   <!--  <div class="login-toggle-btn">

		                                                        <a href="#">Forgot Password?</a>
		                                                    </div> -->



		                                                    <!-- <button type="submit" name="login"><span>Login</span></button> -->
		                                                    <button type="submit" name="register"><span>Register</span></button>
		                                                </div>
		                                            </form>
		                                        </div>
		                                    </div>
		                                </div>
		                                
		                            </div>

	</body>

<?php

        include('footer.php');
?>