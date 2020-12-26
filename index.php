<?php
session_start();
include('includes/config.php');
if(isset($_POST['login']))
{
$status='0';
$email=$_POST['username'];
$password=md5($_POST['password']);
$sql ="SELECT email,password FROM users WHERE email=:email and password=:password ";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'profile.php'; </script>";
} else{
  
  echo "<script>alert('Invalid Details Or Account Not Confirmed');</script>";

}

}

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
                    <li ><a href="contact.php">Contact us</a></li>
                    <li class="active"><a href="index.php">Sign up/ Login</a></li>
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
                <li ><a href="contact.php">Contact us</a></li>
                <li class="active"><a href="index.php">Sign up/ Login</a></li>
            </ul>
        </nav>

    </header>
    <main>

        <!-- slideshow -->
        <!-- webshop -->

        <section class="container contact-form">

            <form id="myForm" method="post" onsubmit="return validate2()">
                <label for="" class="text-uppercase text-sm">Your Email</label>
				<input type="text" placeholder="Username" name="username" class="form-control mb" required>

				<label for="" class="text-uppercase text-sm">Password</label>
			    <input type="password" placeholder="Password" name="password" class="form-control mb" required>
				<button class="btn btn-primary btn-block" name="login" type="submit">LOGIN</button>
            </form>
            <p>Don't Have an Account? <a href="register.php" >Signup</a></p></br>
            <p><a href="admin/index.php">Login as Admin </a></p>
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