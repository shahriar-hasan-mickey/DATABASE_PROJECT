
<?php

    include('header.php');
    // session_destroy();
    // if(isset($_SESSION['cart_item_id'])){
    //     pr($_SESSION['cart_item_id'][0]);

    // }
    // FOR PARSING DATA FROM CATEGORY TABLE
    $sql = "SELECT * FROM category";
    $res = mysqli_query($connection, $sql);
    

    // pr(mysqli_fetch_assoc($res));
    // FOR PARSING DATA FROM ITEM TABLE
    // $query = "SELECT * FROM item";
    /* updated querry for filtering out items depending on the category type*/
    // $query = "SELECT * FROM item";  
    $query = "SELECT * FROM category INNER JOIN item ON category.category_id = item.category_id";
    if(isset($_GET['cat_id']) && $_GET['cat_id']>0){
        // $cat_id = $_GET['cat_id'];
        $query.=" WHERE category.category_id =".$_GET['cat_id'];
        // $sql.=" WHERE category.category_id =".$_GET['cat_id'];
    }
    
    $response = mysqli_query($connection, $query);
    
   
?>



        <div class="breadcrumb-area gray-bg">
            <div class="container">
                <div class="breadcrumb-content">
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li class="active">Food Store</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="shop-page-area pt-100 pb-100">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-lg-9">

                        <div class="grid-list-product-wrapper">
                            <div class="product-grid product-view pb-20">
                                <?php
                                if(mysqli_num_rows($response)>0){
                                ?>
                                    <div class="row">

                                        <?php 
                                            $counting = 0;
                                            while($counting < mysqli_num_rows($response)){
                                                $tuple = mysqli_fetch_assoc($response);
                                        ?>
                                        
                                            <div class="product-width col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-30">
                                                <div class="product-wrapper">
                                                <?php
                                                if(isset($_SESSION['customer_id'])){
                                                ?>
                                                    <form action = 'add_to_cart_process.php' method = 'POST'>
                                                <?php
                                                }else{
                                                ?>
                                                    <form>
                                                    <?php
                                                }
                                                    echo "                                                          <div class='product-img'>
                                                                <a href='#'>
                                                                    <img src='".$tuple['image']."' alt='".$tuple['item_name']."'>
                                                                </a>
                                                            </div>
                                                            <div class='product-content'>
                                                             
                                                                <h4>
                                                                <a href='javascript:void(0)'>".$tuple['item_name']."</a>
                                                                </h4>
                                                                <div class='product-price-wrapper'>
                                                                    
                                                                    <span>TK. ".$tuple['price']."</span>

                                                                </div>
                                                                    <!--<a>
                                                                        <select class='quantity-select' style='
                                                                            width: 37%;
                                                                            height: 47px;
                                                                            margin-top: 30px;
                                                                            margin-left: 2px;
                                                                            padding-left: 8px;
                                                                            background: transparent;
                                                                            border: 1px solid #003ef9;
                                                                            box-shadow: none;
                                                                            font-size: 15px;
                                                                            color: #000000;
                                                                        '>
                                                                            <option>Quantity</option>
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                            <option>4</option>
                                                                        </select>
                                                                    </a>-->
                                                            </div>";
                                                        $counting++;
                                                    ?>


                                                    
                                                        <div class="overview-btn mt-45">
                                                            <button class="btn-style-2" href="#" style="
                                                                width: 60%;
                                                                height: 47px;
                                                                border: 0px solid #003ef9;
                                                                cursor: pointer;
                                                            ">ADD TO CART</button>
                                                            <input type="hidden" name="add_to_cart" value='<?php echo $tuple['item_id']?>'>
                                                            
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        
                                        <?php
                                            }
                                        ?>
                                    </div>
                                <?php
                                }else{
                                    echo "NO FOOD ITEMS FOUND!!";
                                }
                                ?>
                            </div>
                        
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="shop-sidebar-wrapper gray-bg-7 shop-sidebar-mrg">
                            <div class="shop-widget">
                                <h4 class="shop-sidebar-title">Shop By Categories</h4>


                                <div class="shop-catigory">
                                    <ul id="faq">

                                        <li><a href='shop.php<?php echo "?cat_id=0"?>'>ALL</a>

                                        <?php 
                                            
                                            $count = 0; 
                                            while($count < mysqli_num_rows($res)){
                                                $row = mysqli_fetch_assoc($res);
                                        ?>
                                                <?php echo "<li> <a href='shop.php?cat_id=".$row['category_id']."'>".strtoupper($row['category_name'])."</a>"?>
                                        <?php
                                                $count++;
                                            }
                                        ?>            
                                    </ul>


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
        