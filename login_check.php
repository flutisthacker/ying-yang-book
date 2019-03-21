<?php
session_start();

	$user_name = $_POST['user_name'];
	$pass_word = $_POST['pass_word'];

require_once("check_login_function.php");//included to check login

	//processing code
	$user_ok = check_login($user_name, $pass_word); //called from check_login_function.php

	if($user_ok){
		header("Location: index.php"); /* Redirect browser */

	}
	else {
		header("Location: login.php");

	}


?>