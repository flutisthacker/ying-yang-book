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


<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark text-primary container">
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
                        <a class="nav-link" href="index.php" data-toggle="tooltip" data-placement="bottom " title="Tooltip on bottom " id="example">Home
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
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item ">
                    <a class="nav-link" href="logout.php">
                    <button type="button " class="btn btn-danger nav-link " href="logout.php ">logout</button>
                    </a>
                    </li>
                </ul>

            </div>
        </nav>
    </header>
    <main>

        <div class="container primary " id="personal ">
            <div class="row ">
                <div class="col-lg-6 ">
                    <img src="images/2.jpg" class="img i14:49 11/10/2018mg-responsive img-circle" alt="saman maharjan" id="me" />
                    <h1 id="myname">"Saman Maharjan"</h1>
                    <object width="25%" height="25%" data="saman.pdf"></object>
                    <hr border="2px" color="red">
                    <p>
                        Our book-keeping system/website was developed by Mr. Saman Maharjan who studied BSc(hons)Computing from the IIMS college.
                        The title of our system is kept ying-yang because it represents both good and bad terms of life.
                        And as the book teaches us both part of the life. Hence, Ying-Yang was formed.
                    </p>
                    <label>
                            <i class="fas fa-map-marker-alt "></i>Location: Teku,Kathmandu</label>
                        <br>
                        <label>
                            <i class="fas fa-phone-volume "></i>
                            Phone number: 9803042890</label>

                        <br>
                        <address>
                            <i class="fas fa-envelope "></i>
                            Email us: saman.maharjan96@gmail.com
                                <hr>
                            <a href="https:/www.facebook.com/saman.maharjan3 ">
                                <i class="fab fa-facebook-f ">acebook</i>
                            </a>
                            |
                            <a href="https://www.instagram.com/samanmaharjan/ " align="right">
                                <i class="fab fa-instagram ">nstagram</i>
                            </a>

                        </address>
                        <hr border="3px ">

                </div>
                <div class=" col-lg-6" id="contact-right">
                    <form class="Contact-Form " action="mail_us.php">
                        <input type="text" for="name" placeholder="Enter your name" name="name " id="name " size="15 " required> &nbsp;
                        <br><br>
                        <input type="email" for="email" name="email" placeholder="Enter your mail" id="email" size="15 " required> &nbsp;
                        <br><br>
                        <input type="url " name="url " id="url " placeholder="your website url" size="22 ">
                        <br><br>
                        <div class="block clear ">
                            <textarea name="comment " placeholder="Write your feedback" id="comment " cols="25 " rows="5 "></textarea>
     </div>

                            <input type="submit" name="submit" id="contact-btn" value="Submit"> &nbsp;
                            <br>
                              <input type="reset" name="reset" id="contact-btn" value="Reset">

                               </form>
                </div>
            </div>
        </div>
    </main>
</body>

</html>


<?php
/*
$to="saman.maharjan96@gmail.com ";
$sub="hello ";
$msg="mero naam saman ho nice to meet you ";
$header=" sendmail_from:saman.maharjan96@gmail.com ";
$email_sent = mail($to,£sub,$msg,$header);
if($email_sent){
	print "email is sent ";
}else{
print "baka error aayo ";
}*/
?>
