<?php

	include('header.php');

	if(isset($_POST['change'])){
		if($_POST['new_password'] === $_POST['new_password_confirm']){
			$query = "UPDATE customer set password = '".$_POST['new_password']."' WHERE cid = ".$_SESSION['customer_id'];
			mysqli_query($connection, $query);
			echo "<script>alert('Password Successefully Changed!!');</script>";
		}
	}
	// if(isset($_POST['save'])){
	// 	$query = "UPDATE customer set customer_name = '".$_POST['customer_name']."' WHERE cid = ".$_SESSION['customer_id'];
	// 	mysqli_query($connection, $query);
	// 	$query = "UPDATE customer set contact_no = '".$_POST['contact_no']."' WHERE cid = ".$_SESSION['customer_id'];
	// 	mysqli_query($connection, $query);
	// 	echo "<script>alert('SAVED!!');</script>";
		
	// }

?>




        
		<div class="breadcrumb-area gray-bg">
            <div class="container">
                <div class="breadcrumb-content">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="active">My Account </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- my account start -->
        <div class="myaccount-area pb-80 pt-100">
            <div class="container">
                <div class="row">
                    <div class="ml-auto mr-auto col-lg-9">
                        <div class="checkout-wrapper">
                            <div id="faq" class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title"><span>1</span> <a data-toggle="collapse" data-parent="#faq" href="#my-account-1">Edit your account information </a></h5>
                                    </div>
                                    <div id="my-account-1" class="panel-collapse collapse show">
                                        <div class="panel-body">
                                            <div class="billing-information-wrapper">
                                                <div class="account-info-wrapper">
                                                    <h4>My Account Information</h4>
                                                    <h5>Your Personal Details</h5>
                                                </div>
                                                <form method = 'POST'>
                                                <div class="row">
                                                    
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="billing-info">
                                                            <label>My Contact No.</label>
                                                            <input type="text" value = '<?php echo $_SESSION['contact_no']?>'>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="billing-info">
                                                            <label>My Name</label>
                                                            <input type="text" value='<?php echo $_SESSION['customer_name']?>'>
                                                        </div>
                                                    </div>

                                                    <!-- <div class="col-lg-6 col-md-6">
                                                        <div class="billing-info">
                                                            <label>My Location</label>
                                                            <input type="text" value='<?php echo $_SESSION['location']?>'>
                                                        </div>
                                                    </div> -->
                                                </div>
                                                <div class="billing-back-btn">
                                                   
                                                    <div class="billing-btn">
                                                        <button type="submit" name="save">Save</button>
                                                    </div>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title"><span>2</span> <a data-toggle="collapse" data-parent="#faq" href="#my-account-2">Change your password </a></h5>
                                    </div>
                                    <div id="my-account-2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="billing-information-wrapper">
                                                <div class="account-info-wrapper">
                                                    <h4>Change Password</h4>
                                                    <h5>Your Password</h5>
                                                </div>
                                                <form method = 'POST'>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="billing-info">
                                                            <label>Password</label>
                                                            <input type="password" name='new_password'>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="billing-info">
                                                            <label>Password Confirm</label>
                                                            <input type="password" name='new_password_confirm'>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="billing-back-btn">
                                                    
                                                    <div class="billing-btn">
                                                        <button type="submit" name = 'change'>Change</button>
                                                    </div>
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
        
        
        
<?php
	include("footer.php");
?>