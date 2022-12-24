
<?php



include('database_connection.php');

include('header.php');

$msg = "";
// if(!isset($_SESSION['IS_LOGIN'])){
    if(isset($_POST['login'])){
    	$contact_no = $_POST['contact_no'];
    	$password = $_POST['password'];

    	//echo $sql="select * from user where contact_no='$contact_no' and pasword='$password'";
    	$sql="select * from customer where contact_no='$contact_no' and password='$password'";
    	$res=mysqli_query($connection,$sql);
    	if(mysqli_num_rows($res)>0){
    		
    		$row=mysqli_fetch_assoc($res);
    		// prx($row);
    		$_SESSION['customer_name']=$row['customer_name'];
            $_SESSION['contact_no']=$row['contact_no'];
    		$_SESSION['customer_id']=$row['cid'];
            $_SESSION['location']=$row['location'];
            $_SESSION['IS_LOGIN']='yes';
    		echo "SUCCESS";
            // if(!isset($_SESSION['IS_LOGIN']))
    		redirect('home.php');
    	}else{
    		$msg="Please enter valid login details";
    	}
    }
// }else{
//     redirect('home.php');
// }
// }else if(isset($_POST['register'])){
// 	$contact_no = $_POST['contact_no'];
// 	$password = $_POST['password'];

// 	//echo $sql="select * from user where contact_no='$contact_no' and pasword='$password'";
// 	$sql="INSERT INTO customer VALUES ('$contact_no', '$password'";
// 	$res=mysqli_query($connection,$sql);
// 	if(mysqli_num_rows($res)>0){
		
// 		$row=mysqli_fetch_assoc($res);
// 		// prx($row);
// 		// $_SESSION['IS_LOGIN']='yes';
// 		// $_SESSION['customer']=$row['cid'];
// 	}
// 	// }else{
// 	// 	$msg="Please enter valid login details";
// 	// }
// }

?>








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
                                                            window.location.href='register_cse370.php';
                                                        }
                                                    </script>


                                                    <button onclick = "redirecting()" type="submit" name="register"
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
                                                        padding: 11px 18px;
                                                        text-transform: uppercase;
                                                        transition: all 0.3s ease 0s;
                                                        on
                                                        "
                                                    ><span>Register</span></button>
                                                </div>


		                                        <div class="login-register-form">
		                                            <form action="#" method="post">
		                                                <input type="text" name="contact_no" placeholder="Phone number" required>
		                                                <input type="password" name="password" placeholder="Password" required>
		                                                <div class="button-box">
		                                                <div class = "login_msg"><?php echo $msg?></div>

		                                                    <!-- <div class="login-toggle-btn">

		                                                        <a href="#">Forgot Password?</a>
		                                                    </div> -->



		                                                    <button type="submit" name="login"><span>Login</span></button>
		                                                    
		                                                </div>
		                                            </form>
		                                        </div>
		                                    </div>
		                                </div>
		                                
		                            </div>

	</body>

<?php
    include('footer.php')
?>