<?php
include('includes/config.php');
if(isset($_POST['submit']))
{

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$city=$_POST['city'];
$country= $_POST['country'];
$zipcode=$_POST['zipcode'];
$product=$_POST['product'];
$price=$_POST['price'];
$productid=$_POST['productid'];
//$notitype='Create Account';
//$reciver='Admin';
//$sender=$email;
$yo=$dbh->prepare("SELECT * from product where product_id =:productid and product_quantity>0");
$yo->bindParam(":productid", $productid,PDO::PARAM_STR);
$yo->execute();
if($yo->rowCount() <1)
{
    echo "<script type='text/javascript'>alert('Out of stocks!');</script>";
    echo "<script type='text/javascript'> document.location = 'price.php'; </script>";
}
else{
$stmt = $dbh->prepare("SELECT numeric_code from countries where numeric_code =:zipcode");
$stmt->bindParam(":zipcode", $zipcode,PDO::PARAM_STR);
$stmt->execute();
$results=$stmt->fetchAll(PDO::FETCH_OBJ);
if($stmt->rowCount() > 0)
{
 //echo "<script type='text/javascript'>alert('Invalid Country Code!');</script>";
    // row exists. do whatever you want to do.
 $sql ="INSERT INTO orders(name,email, phone, city, country, zipcode,product,price) VALUES(:name, :email, :phone, :city, :country, :zipcode,:product,:price)";
 $query= $dbh -> prepare($sql);
 $query-> bindParam(':name', $name, PDO::PARAM_STR);
 $query-> bindParam(':email', $email, PDO::PARAM_STR);
 $query-> bindParam(':phone', $phone, PDO::PARAM_STR);
 $query-> bindParam(':city', $city, PDO::PARAM_STR);
 $query-> bindParam(':country', $country, PDO::PARAM_STR);
 $query-> bindParam(':zipcode', $zipcode, PDO::PARAM_STR);
 $query-> bindParam(':product', $product, PDO::PARAM_STR);
 $query-> bindParam(':price', $price, PDO::PARAM_STR);
 $query->execute();
 $lastInsertId = $dbh->lastInsertId();
 if($lastInsertId)
 {
 $sq="UPDATE product set product.product_quantity=product.product_quantity-1 where product.product_id=:productid";
 $hey=$dbh->prepare($sq);
 $hey->bindParam(':productid', $productid,PDO::PARAM_STR);
 $hey->execute();
 echo "<script type='text/javascript'>alert('Order Received!');</script>";
 echo "<script type='text/javascript'> document.location = 'home.php'; </script>";
 }
 else 
 {
 $error="Something went wrong. Please try again";
 }
}    
else {
	echo "<script type='text/javascript'>alert('Invalid Country Code!');</script>";
}
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
   
    <title>Price</title>

    <!-- main css -->
    
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
  
</head>
<body>
    <header id="main-header" class="container-fluid">
        <div class="mobile-nav ">
            <img src="img/logo.png" alt="rick and morty logo">
            <button id="butt" onclick="myFuncti()">Toggle Menu</button>
            <div class="dio" id="hehe">
                <ul>

                    <li ><a href="home.php">Home</a></li>
                    <li ><a href="intro.php">About us</a></li>
                    <li ><a href="product.php">Product</a></li>
                    <li class="active"><a href="price.php">Price list</a></li>
                    <li><a href="contact.php">Contact us</a></li>
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
                <li class="active"><a href="price.php">Price list</a></li>
                <li><a href="contact.php">Contact us</a></li>
                <li><a href="index.php">Sign up/ Login</a></li>
            </ul>
        </nav>

    </header>
    <main>

        <!-- slideshow -->
        <!-- characters -->
        <!-- webshop -->
        <section id="webshop" class="container">
            <h1 class="highlight">Warhammer Online Store: Safety Notice</h1>
            <p>
                Our webstore, games-workshop.com, is taking orders again in some territories
                from May 1st. As ever, the safety of our staff is our number one priority. Here’s what we’re doing to ensure the health and wellbeing of all of our staff:</p>
                <h6>Staff Safety is Our Top Priority</h6>
            <p>
                We are only opening up limited operations, 
                and only in warehouse locations where we’ve 
                been able to put in measures that ensure a safe
                working environment. We have strictly followed 
                all local government guidelines, and even gone beyond them, to ensure safety.

                We are making sure our staff 
                remain suitably separated wherever possible,
                through the use of limited staffing levels, 
                increased spacing for our staff, adjustments to the layout of our warehouse, and where necessary, the use of perspex screens.

                We will be maintaining the highest standards
                of hygiene throughout our warehouses, by way of good hand hygiene,
                the use of protective equipment in line with official guidance, and increased and regular cleaning across our sites.
            </p>
                 <div class="list-group">
					<h3>Type</h3>
                    <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
					<?php

                    $query = "SELECT DISTINCT(product_type) FROM product WHERE product_status = '1' ORDER BY product_id DESC";
                    $statement = $dbh->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector product_type" value="<?php echo $row['product_type']; ?>"  > <?php echo $row['product_type']; ?></label>
                    </div>
                    <?php
                    }

                    ?>
                    </div>
                 </div>
              
            <article class="shop" id="uyen">
                 
                
                <section id="selected-shop-item" class="selected-shop-item exit-button hidden"
                         data-exit-target="selected-shop-item">

                    <article class="content">
                        <button class="exit-button" data-exit-target="selected-shop-item">X</button>
                        <figure>
                            <img id="selected-item-img" src="#" alt="#">
                        </figure>
                        <div class="details">
                            <div class="group">
                                <h4 id="selected-item-name" class="item-name">-</h4>
                                <p id="selected-item-description" class="item-description">-</p>
                            </div>
                            <div class="group">
                                <input type="number" placeholder="Amount" min="0">
                                <button class="order-button exit-button" data-exit-target="selected-shop-item">
                                    Order Now!
                                </button>
                            </div>
                        </div>
                    </article>

                </section>
            </article>
        </section>

        <section class="container order-form">
            <article>
                <h5 class="margin-2">Free in-store pickup</h5>
                <p class="margin-2">
                    ALL orders are FREE to collect from any Games Workshop store.
                </p>

                <h5 class="margin-2">Delivery</h5>
                <ul>
                    <li>Delivery prices start from FREE for orders of 125 $ or over, and from 40 $ for orders under 125$.</li>
                    <li>We will endeavour to get all orders dispatched as soon as possible, 
                    though the additional safety measures in our factories and warehouses put
                    in place due to the COVID-19 pandemic may result in some delays, 
                    and deliveries may be disrupted locally depending on regional conditions and policies.</li>
                </ul>
            </article>
            <form id="myForm" method="post" onsubmit="return validate()">
                <h5 id='order-form' class="margin-3">Build Your Army Now!</h5>
                <label for="name">Name</label>
                <input id="name" type="text" name="name" placeholder="Full Name">
         
                <label for ="city">City/Province/State:</label>
                <input type="text" name="city" value="" id="city" placeholder="San Francisco">

                <label for ="country">Country:</label>
                <input type="text" name="country" value="" id="country" placeholder="US">

                <label for ="zipcode">Zipcode:</label>
                <input type="text" name="zipcode" value="" id="zipcode" placeholder="90105">

                <label for="email">E-mail</label>
                <input id="email" type="text" name="email" placeholder="E-mail">

                <label for="phone">Phone</label>
                <input id="phone" name="phone" type="tel" placeholder="911">

                <label for="product">Product</label>
                <input id="product" name="product" type="text" placeholder="...">

                <label for="price">Price</label>
                <input id="price" name="price" type="text" placeholder="...">

                <input type="hidden" id="productid" name="productid" type="number" placeholder="911">

                <button type="submit" name="submit" >Order Now!</button>
            </form>
        </section>




    </main>

      



    <footer>
        <a href="https://warhammer40k.fandom.com/wiki/Warhammer_40k_Wiki"><h3>Warhammer 40K Wiki</h3></a>
        <a href="https://www.facebook.com/vatlieubachkhoa"><h3>Join our Fanpage on Facebook!!!</h3></a>
    </footer>
    <style>
#loading
{
	text-align:center; 
	background: url('loader.gif') no-repeat center; 
	height: 150px;
}
</style>
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
    <script>
  $(document).ready(function(){

    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
       
        var product_type = get_filter('product_type');
       
        $.ajax({
            url:"fetch_data.php",
            type:"POST",
            data:{action:action, product_type:product_type},
           
            success:function(data){
                console.log(data);
                $("#uyen").html(data);
                $("#uyen").trigger('create');
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });


});
   
</script>
<script>
        function autofill(price,id) {
           
            document.getElementById('price').value = price;
            document.getElementById('productid').value = id;
        };
        function autofill2(vorspeise) {
             document.getElementById('product').value = vorspeise;   
        };
</script>
    <!-- bootstrap -->
    
</body>
</html>