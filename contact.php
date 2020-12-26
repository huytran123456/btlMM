<?php
include('includes/config.php');
if(isset($_POST['submit']))
{

$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];

//$notitype='Create Account';
//$reciver='Admin';
//$sender=$email;
 //echo "<script type='text/javascript'>alert('Invalid Country Code!');</script>";
    // row exists. do whatever you want to do.
 $sql ="INSERT INTO contact(name,email, subject) VALUES(:name, :email, :subject)";
 $query= $dbh -> prepare($sql);
 $query-> bindParam(':name', $name, PDO::PARAM_STR);
 $query-> bindParam(':email', $email, PDO::PARAM_STR);
 $query-> bindParam(':subject', $subject, PDO::PARAM_STR);
 $query->execute();
 $lastInsertId = $dbh->lastInsertId();
 if($lastInsertId)
 {
 echo "<script type='text/javascript'>alert('We well reply soon!');</script>";
 echo "<script type='text/javascript'> document.location = 'contact.php'; </script>";
 }
 else 
 {
 $error="Something went wrong. Please try again";
 }
}    
//$sqlnoti="insert into notification (notiuser,notireciver,notitype) values (:notiuser,:notireciver,:notitype)";
//$querynoti = $dbh->prepare($sqlnoti);
//$querynoti-> bindParam(':notiuser', $sender, PDO::PARAM_STR);
//$querynoti-> bindParam(':notireciver',$reciver, PDO::PARAM_STR);
//$querynoti-> bindParam(':notitype', $notitype, PDO::PARAM_STR);
//$querynoti->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Contact us</title>

    <!-- main css -->
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
</head>
<body>
    <header id="main-header" class="container-fluid">
        <div class="mobile-nav ">
            <img src="img/logo.png" alt="rick and morty logo">
            <button id="butt" onclick="myFuncti()">Toggle Menu</button>
            <div class="dio" id="hehe" >
                <ul>

                    <li ><a href="home.php">Home</a></li>
                    <li ><a href="intro.php">About us</a></li>
                    <li ><a href="product.php">Product</a></li>
                    <li ><a href="price.php">Price list</a></li>
                    <li class="active"><a href="contact.php">Contact us</a></li>
                    <li><a href="index.php">Sign up/ Login</a></li>
                </ul>
            </div>
        </div>
        <nav>
            <ul>
                <li class="brand"><img src="img/logo.png" alt="rick and morty logo"></li>
                <li ><a href="home.php">Home</a></li>
                <li><a href="intro.php">About us</a></li>
                <li ><a href="product.php">Product</a></li>
                <li ><a href="price.php">Price list</a></li>
                <li class="active"><a href="contact.php">Contact us</a></li>
                <li><a href="index.php">Sign up/ Login</a></li>
            </ul>
        </nav>

    </header>
    <main>

        <!-- slideshow -->
        <!-- webshop -->

        <section class="container contact-form">

            <form id="myForm" method="post" onsubmit="return validate2()">
                <h5 id='contact-form' class="margin-3">Contact Us</h5>
                <label for="name">Name</label>
                <input id="name" type="text" name="name" placeholder="Full Name">

                <label for="email">E-mail</label>
                <input id="email" type="text" name="email" placeholder="E-mail">

                <label for="subject">Your Issue</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px" type="text"></textarea>

                <button type="submit" name="submit">Submit!</button>
            </form>
        </section>
    </main>
    <footer>
        <a href="https://warhammer40k.fandom.com/wiki/Warhammer_40k_Wiki"><h3>Warhammer 40K Wiki</h3></a>
        <a href="https://www.facebook.com/vatlieubachkhoa"><h3>Join our Fanpage on Facebook!!!</h3></a>
    </footer>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>');</script>
    <script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
    <script type="text/javascript" src="js/main1.js" charset="utf-8" defer></script>
    <!-- bootstrap -->
    

</body>
</html>