<?php
// Include the database configuration file  
require_once 'dbConfig.php';

$about = $con->query("SELECT title, description FROM about ORDER BY id DESC LIMIT 1");
$skills = $con->query("SELECT title, description FROM skills ORDER BY id DESC LIMIT 1");
$clients = $con->query("SELECT title, description FROM clients ORDER BY id DESC LIMIT 3");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/styles.css">


    <!-- =====BOX ICONS===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <title>Personal Portfolio website </title>
</head>

<body>
    <!--===== HEADER =====-->
    <header class="l-header">
        <nav class="nav bd-grid ">
            <div>
                <a href="#" class="nav__logo">Huzaifa.</a>
            </div>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#home" class="nav__link active-link">Home</a></li>
                    <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                    <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                    <li class="nav__item"><a href="#Services" class="nav__link">Services</a></li>
                    <li class="nav__item"><a href="#Clients" class="nav__link">Clients</a></li>
                    <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>

                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>


    <main class="l-main">
        <!--===== HOME =====-->
        <section class="home bd-grid" id="home">
            <div class="home__data">
                <h1 class="home__title">Hi,<br>I'am <span class="home__title-color">Huzaifa</span><br> Web Designer</h1>

                <a href="#contact" class="button">Hire Me</a>
                <a href="assets/img/cv.pdf" download="Huzaifa_Shafiq_CV.pdf" class="button-cv">CV &#10515; </a>
            </div>

            <div class="home__social">
                <a href="https://www.linkedin.com/feed/?trk=404_page" class="home__social-icon"><i
                        class='bx bxl-linkedin'></i></a>
                <a href="https://github.com/Huzaifa-Shafiq" class="home__social-icon"><i class='bx bxl-github'></i></a>
            </div>

            <div class="home__img">
                <svg class="home__blob" viewBox="0 0 479 467" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <mask id="mask0" mask-type="alpha">
                        <path
                            d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z" />
                    </mask>
                    <g mask="url(#mask0)">
                        <path
                            d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z" />
                        <image class="home__blob-img" x="50" y="55" href="assets/img/me.png" />
                    </g>
                </svg>
            </div>
        </section>


        <!--===== ABOUT =====-->
        <section class="about section " id="about">
            <h2 class="section-title">About</h2>

            <div class="about__container bd-grid">
                <div class="about__img">
                    <!-- Display images with BLOB data from database -->
                    <?php if ($about && $about->num_rows > 0) {
                        // Fetch associative array once
                        $row = $about->fetch_assoc(); ?>
                        <img src="assets/img/about.png"
                            alt="" />
                    <?php } else { ?>
                        <p class="status error">Image(s) not found...</p>
                    <?php } ?>
                </div>

                <div>
                    <?php
                    if (isset($row['title'])) {
                        echo '<h2 class="about__subtitle">' . $row['title'] . '</h2>';
                    } else {
                        echo "No Title found";
                    }
                    if (isset($row['description'])) {
                        echo '<p class="about__text">' . $row['description'] . '</p>';
                    } else {
                        echo "No Description found";
                    } ?>


                </div>
            </div>

        </section>

        <!--===== SKILLS =====-->
        <section class="skills section" id="skills">
            <h2 class="section-title">Skills</h2>
            <?php if ($skills && $skills->num_rows > 0) {
                // Fetch associative array once
                $row = $skills->fetch_assoc(); ?>

                <div class="skills__container bd-grid">
                    <div>
                    
                        <?php
                        if (isset($row['title'])) {
                            echo '<h2 class="skills__subtitle">' . $row['title'] . '</h2>';
                        } else {
                            echo "No Title found";
                        }
                        if (isset($row['description'])) {
                            echo '<p class="skills__text">' . $row['description'] . '</p>';
                        } else {
                            echo "No Description found";
                        }
                        ?>

                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-html5 skills__icon'></i>
                                <span class="skills__name">HTML5</span>
                            </div>
                            <div class="skills__bar skills__html">

                            </div>
                            <div>
                                <span class="skills__percentage">95%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-css3 skills__icon'></i>
                                <span class="skills__name">CSS3</span>
                            </div>
                            <div class="skills__bar skills__css">

                            </div>
                            <div>
                                <span class="skills__percentage">85%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-javascript skills__icon'></i>
                                <span class="skills__name">JAVASCRIPT</span>
                            </div>
                            <div class="skills__bar skills__js">

                            </div>
                            <div>
                                <span class="skills__percentage">65%</span>
                            </div>
                        </div>

                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxs-paint skills__icon'></i>
                                <span class="skills__name">UX/UI</span>
                            </div>
                            <div class="skills__bar skills__ux">

                            </div>
                            <div>
                                <span class="skills__percentage">85%</span>
                            </div>
                        </div>
                    </div>

                    <div>
                        <img src="assets/img/work3.jpg"
                            alt="" class="skills__img" />
                    <?php } else { ?>
                        <p class="status error">Image(s) not found...</p>
                    <?php } ?>

                </div>
            </div>
        </section>

        <!--===== services =====-->
        <section class="Services section" id="Services">
            <h2 class="section-title">Services</h2>

            <div class="Services__container bd-grid">

                <a href="https://github.com/Huzaifa-Shafiq/WebAppDev" class="Services__img">
                    <img src="assets/img/work1.jpg" alt="">
                </a>

                <a href="https://github.com/Huzaifa-Shafiq/AndroidDev" class="Services__img">
                    <img src="assets/img/work2.jpg" alt="">
                </a>

                <a href="https://github.com/Huzaifa-Shafiq/WebAppDev" class="Services__img">
                    <img src="assets/img/work3.jpg" alt="">
                </a>


                <a href="https://github.com/Huzaifa-Shafiq/AndroidDev" class="Services__img">
                    <img src="assets/img/work4.jpg" alt="">
                </a>


                <a href="https://github.com/Huzaifa-Shafiq/WebAppDev" class="Services__img">

                    <img src="assets/img/work5.jpg" alt="">
                </a>


                <a href="https://github.com/Huzaifa-Shafiq/AndroidDev" class="Services__img">

                    <img src="assets/img/work6.jpg" alt="">
                </a>
            </div>
        </section>


        <!--===== Card =====-->
        <section class="card section" id="Clients">
            <h2 class="section-title">Clients</h2>
            <div class="container">


                <div class="custom-card">
                    <div class="img-box">
                        <!-- Display images with BLOB data from database -->
                        <?php if ($clients && $clients->num_rows > 0) {
                            // Fetch associative array once
                            $row = $clients->fetch_assoc(); ?>
                            <img src="assets/img/client1.png"
                                alt="" />
                        <?php } else { ?>
                            <p class="status error">Image(s) not found...</p>
                        <?php } ?>

                    </div>
                    <div class="custom-content">

                        <?php
                        if (isset($row['title'])) {
                            echo '<h2 class="clients__subtitle">' . $row['title'] . '</h2>';
                        } else {
                            echo "No Title found";
                        }
                        if (isset($row['description'])) {
                            echo '<p class="clients__text">' . $row['description'] . '</p>';
                        } else {
                            echo "No Description found";
                        } ?>

                        <a href="card1.html">Read More</a>
                    </div>
                </div>




                <div class="custom-card">
                    <div class="img-box">
                        <!-- Display images with BLOB data from database -->
                        <?php if ($clients && $clients->num_rows > 0) {
                            // Fetch associative array once
                            $row = $clients->fetch_assoc(); ?>
                            <img src="assets/img/client2.png"
                                alt="" />
                        <?php } else { ?>
                            <p class="status error">Image(s) not found...</p>
                        <?php } ?>

                    </div>
                    <div class="custom-content">
                        <?php
                        if (isset($row['title'])) {
                            echo '<h2 class="clients__subtitle">' . $row['title'] . '</h2>';
                        } else {
                            echo "No Title found";
                        }
                        if (isset($row['description'])) {
                            echo '<p class="clients__text">' . $row['description'] . '</p>';
                        } else {
                            echo "No Description found";
                        } ?>

                        <a href="card2.html">Read More</a>
                    </div>
                </div>




                <div class="custom-card">
                    <div class="img-box">
                        <!-- Display images with BLOB data from database -->
                        <?php if ($clients && $clients->num_rows > 0) {
                            // Fetch associative array once
                            $row = $clients->fetch_assoc(); ?>
                            <img src="assets/img/client3.png"
                                alt="" />
                        <?php } else { ?>
                            <p class="status error">Image(s) not found...</p>
                        <?php } ?>

                    </div>
                    <div class="custom-content">
                        <?php
                        if (isset($row['title'])) {
                            echo '<h2 class="clients__subtitle">' . $row['title'] . '</h2>';
                        } else {
                            echo "No Title found";
                        }
                        if (isset($row['description'])) {
                            echo '<p class="clients__text">' . $row['description'] . '</p>';
                        } else {
                            echo "No Description found";
                        } ?>

                        <a href="card3.html">Read More</a>
                    </div>

                </div>

            </div>
        </section>

        <!--===== CONTACT =====-->
        <section class="contact section" id="contact">
            <h2 class="section-title">Contact</h2>

            <div class="contact__container bd-grid">
                <form action="https://formsubmit.co/huzaifamirza786000@gmail.com" method="POST" class="contact__form">
                    <input type="text" name="name" required placeholder="Name" class="contact__input">
                    <input type="mail" name="email" required placeholder="Email" class="contact__input">
                    <textarea name="message" required placeholder="Message" id="" cols="0" rows="10"
                        class="contact__input"></textarea>
                    <input type="submit" value="Send" class="contact__button">
                </form>
            </div>

        </section>

        </section>
    </main>






    <!--===== FOOTER =====-->
    <footer class="footer">
        <p class="footer__title"></p>
        <div class="footer__social">
            <a href="#" class="footer__icon"><i class='bx bxl-facebook'></i></a>
            <a href="#" class="footer__icon"><i class='bx bxl-instagram'></i></a>
            <a href="#" class="footer__icon"><i class='bx bxl-twitter'></i></a>
        </div>
        <p class="footer__copy">All rigths reserved</p>
    </footer>


    <!--===== SCROLL REVEAL =====-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--===== MAIN JS =====-->
    <script src="assets/js/main.js"></script>
</body>

</html>