<html>

<head>
    <title>
        Ying-yang Books
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Gothic+A1" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.11/css/all.css" integrity="sha384-p2jx59pefphTFIpeqCcISO9MdVfIm4pNnsL08A6v5vaQc4owkQqxMV8kg4Yvhaw/"
        crossorigin="anonymous">
    <link rel="icon" href="https://png.icons8.com/ios/80/000000/yin-yang-filled.png ">
    <!--i class="fas fa-yin-yang"></i-->
    <link rel="stylesheet" href="styles/style.css" type="text/css">
</head>


<body id="book">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark text-white container">
            <a class="navbar-brand" href="index.php">
                <!--i class="fas fa-yin-yang"></i-->
                <img src="images/yinang.png" width="100" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse pull-left" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active  ">
                        <a class="nav-link" href="#" data-toggle="tooltip" data-placement="bottom " title="Tooltip on bottom " id="example">Home
                            <span class="sr-only">(current)</span>
                        </a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacts.php">
                            Contacts
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="book.php">Books</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="bookupdate.php">Edit</a>
                    </li>

                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <button type="button" href="logout.php" class="btn  btn-danger nav-link " data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">logout</button>
                    </li>
                </ul>

            </div>
        </nav>
    </header>
    <main>
        <div class="container primary">
            <div class="row text-center">
                <!--div class="col-lg-3 "-->
                <div class="searchform">
                    <form id="Login" action="bookupdate.php" method="post" name="searchform">
                        <input type="text" name="search" id="searchname" placeholder="Search Here&hellip;">
                        <button class="fa fa-sign-in" type="submit" title="Submit">
                            <em>Read</em>
                        </button>
                        <!--input type="image" src="https://png.icons8.com/ios/80/000000/synchronize.png" name=" Reset " id="searchimg " value="Reset"
                        /-->
                    </form>
                </div>

            </div>
            <div class="row">
                <div class="book-Form">
                    <form id="bookeep" action="edit.php" method="post" name="book_form">
                        <input type="text" name="book_name" id="searchname" placeholder="Name of the book">
                        <br>
                        <input type="number" name="book_number" id="searchname" placeholder="ISBN of the book">
                        <br>
                        <input type="text" name="book_author" id="searchname" placeholder="Name of the Author">
                        <br>
                        <input type="number" name="book_price" id="searchname" placeholder="Price of the book">
                        <br>
                        <input type="number" name="book_qnty" id="searchname" placeholder="Quantity of the book">
                        <br>
                        <input type="text" name="book_pub" id="searchname" placeholder="Name of the Publication">
                        <br>
                        <input type="date" name="book_sold" id="searchname" placeholder="DD|MM|YY">
                        <br>
                        <select id="searchname" placeholder="Catagory" name="book_cat" class="btn  dropdown-toggle" type="button" data-toggle="dropdown">
                            <option selected="selected">Category</option>
                            <option>Adult</option>
                            <option>Romance</option>
                            <option>Thriller</option>
                            <option>Fantsy</option>
                            <option>Sci-Fi</option>
                            <option>Bio-graphy</option>
                            <option>Novel</option>
                            <option>children book</option>

                        </select>
                        <br><br>
                        <!--input type="image" src="https://png.icons8.com/ios/80/000000/synchronize.png" name=" Reset " id="searchimg " value="Reset"
                                    /-->
                        <input type="submit"  name="edit" id="searchname" value="Edit">                    </form>
                </div>
            </div>
        </div>
    </main>
</body>

</html>

<?php
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
            //book_name=$row['name'];
			}

	}


 ?>
