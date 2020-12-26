<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>About us</title>

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
                <li class="active"><a href="intro.php">About us</a></li>
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
            <li><a href="home.php">Home</a></li>
            <li class="active"><a href="intro.php">About us</a></li>
            <li><a href="product.php">Product</a></li>
            <li><a href="price.php">Price list</a></li>
            <li><a href="contact.php">Contact us</a></li>
            <li><a href="index.php">Sign up/ Login</a></li>
        </ul>
    </nav>

</header>
<main>

    <!-- slideshow -->
    <!-- season info -->
    <section  class="container">
        <h1>THE DARK MILLENNIUM</h1>

        <article class="season">
            <h2>FIGHT FOR THE FUTURE OF HUMANITY ACROSS A VICIOUS, WAR-TORN GALAXY.</h2>
            <p class="description">
                Welcome to Warhammer 40,000, the thrilling hobby of tabletop wargaming!
                The game is set in the grim darkness of the far future, where mighty armies clash on countless war-torn worlds
                and Humanity stands alone, beset on all sides by the threats of the heretic, the mutant and the alien.
                There is no mercy. There is no respite. Prepare yourself for battle.
            </p>
            <figure role="group" class="episodes">
                <img src="img/intro.jpg" alt="rick and morty logo" >
            </figure>
            <h2>NEW TO WARHAMMER 40,000?</h2>
            <p>
                Welcome to the Warhammer hobby! You couldn’t have picked a better time to get started.
                Being a Warhammer hobbyist opens up a whole world of activities and community. Everything from building
                and painting collections of stunning miniatures to pitting them against other armies in exhilarating
                tabletop battles and forging your own narrative in the galaxy of the far future. You can delve deeper
                into the 41st Millennium with a huge range of novels, video games, and animations, alongside an active online community of fellow fans.
            </p>
            
        </article>

    </section>
    <!-- characters -->
    <section  class="container">

        <h1>HOW TO PLAY</h1>
        <p>
            Whether you’re taking your first steps into the grim darkness of the far future or are
            already a stalwart veteran, this handy series of How to Play videos will teach you the
            core rules to help you learn the game. Once you’ve mastered these basics, you can build
            upon that solid foundation and learn all the more advanced rules in the Warhammer 40,000
            Core Book that bring extra layers of tactics and strategy to your games.
        </p>
        <iframe class="vid"
                src="https://www.youtube.com/embed/r0GrQ2DIPyc">
        </iframe>

        <h1>FREE CORE RULES</h1>
        The Warhammer 40,000 Core Rules shows you how to move, shoot, 
        charge and fight with your units on the battlefield. These represent the backbone of how the 
        game is played, and once you have mastered them, you can use all the additional rules found 
        in the Warhammer 40,000 Core Book to take your game even further.
        <a href="https://warhammer40000.com/rules/"><h6>DOWNLOAD CORE RULE</h6></a>
    </section>



</main>
<footer>
    <a href="https://warhammer40k.fandom.com/wiki/Warhammer_40k_Wiki"><h3>Warhammer 40K Wiki</h3></a>
    <a href="https://www.facebook.com/vatlieubachkhoa"><h3>Join our Fanpage on Facebook!!!</h3></a>
</footer>
  <script src="js/main1.js"></script>
<!-- bootstrap -->
</body>
</html>