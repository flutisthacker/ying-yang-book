

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


<body>
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
                    <a class="nav-link" href="logout.php">
                    <button type="button" class="btn  btn-danger nav-link " onclick="logout.php" data-toggle="popover" title="click to logout" data-content="And here's some amazing content. It's very engaging. Right?">logout</button>
                        </a>
                    </li>
                </ul>

            </div>
        </nav>
    </header>
    <main>
        <div class="container primary">
            <div class="row">
                <div class="col-lg-12 jumbotron  text-center" id="quote">
                    <cite>
                        <center>"In a chess, supporter of a king is known as ROOK"</center>
                        <center> "But in life, supporter of a person who reads is a BOOK"</center>
                    </cite>
                </div>
            </div>

            <div class="w3-content w3-display-container text-center">
                <img class="mySlides" src="images/6.jpg">
                <img class="mySlides" src="images/3.jpg">
                <img class="mySlides" src="images/4.jpg">
                <img class="mySlides" src="images/5.jpg">
                <img class="mySlides" src="images/10.jpg">
                <img class="mySlides" src="images/14.jpg">
                <img class="mySlides" src="images/13.jpg">
                <img class="mySlides" src="images/12.jpg">

                <!--button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                        <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button-->
            </div>

    </main>
    <script>
        var slideIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > x.length) { slideIndex = 1 }
            x[slideIndex - 1].style.display = "block";
            setTimeout(carousel, 5000); // Change image every 2 seconds
        }
    </script>

</body>

</html>

<?php

/*<session_start();
if($_SESSION['user_logged_in']){

}//if close
else{
	//	print "<h4>You are not authorized to view this page.</h4>";
	//print '<br><a href="login/login.php"> Login Here</a>';
header("Location: login.php");
}*/
?>