<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <!-- <link href="https://fonts.cdnfonts.com/css/kidspace" rel="stylesheet"> -->
    <meta name="author" content="Ahmad Ghanem">
    <meta name="description" content="Blog about Space">
    <meta name="title" content="learning HTML, CSS, JS, Space">

    <!-- //  Don't use the keywords 
   // Mark it as a spam  -->

    <meta name="keywords" content="javascript, html, css, variable">

    <!-- logo icon -->
    <link rel="shortcut icon" href="image/logo.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- kidspace font -->
    <!-- https://colorswall.com/palette/5001 -->

    <title>Space</title>
</head>

<body>

    <div class="div-myVideo">
        <video src="video/video.mp4" type="video" autoplay muted loop id="myVideo"></video>
    </div>

    <header>
        <a href="index.html"><img src="./image/logo.png" alt="Space Logo" class="logo" /></a>
        <nav class="navigation">
            <ul>
                <li><a href="index.html">Home</a> </li>
                <li><a href="News.html">News</a></li>
                <li><a href="Weather.html">Weather</a></li>
                <li><a href="#footer-distributed">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <div class="bg">
            <h1>Welcome to the Space AG blog</h1>
            <h2> Expand your knowledge of planets, some galaxies, the latest news related to space, astronomy and
                exploration, and develop your knowledge and understanding of space.</h2>
            <h2>Choose category ...</h2>
            <div class="card">
                <a href="#adult">Adults</a>
                <a href="Kids.html">Kids</a>
            </div>
        </div>
    </section>

    <section class="main" id="adult">
        <article class="art2" id="art2id1">
            <h2 id="h2Adult">Planets are an essential part of the galaxy, but some scientists have stated that there are
                some
                similarities between galaxies and planets, especially since the galaxy is a group of planets and stars,
                and some planets contain basic components that allow life on them, but in fact one of them will not be
                able to be independent from the other, as galaxies and planets are parts basic universe.</h2>
            <h2>To find out more, choose ...</h2>
            <div class="cards">
                <a href="#planet">Planets</a>
                <a href="#Galaxy">Galaxies</a>
            </div>
        </article>

        <!-- <img src="image/Earth.jpeg" alt="main image" /> -->
        <div class="photo">
            <img src="image/1.jpg" alt="Galaxy" />
            <img src="image/6.jpg" alt="The distant universe" />
            <img src="image/3.jpg" alt="Galaxy 2" />
            <img src="image/2.jpg" alt="Invisible areas of star birth" />
            <img src="image/4.jpg" alt="Solar system" />
            <img src="image/5.png" alt="Galaxy 3" />
        </div>
    </section>

    <div class="photo2">
        <div class="carousel">
            <div class="image"><img src="image/Sun.png" alt="Sun" /></div>
            <div class="image"><img src="image/Planets/Mercury.png" alt="Mercury" /></div>
            <div class="image"><img src="image/Planets/Venus.png" alt="Venus" /></div>
            <div class="image"><img src="image/Planets/Earth.png" alt="Earth" /></div>
            <div class="image"><img src="image/Planets/Mars.png" alt="Mars" /></div>
            <div class="image"><img src="image/Planets/Jupiter.png" alt="Jupiter" /></div>
            <div class="image"><img src="image/Planets/Saturn.png" alt="Saturn" /></div>
            <div class="image"><img src="image/Planets/Neptune.png" alt="Neptune" /></div>
            <div class="image"><img src="image/Planets/pluto.png" alt="Pluto" /></div>

        </div>
    </div>

    <section class="main" id="planet">
        <article class="art2" id="art2id2">
            <h2 id="h2Planet">A planet is a spherical celestial body, which has a great gravity that helps maintain its
                shape, as it revolves around a star. Like the sun, in a special orbit, and the planet is distinguished
                by its huge size, and the current number of planets in the solar system is nine planets, and the names
                of the planets come with a detailed explanation for each planet.</h2>
            <p id="Ex">Inside each card there is an introductory explanation about the planet, click on "read more" to
                find out more information. </p>

            <div class="container">
                <div class="card_e">
                    <div class="face face1">
                        <div class="content">
                            <img src="image/Planets/Mercury.png" alt="Mercury">
                            <h3>Mercury</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>It is the smallest planet in the solar system and closest to the sun, which the ancients
                                called the wandering stars, because it is very fast in its rotation around the sun.</p>
                            <div class="card">
                                <a href="Mercury.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="card_e">
                    <div class="face face1">
                        <div class="content">
                            <img src="image/Planets/Venus.png" alt="Venus">
                            <h3>Venus</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>Venus is the second planet of the solar system in terms of the distance between it and
                                the sun. It is a dusty planet, similar to Earth in terms of size and composition.</p>
                            <div class="card">
                                <a href="Venus.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="card_e">
                    <div class="face face1">
                        <div class="content">
                            <img src="image/Planets/Earth.png" alt="Earth">
                            <h3>Earth</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>The third planet in terms of distance from the sun, and it is the only planet inhabited
                                by living organisms, and it contains liquid water on its surface and contains rocks and
                                minerals.</p>
                            <div class="card">
                                <a href="Earth.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container">
                <div class="card_e">
                    <div class="face face1">
                        <div class="content">
                            <img src="image/Planets/Mars.png" alt="Mars">
                            <h3>Mars</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>The fourth planet in terms of distance from the sun in the solar system and is classified
                                as a rocky planet, as it is half the size of planet Earth, and layers of ice cover its
                                poles.</p>
                            <div class="card">
                                <a href="Mars.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="card_e">
                    <div class="face face1">
                        <div class="content">
                            <img src="image/Planets/Jupiter.png" alt="Jupiter">
                            <h3>Jupiter</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>It is the largest planet in the solar system, as it is about 300 times the size of the
                                Earth, and it is 5 times farther from the Sun than the Earth, while the day is only
                                about 10 hours long.</p>
                            <div class="card">
                                <a href="Jupiter.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="card_e">
                    <div class="face face1">
                        <div class="content">
                            <img src="image/Planets/Saturn.png" alt="Saturn">
                            <h3>Saturn</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>It is the sixth planet from the sun, and it is the second largest planet in the solar
                                system. It is distinguished by its seven rings surrounding it, which gives it a
                                distinctive shape.</p>
                            <div class="card">
                                <a href="Saturn.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="card_e">
                    <div class="face face1">
                        <div class="content">
                            <img src="image/Planets/Uranus.png" alt="Uranus">
                            <h3>Uranus</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>The seventh planet from the sun, and the third largest planet in the solar system, it was
                                not recognized by ancient civilizations as a planet, due to its dimness and slow
                                rotation.</p>
                            <div class="card">
                                <a href="Uranus.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="card_e">
                    <div class="face face1">
                        <div class="content">
                            <img src="image/Planets/Neptune.png" alt="Neptune">
                            <h3>Neptune</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>The eighth planet away from the sun, it is a cold and dark icy planet, its temperature is
                                -255 ?? C, and it is characterized by its blue color; Because of the presence of methane
                                gas in it.</p>
                            <div class="card">
                                <a href="Neptune.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="card_e">
                    <div class="face face1">
                        <div class="content">
                            <img src="image/Planets/Pluto.png" alt="Pluto">
                            <h3>Pluto</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>One of the most famous dwarf planets, it has been classified as the ninth planet of the
                                solar system, but it and its moons that revolve around it are located within the Kuiper
                                Belt.</p>
                            <div class="card">
                                <a href="Pluto.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            </div>
        </article>


        <!-- <img src="image/Earth.jpeg" alt="main image" /> -->
        <!-- <div class="photo2">
            <img src="image/Planets/Earth.png" alt="Earth" />
            <img src="image/Sun.png" alt="Sun" />
            <img src="image/Planets/Mars.png" alt="Mars" />
            <img src="image/Planets/Neptune.png" alt="Neptune" />
            <img src="image/Planets/pluto.png" alt="Pluto" />
            <img src="image/Planets/Saturn.png" alt="Saturn" />
            </div> -->
    </section>



    <!-- position: relative;
