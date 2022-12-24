<?php
    include('header.php');
    if(isset($_POST['order'])){
        $cid = $_SESSION['customer_id'];
        // $item_ids = $_SESSION['cart_item_id'];
        $total_price = $_SESSION['total_price'];
        $added_on = date('Y:M:D h:i:s');
        $item_ids = "";
        foreach($_SESSION['cart_item_id'] as $key => $values){
            $item_ids.=$values['item_id']." ";
        }
            // print_r($item_ids);
            $sql="INSERT INTO orders (cid, item_ids, total_price, added_on) values ('$cid', '$item_ids', '$total_price','$added_on')";
            $res=mysqli_query($connection,$sql);

            unset($_SESSION['cart_item_id']);
            echo "<script>alert('order has been placed successfully')</script>";
            redirect('shop.php');
        }

?>



        <div class="breadcrumb-area gray-bg">
            <div class="container">
                <div class="breadcrumb-content">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="active"> Checkout </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- checkout-area start -->
        <div class="checkout-area pb-80 pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="checkout-wrapper">
                            <div id="faq" class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title"><a   href="#payment-1">Checkout method and Order Placement</a></h5>
                                    </div>
                                    <div id="payment-1" class="panel-collapse collapse show">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <div class="checkout-register">
                                                        <div class="title-wrap">
                                                            <h4 class="cart-bottom-title section-bg-white">PAYMENT METHOD</h4>
                                                        </div>
                                                        <div class="register-us">
                                                            <ul>
                                                                <li><input type="checkbox"> CASH ON DELIVERY</li>
                                                                <li><input type="checkbox"> BKASH</li>
                                                            </ul>
                                                        </div>
                                                       
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="checkout-login">
                                                        <div class="title-wrap">
                                                            <h4 class="cart-bottom-title section-bg-white">BILL</h4>
                                                        </div>
                                                        
                                                        <form method = 'POST'>
                                                            <div class="login-form" >
                                                                <label>TOTAL AMOUNT </label>
                                                                <input type="number" name="total_price" value='<?php echo $_SESSION['total_price']?>'
                                                            </div>
                                                        
                                                        
                                                        <div class="checkout-login-btn" style="    margin-top: 10px;">
                                                            
                                                            <button name = 'order' class = 'btn btn-sm btn-outline-danger' style = "cursor:pointer;"><a href="#">ORDER</a></button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

<?php
    include("footer.php");
?>
        