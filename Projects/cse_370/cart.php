<?php
    include('header.php');
    $total_price = 0;
?>



        <div class="cart-main-area pt-95 pb-100">
            <div class="container">
                <h3 class="page-title">Your cart items</h3>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <form action="#">
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Product Name</th>
                                            <th>Unit Price</th>
                                            <th>Subtotal</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                            
                                            
                                            if(isset($_SESSION['cart_item_id'])){
                                                
                                                for($count = 0; $count < count($_SESSION['cart_item_id']); $count++){
                                                    $query="SELECT * FROM item WHERE item_id = ".$_SESSION['cart_item_id'][$count]['item_id'];
                                                    $res = mysqli_query($connection, $query);
                                                    $row = mysqli_fetch_assoc($res);
                                                    $total_price+=$row['price'];
                                        ?>
                                                        <tr>
                                                            <td class="product-thumbnail">
                                                                <a href="#"><img src="<?php echo $row['image']?>" alt=""></a>
                                                            </td>
                                                            <td class="product-name"><a href="#"><?php echo $row['item_name']?> </a></td>
                                                            <td class="product-price-cart"><span class="amount">TK. <?php echo $row['price']?></span></td>
                                                            
                                                            <td class="product-subtotal">TK. <?php echo $row['price']?></td>
                                                            
                                                            <form action = 'add_to_cart_process.php' method = 'POST'>
                                                                <td class="product-remove">
                                                                    <button name = 'Remove_Item'class = 'btn btn-sm btn-outline-danger' style = "cursor:pointer;">REMOVE</button>
                                                                    <input type='hidden' name='cart_item_id' value=<?php echo $row['item_id']?>>  
                                                                </td>
                                                            </form>
                                                        </tr>
                                        <?php
                                                }
                                            }
                                            $_SESSION['total_price'] = $total_price;

                                        ?>
                                        
                                    </tbody>

                                </table>
                            </div>
                            <div class="row">

                                <div class="col-lg-12">
                                    
                                    <div style="
                                        padding-top: 10px;
                                        padding-left: 900px;
                                    ">
                                        <h4>TOTAL PRICE : TK. <?php echo $total_price?></h4>
                                    </div>
                                    <div class="cart-shiping-update-wrapper">
                                        <div class="cart-shiping-update">
                                            <a href="shop.php">Continue Shopping</a>
                                        </div>
                                        <a class = 'btn btn-outline-danger' href="order.php" style = "cursor:pointer;
                                                cursor: pointer;
                                                border-radius: 12px;
                                                font-size: 14px;
                                                padding: 0px 60px;
                                                padding-top: 7px;
                                                height: 46px;
                                                line-height: 30px;">
                                            PROCEED TO CHECKOUT
                                            
                                            <!-- <input type='hidden' name='order' value=<?php echo $row['item_id']?>>                                               -->
                                        </a> 
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

<?php
    include("footer.php");
?>
        