left: 25px; -->


    <!-- Galaxies -->

    <section class="main" id="Galaxy">
        <article class="art2">
            <h2 align="center" style="max-width: 95%;">The number of galaxies in the observable universe is estimated at
                about 100-200 billion galaxies, and there are approximately 50 galaxies in the Local Group and more than
                100,000 local clusters of galaxies. There is no universal term for naming galaxies, as they were
                classified and named mostly before they were distinguished whether the object was a galaxy, or not.</h2>



            <div class="container">
                <div class="card_e">
                    <div class="face face1">
                        <div class="content">
                            <img src="image/Galaxies/Milky Way.jpg" alt="Milky Way">
                            <h3>Milky Way</br> galaxy</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>It is a spiral galaxy. It is the name of the galaxy to which the Sun, the Earth, and the
                                rest of the solar system belong. The Milky Way galaxy contains hundreds of billions of
                                stars, and huge clouds of atoms, dust and gases are spread throughout the galaxy.</p>
                            <!-- <a href="#">Read More</a> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="card_e">
                    <div class="face face1">
                        <div class="content">
                            <img src="image/Galaxies/Pinwheel galaxy.jpg" alt="Pinwheel galaxy">
                            <h3>Pinwheel</br> galaxy</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>It is a spiral galaxy located in the constellation Ursa Major. This galaxy is 27 million
                                light-years away from us and has an apparent magnitude of 7.86. It was discovered by
                                astronomer Pierre M??chain on March 27, 1781.</p>
                            <!-- <a href="#">Read More</a> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="card_e">
                    <div class="face face1">
                        <div class="content">
                            <img src="image/Galaxies/Black eye galaxy.jpg" alt="Black eye galaxy">
                            <h3>Black eye</br> galaxy</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>It is a spiral galaxy in the constellation Coma, about 17 million light-years from Earth.
                                It was discovered by English astronomer Edward Bigord on March 23, 1779, and is popular
                                among astronomers because it is shown with simple instruments.</p>
                            <!-- <a href="#">Read More</a> -->
                        </div>
                    </div>
                </div>
            </div>


            <div class="container">
                <div class="card_e">
                    <div class="face face1">
                        <div class="content">
                            <img src="image/Galaxies/Bodhi galaxy.jpg" alt="Bodhi galaxy">
                            <h3>Bodhi</br> galaxy</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>It is a spiral galaxy 12 million light-years away, located in the constellation Ursa
                                Major. Its apparent value is approximately 7. It was discovered by astronomer Johann
                                Elert Bode in 1774 AD and is therefore sometimes called the "Bode Galaxy" after him.
                            </p>
                            <!-- <a href="#">Read More</a> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="card_e">
                    <div class="face face1">
                        <div class="content">
                            <img src="image/Galaxies/Cartwheel galaxy.jpg" alt="Cartwheel galaxy">
                            <h3>Cartwheel </br>galaxy</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>It is a lenticular galaxy about 500 million light-years away from us. The galaxy is
                                located in the constellation of the Sculptor's Laboratory. The diameter of the galaxy is
                                about 150 thousand light-years. The galaxy was discovered by Fritz Zwicky in 1941.</p>
                            <!-- <a href="#">Read More</a> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="card_e">
                    <div class="face face1">
                        <div class="content">
                            <img src="image/Galaxies/Cigarette galaxy.jpg" alt="Cigarette galaxy">
                            <h3>Cigarette </br>galaxy</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>It is a star galaxy about 12 million light-years away. It is about five times brighter
                                than the Milky Way. As one of the closest stellar galaxies to Earth, scientists have
                                discovered the brightest pulsar known to date, named M82 X-2.</p>
                            <!-- <a href="#">Read More</a> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="card_e">
                    <div class="face face1">
                        <div class="content">
                            <img src="image/Galaxies/Hogg Galaxy.jpg" alt="Hogg Galaxy">
                            <h3>Hogg </br>galaxy</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>It is a circular-looking galaxy, Hogg's body or Hogg's galaxy, which was discovered by
                                the American astronomer "Arthur Hogg" in 1950. It is considered a model of the ring
                                galaxy. The ring contains a large number of stars, blue, newly emerging, and very
                                bright.</p>
                            <!-- <a href="#">Read More</a> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="card_e">
                    <div class="face face1">
                        <div class="content">
                            <img src="image/Galaxies/Whirlpool galaxy.jpg" alt="Whirlpool galaxy">
                            <h3>Whirlpool</br> galaxy</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>One of the most luminous galaxies in astronomy. Easily photographed and viewed by smaller
                                telescopes, this celestial beauty is studied extensively in a range of wavelengths by
                                large ground-based and space-based observatories. </p>
                            <!-- <a href="#">Read More</a> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="card_e">
                    <div class="face face1">
                        <div class="content">
                            <img src="image/Galaxies/Redshift galaxy.jpg" alt="Whirlpool galaxy">
                            <h3>Redshift</br> galaxy</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>It is the brightest galaxy in the universe and is located in the constellation of the
                                sixth, 12.9 billion light-years away from Earth. This galaxy was formed relatively
                                shortly after the Big Bang in the era of reionization, which is the era in the Big Bang
                                theory.</p>
                            <!-- <a href="#">Read More</a> -->
                        </div>
                    </div>
                </div>
            </div>

        </article>
    </section>



    <!-- Footer Start -->
    <footer class="footer-distributed" id="footer-distributed">

        <div class="footer-left">

            <img src="image/logo.png" alt="Space AG Logo" class="logo">

            <div class="footer-links">

                <a href="index.html" class="link-1">Home</a>
                <a href="News.html">News</a>
                <a href="Weather.html">Weather</a>

            </div>
            <p class="Copyright">Copyright &copy;
                <script>document.write(new Date().getFullYear())</script> All rights reserved to Ahmed Ghanem
            </p>
        </div>

        <div class="footer-center">

            <div>
                <i class="fa fa-globe fa_custom"></i>

                <p class="icon-icon"><a href="#planet">Planet</a></p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p class="icon-icon">+962781977173</p>
            </div>

            <div>
                <i class="fa fa-envelope"></i>
                <p class="icon-icon"><a href="mailto:support@company.com">amg.amyg@gmail.com</a></p>
            </div>




        </div>

        <div class="footer-right">

            <p class="footer-company-about">
                <span>Our Accounts</span>
                You can also follow us on social media.
            </p>

            <div class="footer-icons">

                <a href="https://web.facebook.com/"><i class="fa fa-facebook"></i></a>
                <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                <a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
                <a href="https://www.instagram.com/15ahmad9/"><i class="fa fa-instagram"></i></a>

            </div>
        </div>


        <p id="Pfooter">or</p>

        <div class="Contact">

            <form action="process/ask.php" method="get">
                <div class="con">
                    <input name="Name" type="text" class="input" placeholder="Name" />
                </div>
                <textarea name="Question" class="input" placeholder="Question"></textarea>
                <input type="submit" value="Send" />
            </form>

        </div>

    </footer>
    <!-- Footer End -->


