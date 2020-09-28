<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css\magnific-popup.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media-queries.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv = "refresh" content = "2; url = ./we_kneed_sourdough/index.php" /> -->
    <title>James Bindin</title>
</head>
<body>

    <nav class="navbar">
        <div class="navbar__button icon-large">
            <ion-icon class="navbar__button--menu text-white js--nav-icon" name="menu-outline"></ion-icon>
        </div>
    </nav>
        <div class="dropdown-menu js--nav-menu">
            <ul>
                <li><a href="#about" class="js--nav_item"><h3 class="dropdown-menu__text text-white disable-select">About Me</h3></a></li>
                <li><a href="#wksd" class="js--nav_item"><h3 class="dropdown-menu__text text-white disable-select">My Work</h3></a></li>
                <li><a href="#contact" class="js--nav_item"><h3 class="dropdown-menu__text text-white disable-select">Contact Me</h3></a></li>
            </ul>
        </div>

    <header id="header">
        <div class="header-container">
            <div class="header-text">
                <h1 class="text-white">Hello, I'm <span class="text-pink">James Bindin</span><br>Welcome to my Portfolio page!</h1>
            </div>
            <div class="header-btn">
                <a class="btn btn-dark" href="#wksd">View my work</a>
                <a class="btn btn-dark" href="#about">About Me</a>
            </div>
        </div>
    </header>

    <section class="about" id="about">
    <div class="about-title">
        <h2 class="underline">About Me</h2>
    </div>
    <div class="about-content">
        <div class="about-content__image">
            <img class="shadow" src="images\linkedin_photo_blur.png" alt="photo of me"> 
        </div>
        <div class="about-content__text shadow">
            <p>I am very passionate about programming, especially Responsive design and web development.</p><br>
            <p>Currently I am looking for work as a full stack or front end developer. I am keen to learn and would love a opportunity to carry on improving as a software engineer.</p><br>
            <p>Feel free to look at my projects, each one has been deployed to a server and can be visited following their links.</p>
        </div>
    </div>
    </section>

    <section class="wksd" id="wksd">
        <div class="proj-container">
            <div class="proj-header">
                <h2 class="underline">We Kneed Sourdough</h2>
            </div>
            <div class="proj-description">
                <p>My most recent project, I focused mainly on the user interface and mobile first design. The site is an online bakery where users can place and view their orders. PHP was used for the server side functionality</p>
            </div>
            <div class="proj-images">
                <a class="js--image-popup" href="images\wksd\wksd_1.PNG"><img class="shadow" src="images\wksd\wksd_1.PNG" alt="We Kneed Sourdough"></a>
                <a class="js--image-popup" href="images\wksd\wksd_2.PNG"><img class="shadow" src="images\wksd\wksd_2.PNG" alt="We Kneed Sourdough"></a>
                <a class="js--image-popup" href="images\wksd\wksd_3.PNG"><img class="shadow" src="images\wksd\wksd_3.PNG" alt="We Kneed Sourdough"></a>
                <a class="js--image-popup" href="images\wksd\wksd_4.PNG"><img class="shadow" src="images\wksd\wksd_4.PNG" alt="We Kneed Sourdough"></a>
                <a class="js--image-popup" href="images\wksd\wksd_5.PNG"><img class="shadow" src="images\wksd\wksd_5.PNG" alt="We Kneed Sourdough"></a>
                <a class="js--image-popup" href="images\wksd\wksd_6.PNG"><img class="shadow" src="images\wksd\wksd_6.PNG" alt="We Kneed Sourdough"></a>
                <a class="js--image-popup" href="images\wksd\wksd_7.PNG"><img class="shadow" src="images\wksd\wksd_7.PNG" alt="We Kneed Sourdough"></a>
                <a class="js--image-popup" href="images\wksd\wksd_8.PNG"><img class="shadow" src="images\wksd\wksd_8.PNG" alt="We Kneed Sourdough"></a>
                <a class="js--image-popup" href="images\wksd\wksd_9.PNG"><img class="shadow" src="images\wksd\wksd_9.PNG" alt="We Kneed Sourdough"></a>
                <a class="js--image-popup" href="images\wksd\wksd_9.PNG"><img class="shadow" src="images\wksd\wksd_10.PNG" alt="We Kneed Sourdough"></a>
            </div>
            <div class="proj-languages">
                <div class="icon-container">
                    <img src="images\icons\icons8-html-5-100.png" alt="">
                    <p>Html</p>
                </div>
                <div class="icon-container">
                    <img src="images\icons\icons8-css3-100.png" alt="">
                    <p>CSS</p>
                </div>
                <div class="icon-container">
                    <img src="images\icons\icons8-javascript-96.png" alt="">
                    <p>JavaScript</p>
                </div>
                <div class="icon-container">
                    <img src="images\icons\icons8-jquery-100.png" alt="">
                    <p>JQuery</p>
                </div>
                <div class="icon-container">
                    <img src="images\icons\icon-ajax.png" alt="">
                    <p>AJAX</p>
                </div>
                <div class="icon-container">
                    <img src="images\icons\icons8-php-logo-100.png" alt="">
                    <p>PHP</p>
                </div>
                <div class="icon-container">
                    <img src="images\icons\icons8-mysql-logo-100.png" alt="">
                    <p>MySql</p>
                </div>
            </div>
            <div class="proj-link">
                <a class="btn btn-light" href="we_kneed_sourdough\index.php">visit site</a>
            </div>
        </div>
    </section>

    <section class="drawshare">
        <div class="proj-container">
            <div class="proj-header">
                <h2 class="underline">Drawshare</h2>
            </div>
            <div class="proj-description">
                <p>Drawshare is a forum site where users can create groups, posts and comment on posts. It features a sketchpad and custom animations on the front page. Django was used for this project and it was deployed on Heroku</p>
            </div>
            <div class="proj-images">
                <a class="js--image-popup" href="images\draw\draw_1.PNG"><img class="shadow" src="images\draw\draw_1.PNG" alt="Drawshare"></a>
                <a class="js--image-popup" href="images\draw\draw_2.PNG"><img class="shadow" src="images\draw\draw_2.PNG" alt="Drawshare"></a>
                <a class="js--image-popup" href="images\draw\draw_3.PNG"><img class="shadow" src="images\draw\draw_3.PNG" alt="Drawshare"></a>
                <a class="js--image-popup" href="images\draw\draw_4.PNG"><img class="shadow" src="images\draw\draw_4.PNG" alt="Drawshare"></a>
                <a class="js--image-popup" href="images\draw\draw_5.PNG"><img class="shadow" src="images\draw\draw_5.PNG" alt="Drawshare"></a>
                <a class="js--image-popup" href="images\draw\draw_6.PNG"><img class="shadow" src="images\draw\draw_6.PNG" alt="Drawshare"></a>
                <a class="js--image-popup" href="images\draw\draw_7.PNG"><img class="shadow" src="images\draw\draw_7.PNG" alt="Drawshare"></a>
                <a class="js--image-popup" href="images\draw\draw_8.PNG"><img class="shadow" src="images\draw\draw_8.PNG" alt="Drawshare"></a>
                <a class="js--image-popup" href="images\draw\draw_9.PNG"><img class="shadow" src="images\draw\draw_9.PNG" alt="Drawshare"></a>
            </div>
            <div class="proj-languages">
                <div class="icon-container">
                    <img src="images\icons\icons8-html-5-100.png" alt="">
                    <p>Html</p>
                </div>
                <div class="icon-container">
                    <img src="images\icons\icons8-css3-100.png" alt="">
                    <p>CSS</p>
                </div>
                <div class="icon-container">
                    <img src="images\icons\icons8-javascript-96.png" alt="">
                    <p>JavaScript</p>
                </div>
                <div class="icon-container">
                    <img src="images\icons\icons8-jquery-100.png" alt="">
                    <p>JQuery</p>
                </div>
                <div class="icon-container">
                    <img src="images\icons\icons8-python-100.png" alt="">
                    <p>Python</p>
                </div>
                <div class="icon-container">
                    <img src="images\icons\icons8-django-100.png" alt="">
                    <p>Django</p>
                </div>
                <div class="icon-container">
                    <img src="images\icons\icons8-heroku-100.png" alt="">
                    <p>Heroku</p>
                </div>
            </div>
            <div class="proj-link">
                <a class="btn btn-light" href="https://jamesbindindrawshare.herokuapp.com/">visit site</a>
            </div>
        </div>
    </section>

    <section class="forex-trading">
        <div class="proj-container">
            <div class="proj-header">
                <h2 class="underline">Forex Trading</h2>
            </div>
            <div class="proj-description">
                <p>This was my final year project at university. It is a trading simulator where users can make practice trades using live data. It features a machine learning prediction which uses Gaussian processes. The site was written using Node.js, React and Python for the prediction.</p>
            </div>
            <div class="proj-images">
                <a class="js--image-popup" href="images\fx\fx_1.PNG"><img class="shadow" src="images\fx\fx_1.PNG" alt="forex trading"></a>
                <a class="js--image-popup" href="images\fx\fx_2.PNG"><img class="shadow" src="images\fx\fx_2.PNG" alt="forex trading"></a>
                <a class="js--image-popup" href="images\fx\fx_3.PNG"><img class="shadow" src="images\fx\fx_3.PNG" alt="forex trading"></a>
                <a class="js--image-popup" href="images\fx\fx_4.PNG"><img class="shadow" src="images\fx\fx_4.PNG" alt="forex trading"></a>
                <a class="js--image-popup" href="images\fx\fx_5.PNG"><img class="shadow" src="images\fx\fx_5.PNG" alt="forex trading"></a>
            </div>
            <div class="proj-languages">
                <div class="icon-container">
                    <img src="images\icons\icons8-html-5-100.png" alt="">
                    <p>Html</p>
                </div>
                <div class="icon-container">
                    <img src="images\icons\icons8-css3-100.png" alt="">
                    <p>CSS</p>
                </div>
                <div class="icon-container">
                    <img src="images\icons\icons8-javascript-96.png" alt="">
                    <p>JavaScript</p>
                </div>
                <div class="icon-container">
                    <img src="images\icons\icons8-react-native-100.png" alt="">
                    <p>React</p>
                </div>
                <div class="icon-container">
                    <img src="images\icons\icons8-jquery-100.png" alt="">
                    <p>JQuery</p>
                </div>
                <div class="icon-container">
                    <img src="images\icons\icons8-python-100.png" alt="">
                    <p>Python</p>
                </div>
                <div class="icon-container">
                    <img src="images\icons\icons8-nodejs-100.png" alt="">
                    <p>Node.js</p>
                </div>
                <div class="icon-container">
                    <img src="images\icons\icons8-mongodb-100.png" alt="">
                    <p>MongoDB</p>
                </div>
                <div class="icon-container">
                    <img src="images\icons\icons8-heroku-100.png" alt="">
                    <p>Heroku</p>
                </div>
            </div>
            <div class="proj-link">
                <a class="btn btn-light" href="https://jamesbindinfyp.herokuapp.com">visit site</a>
            </div>
        </div>
    </section>
    
    <section class="contact" id="contact">
        <div class="contact-header">
            <h2 class="underline">Contact Me</h2>
            <p>Thanks for taking the time to view my portfolio. </p>
            <p>Please feel free to contact me, my projects are also avaliabe on Github</p>
        </div>
        <div class="contact-links">
            <div class="contact-link">
                <a href="mailto:jbindin@yahoo.co.uk">
                    <img src="images\icons\icons8-email-64.png" alt="">
                    <p>jbindin@yahoo.co.uk</p>
                </a>
            </div>
            <div class="contact-link">
                <a href="https://www.linkedin.com/in/james-bindin-35b268158/">
                    <img src="images\icons\icons8-linkedin-64.png" alt="">
                    <p>linkedin.com/in/james-bindin-35b268158/</p>
                </a>
            </div>
            <div class="contact-link">
                <a href="https://github.com/jamesbindin">
                    <img src="images\icons\icons8-github-64.png" alt="">
                    <p>github.com/jamesbindin</p>
                </a>
            </div>
        </div>
    </section>

    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="js\jquery.magnific-popup.min.js"></script>
    <script src="js\jquery.particleground.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
