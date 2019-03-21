<?php
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Ying-Yang login</title>
			<link rel="stylesheet"  href="styles/login.css"  type="text/css" >
	    <link rel="icon" href="https://png.icons8.com/ios/80/000000/yin-yang-filled.png ">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">

		</head>
	<body>

	<div class="register">
		<a href="register.php">
	<img src="https://png.icons8.com/ios/80/000000/add-user-male.png" >
	</a>
	</div>

<div class="Simple-Form">
			<form id="Login" action="checklogin.php" method="post" name="login_form">
					<a href="index.php"><img src="images/yinang.png" align="center" width="50%">
        </a>
        <hr>
        <input type="text" name="user_name" id="button" required="required" placeholder="Enter your User Name"><br>
				<br>
				<input type="Password" name="pass_word" id="button" required="required" placeholder="Enter your Password"><br>
				<br>
				<font color= 'red'><div id='bug'></div></font>
				<input type="submit" value="Login" id="butt" style="color:white;font-size: 18px;"  data-toggle="popover" title="Incorrect username/password " data-content="Some content inside the popover"><br><br>
				<input type="Reset" name="Reset" id="butt" value="Reset" style="color:white;font-size: 18px;" />
			</form>
		</div>

<script type="text/javascript">
			if((document.login_form.user_name.value=="")&&(document.login_form.pass_word.value=="")){
				document.getElementById('bug').innerHTML="Username / Password field is empty";
				login_form.bug.focus();
				return(false);
				$(document).ready(function(){
				// Select all elements with data-toggle="popover" in the document
$('[data-toggle="popover"]').popover();

// Select a specified element
$('#myPopover').popover();

    $('[data-toggle="popover"]').popover();
});
}

</script>
</body>

</html>