<!-- Style Start -->
    <style>
        /* Footer contact */

        .footer-distributed .Contact {
            display: flex;
            justify-content: center;
            padding-left: 10%;
        }

        .footer-distributed #Pfooter {
            display: flex;
            justify-content: center;
            padding-left: 10%;
            color: white;
            font-size: 25px;
        }


        form {
            max-width: 520px;
            margin: 20px auto;

        }

        .con {
            display: flex;
            gap: 10px;
        }

        .input {
            color: white;
            font-size: 15px;
            border-radius: 5px;
            background-color: transparent;
            border: 2px solid white;
            transition: all 0.3s;
            padding: 15px;
            margin-bottom: 15px;
            width: 100%;
            box-sizing: border-box;
            outline: 0;

            justify-content: center;
            align-items: center;
            width: 300px;
            position: relative;
            left: 25%;
        }

        .input:focus {
            border: 2px solid #2b3a55;

        }

        textarea {
            height: 150px;
            line-height: 150%;
            resize: vertical;
        }

        [type="submit"] {
            width: 300px;
            background: linear-gradient(50deg, #0f346d, #74b5e8, #24346c);
            border-radius: 5px;
            border: 0;
            cursor: pointer;
            color: white;
            font-size: 24px;
            padding-top: 10px;
            padding-bottom: 10px;
            transition: all 0.3s;
            margin-top: -4px;
            font-weight: 700;
            position: relative;
            left: 25%;
        }

        [type="submit"]:hover {
            background: linear-gradient(50deg, #0f346d, #8ab1cf, #24346c);
        }
    </style>
<!-- Style End -->


</body>

</html>
