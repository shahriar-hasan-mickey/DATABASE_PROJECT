<?php
	session_start();
	// session_destroy();
	include('functions.php');
	include('database_connection.php');

	// if($_SESSION['customer_id']){
	// 	$query = "SELECT * FROM cart WHERE cid = '".$_SESSION['customer_id']."' AND item_id= '".$_SESSION['cart_item_id'];
	// 	$res = mysqli_query($connection, $query);
	// 	$added_on = date('Y:-m-d h:i:s');
	// 	if(mysqli_num_rows($res)==0){
	// 		$query = "INSERT INTO TABLE cart (cid, item_id, total_price, added_on) values(".$_SESSION['customer_id'].", ".$_SESSION['cart_item_id'].", ".$_SESSION['total_price'].", ".$added_on.")";
	// 		mysqli_query($connection, $query);
	// 	}
	// }



	if($_SERVER['REQUEST_METHOD']=='POST'){
		if(isset($_POST['add_to_cart'])){
			if(isset($_SESSION['cart_item_id'])){
				$myitems=array_column($_SESSION['cart_item_id'], 'item_id');
				// print_r($myitems);
				if(in_array($_POST['add_to_cart'], $myitems)){
					echo "
					<script>
						alert('Item already added. Go to cart page to make changes.');
						
					</script>";
					redirect('shop.php');
				}else{
					$count = count($_SESSION['cart_item_id']);
					$_SESSION['cart_item_id'][$count] = array('item_id' => $_POST['add_to_cart']);
					// pr($_SESSION['cart_item_id']);
					// pr($_POST['add_to_cart']);
					echo "<script>alert('SUCCESSFULLY ADDED!!')</script>";
					redirect('shop.php');
				}
			}else{
				$_SESSION['cart_item_id'][0] = array('item_id' => $_POST['add_to_cart']);
				// pr($_SESSION['cart_item_id']);
				echo "<script>alert('SUCCESSFULLY ADDED!!')</script>";
				redirect('shop.php');
			}
		}

		if(isset($_POST['Remove_Item'])){
			// echo "here";
			foreach($_SESSION['cart_item_id'] as $key => $value){
				print_r ($_SESSION['cart_item_id'][$key]['item_id']);
				if($_SESSION['cart_item_id'][$key]['item_id']==$_POST['cart_item_id']){
					echo "heer";

					// uncommenting the following works but the cart button then become useless
					// also the browser console says that the bootstrap.min.js is failed to be mapped 
					// unset($_SESSION['cart_item_id'][$key]);
					$_SESSION['cart_item_id'] = array_values($_SESSION['cart_item_id']);
					echo "
					<script>
						alert('ITEM SUCCESSFULLY REMOVED!!'');
					</script>";
					redirect("cart.php");
				}
			}
		}
		redirect('shop.php');
		
	}


?>