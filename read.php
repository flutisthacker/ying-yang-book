<?php
	session_start();
	$name=mysql_real_escape_string($_POST['search']);
print($name);
	mysql_connect("localhost", "root", "") or die(mysql_error());
	mysql_select_db("bookshop") or die("Cannot connect ot database");
	$query=mysql_query("SELECT * FROM books WHERE name = '$name'");

	$exists=mysql_num_rows($query);
	$b_name="";

	if($exists>0)
	{
		while($row=mysql_fetch_array($query))
		{
			//	$bookname',$bookno,'$bookauth',$bookdate,$bookprice,'$bookcat','$bookpub',$bookqnty
			$b_name=$row['name'];
			}
			if($name==$b_name)
			{
			$query=mysql_query("Delete FROM books WHERE name = '$name'");
			Print '<script>alert("Successfully deleted! ");</script>';
			Print '<script>window.location.assign("book.php");</script>';
		}
	}


 ?>