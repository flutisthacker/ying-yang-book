
<?php
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$bookname = mysql_real_escape_string($_POST['book_name']);
		$bookno = mysql_real_escape_string($_POST['book_number']);
		$bookauth = mysql_real_escape_string($_POST['book_author']);
		$bookprice = mysql_real_escape_string($_POST['book_price']);
		$bookqnty = mysql_real_escape_string($_POST['book_qnty']);
		$bookpub = mysql_real_escape_string($_POST['book_pub']);
		$bookdate = mysql_real_escape_string($_POST['book_sold']);
		$bookcat = mysql_real_escape_string($_POST['book_cat']);
		$bool=true;


				mysql_connect("localhost","root","") or die(mysql_error());
		mysql_select_db("bookshop") or die("Cannot connect to database");
		$query=mysql_query("SELECT * FROM books");
		while($row=mysql_fetch_array($query))
		{
			$table_user=$row['name'];
			if($bookname==$table_user)
			{
				$bool=false;
				Print '<script>alert("Username has already been taken!");</script>';
				Print '<script>window.location.assign("register.php");</script>';
			}
		}
		if($bool)
		{
			mysql_query("INSERT INTO books (name,isbn,author,sold,price,catogory,publication,quantity) VALUES ('$bookname',$bookno,'$bookauth',$bookdate,$bookprice,'$bookcat','$bookpub',$bookqnty)");
			Print '<script>alert("Successfully Registered! ");</script>';
			Print '<script>window.location.assign("book.php");</script>';
		}
	}
?>
