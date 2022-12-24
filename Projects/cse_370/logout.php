<?php
session_start();
include('functions.php');
// unset($_SESSION['customer_name']);
// unset($_SESSION['contact_no']);
// unset($_SESSION['customer_id']);
// unset($_SESSION['IS_LOGIN']);
session_destroy();
redirect('home.php');
?>