<?php
require('connect.php');

function message($msg) {
	$_SESSION['message'] = $msg;
}

function check_message() {
	global $msg;
	if (isset($_SESSION['message'])) {
		
		$msg = "<div class='alert alert-success' role='alert'>".$_SESSION['message']."</div>";
		
	    unset($_SESSION['message']);
	}else{
		$msg = "";
	}
}

function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    // $data = mysqli_real_escape_string($get,$data);
    return $data;
  }







?>