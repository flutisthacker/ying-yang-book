<?php
	session_start();
	$name=mysql_real_escape_string($_POST['search']);

	mysql_connect("localhost", "root", "") or die(mysql_error());
	mysql_select_db("bookshop") or die("Cannot connect ot database");
	$query=mysql_query("SELECT * FROM books WHERE bookname = '$name'");
	$exists=mysql_num_rows($query);
	$b_name="";
	$b_no="";
	$b_auth="";
	$b_date="";
	$b_price="";
	$b_cat="";
	$b_pub="";
	$b_qnty="";

	if($exists>0)
	{
		while($row=mysql_fetch_array($query))
		{
		//	$bookname',$bookno,'$bookauth',$bookdate,$bookprice,'$bookcat','$bookpub',$bookqnty
			$b_name=$row['name'];
			$b_no=$row['isbn'];
			$b_auth=$row['author'];
			$b_date=$row['sold'];
			$b_price=$row['price'];
			$b_cat=$row['catogory'];
			$b_pub=$row['publication'];
			$b_qnty=$row['quantity'];
		}
		if($username==$table_user)
		{
				$_SESSION['user']= $username;
				header("location:book.php");
			}
		}
	}

 ?>