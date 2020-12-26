<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>

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
                    <li class="active"><a href="product.php">Product</a></li>
                    <li><a href="price.php">Price list</a></li>
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
                <li class="active"><a href="product.php">Product</a></li>
                <li><a href="price.php">Price list</a></li>
                <li><a href="contact.php">Contact us</a></li>
                <li ><a href="index.php">Sign up/ Login</a></li>
            </ul>
        </nav>

    </header>
<main>



    <!-- slideshow -->
    <section id="seasons" class="container">
        <h1>NEW TO WARHAMMER 40,000?</h1>

        <article class="season">
            <p class="description">
                Welcome to the Warhammer hobby! You couldn’t have picked a better time to get started.
                Being a Warhammer hobbyist opens up a whole world of activities and community. Everything
                from building and painting collections of stunning miniatures to pitting them against other
                armies in exhilarating tabletop battles and forging your own narrative in the galaxy of the far
                future. You can delve deeper into the 41st Millennium with a huge range of novels, video games,
                and animations, alongside an active online community of fellow fans.
            </p>


            <figure role="group" class="episodes">
                <figcaption id="episode-number" data-active-episode="ep1">No. #1 <br></figcaption>


                <figure id="ep3" class="episode">
                    <img src="img/war2.jpg" alt="Description of picture 2">
                    <figcaption>
                        <p>COLLECT YOUR ARMY</p>
                        Every collection of Citadel miniatures represents a force fighting for survival in a galaxy of war
                        . From relentless superhuman warriors to endless alien swarms and abyssal horrors from
                        beyond the veil of reality, there are many armies and enemies to discover, and you’ll
                        soon have a mighty collection of your own to be proud of.
                    </figcaption>
                </figure>

                <figure id="ep2" class="episode">
                    <img src="img/col.jpg" alt="rick and morty ep1 image">
                    <figcaption>
                        <p>WAR ON THE TABLETOP</p>
                        Warhammer 40,000 is a tabletop game of dark, futuristic warfare that sees carnage erupt
                        in a spectacular scale. Whether playing narrative battles with friends or leading
                        your forces to victory in gaming tournaments, you’ll find that every tabletop battle
                        you play is unique, exciting, and tells its own tales of havoc, horror and heroism.
                    </figcaption>
                </figure>

                <figure id="ep1" class="episode">
                    <img src="img/tale1.jpg" alt="tale">
                    <figcaption>
                        <p>EXPERIENCES AMAZING TALES</p>
                        Encounter new heroes and embark on epic adventures in awesome animated series.
                        Created in collaboration with world-class animation studios, these stories
                        depict the Warhammer 40,000 universe in a new and visceral way. So sit back and
                        get ready to enjoy the 41st Millennium as you’ve never seen it before.
                    </figcaption>
                </figure>
                <div class="controls">
                    <button class="prev" onclick="nextEp()">&#10094;</button>
                    <button class="next" onclick="nextEp()">&#10095;</button>
                </div>

            </figure>

        </article>
        <article class="season">
            <h1>START WARHAMMER 40,000 YOUR WAY</h1>
            <p>
                There are three Warhammer 40,000 starter boxes to choose from – the Recruit, Elite,
                and Command Editions. Each set is specially designed to cater to three levels of experience,
                from brand-new hobbyists to more experienced players looking to dive in head first.
            </p>
            <figure role="group" class="episodes">
                <img src="img/rec.jpg" alt="rick and morty logo" class="yo">
            </figure>
        </article>
        
    </section>

   

</main>
<footer>
    <a href="https://warhammer40k.fandom.com/wiki/Warhammer_40k_Wiki"><h3>Warhammer 40K Wiki</h3></a>
    <a href="https://www.facebook.com/vatlieubachkhoa"><h3>Join our Fanpage on Facebook!!!</h3></a>
</footer>
<script src="js/main1.js">
    
</script>

</body>
</html>