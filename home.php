<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <title>Home</title>

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

                    <li class="active"><a href="home.php">Home</a></li>
                    <li ><a href="intro.php">About us</a></li>
                    <li><a href="product.php">Product</a></li>
                    <li><a href="price.php">Price list</a></li>
                    <li><a href="contact.php">Contact us</a></li>
                    <li><a href="index.php">Sign up/ Login</a></li>
                </ul>
            </div>
        </div>
        <nav>
            <ul>
                <li class="brand"><img src="img/logo.png" alt="rick and morty logo"></li>
                <li class="active"><a href="home.php">Home</a></li>
                <li><a href="intro.php">About us</a></li>
                <li><a href="product.php">Product</a></li>
                <li><a href="price.php">Price list</a></li>
                <li><a href="contact.php">Contact us</a></li>
                <li><a href="index.php">Sign up/ Login</a></li>
            </ul>
        </nav>

    </header>
    <main>



        <!-- slideshow -->
        <section id="home" class="container-fluid slider">
            <figure>
                <img src="img/slider/slide_02.jpg" alt="first-slide" id="anh">
            </figure>
            <article class="slide-caption center-left" id="damn">
                <h1>Warhammer 40k Shop</h1>
                <p>Wargaming web-store with low prices, speedy delivery and excellent customer service. Specialising in Warhammer 40k.</p>
            </article>

        </section>
        <section id="seasons" class="container">
            
                
                    <iframe class="vid"
                            src="https://www.youtube.com/embed/QVTg-ylaS84">
                    </iframe>


        </section>
        

    </main>
    <footer>
        <a href="https://warhammer40k.fandom.com/wiki/Warhammer_40k_Wiki"><h3>Warhammer 40K Wiki</h3></a>
        <a href="https://www.facebook.com/vatlieubachkhoa"><h3>Join our Fanpage on Facebook!!!</h3></a>
    </footer>
<script src="js/main1.js">
    
</script>
<!-- bootstrap -->

</body>
</html>