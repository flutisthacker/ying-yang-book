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
			<a href="login.php">
				<img src="https://png.icons8.com/ios/80/000000/password.png" >
			</a>
		</div>


<div class="Simple-Form">
			<form id="Login" action="register.php" method="post" name="login_form">
					<a href="../index.php"><img src="images/yinang.png" align="center" width="35%">
        </a>
        <hr>
        <input type="text" name="user_name" id="button" placeholder="Enter your User Name"><br>
				<br>
				<input type="Password" name="pass_word" id="button" placeholder="Enter your Password"><br>
				<br>
				<input type="Password" name="repass_word" id="button" placeholder="Confirm your Password"><br>
				<br>
				<font color= 'red'><div id='bug'></div></font>
				<input type="submit" value="Register" id="butt" style="color:white;font-size: 18px;"  data-toggle="popover" title="Incorrect username/password " data-content="Some content inside the popover"><br><br>
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


<?php
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$username = mysql_real_escape_string($_POST['user_name']);
		$password = mysql_real_escape_string($_POST['pass_word']);
		$bool=true;

		mysql_connect("localhost","root","") or die(mysql_error());
		mysql_select_db("bookshop") or die("Cannot connect to database");
		$query=mysql_query("SELECT * FROM users");
		while($row=mysql_fetch_array($query))
		{
			$table_user=$row['username'];
			if($username==$table_user)
			{
				$bool=false;
				Print '<script>alert("Username has already been taken!");</script>';
				Print '<script>window.location.assign("register.php");</script>';
			}
		}
		if($bool)
		{
			mysql_query("INSERT INTO users (username,password) VALUES ('$username','$password')");
			Print '<script>alert("Successfully Registered! ");</script>';
			Print '<script>window.location.assign("login.php");</script>';
		}
	}
?>
