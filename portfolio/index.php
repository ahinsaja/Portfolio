<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saja</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    
</head>

<body style="overflow-x: hidden;">
    <header class="header">
        <a href="#home" class="logo">Saja</a>

        <nav class="navbar">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Skill</a>
            <a href="#">Saja</a>
            <a href="#">Contact</a>
        </nav>
    </header>

    <header class="header">
        <a href="#" class="logo">Saja</a>

        <!-- navbar -->

        <nav class="navbar">
            <a href="#home" style="--i:1" class="active">Home</a>
            <a href="#about" style="--i:2">About</a>
            <a href="#services" style="--i:3">Skill</a>
            <a href="#skills" style="--i:4">Portfolio</a>
            <a href="#contact" style="--i:5">Contact</a>
        </nav>
    </header>

    <!-- home -->

    <section class="home" id="home">
        <div class="home-content">
            <h3>Hello, It's Me</h3><br>
            <h1>ahinsaja_</h1><br>
            <h3>And I'm a <span class="text"></span></h3><br>
            <p>I'm a web Designer with expensive experience.
                <br>expertise is to create and website design , frontend design and many more...
            </p>

            <div class="home-sci">
                <a href="https://www.facebook.com/profile.php?id=100069346454256&mibextid=ZbWKwL" style="--i:7"><i
                        class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/ahinsaja_?igsh=a3ZoeXduYzhtNzgx" style="--i:8"><i
                        class="bx bxl-instagram"></i></a>
                <a href="https://wa.me/qr/APQKYNZPFMVQN1" style="--i:9"><i class="bx bxl-whatsapp"></i></a>
                <a href="#" style="--i:10"><i class="bx bxl-tiktok"></i></a>
            </div>
            <a href="#" class="btn-box">More About Me</a>
            <div class="my-img">
                <img src="mypic4.png">
            </div>
            <!-- <a href="#" class="btn-box">More About Me</a> -->
        </div>
    </section>

    <!-- about -->

    <section class="about" id="about">
        <div class="about-img">
            <img src="mypic4.png"><i bx-border-circle></i>
        </div>

        <div class="about-text">
            <h2>About <span>Me</span></h2>
            <h4>Full Stack Developer</h4>
            <p>I am a skilled web designer with 1 year of experience.</p>
            <a href="#" class="btn-box">More About Me</a>
        </div>
    </section>

    <!-- services -->

    <section>
        <div class="services" id="services">
            <div class="container">
                <h1 class="sub-title" style="font-size: 60px; text-align: center;">My <span>Services</span></h1>
                <div class="services-list">

                    <div>
                        <i class="bx bx-code" style="color: rgb(255, 21, 0);"></i>
                        <h2>UI/UX Design</h2>
                        <p>abcdefg.....</p>
                        <a href="#" class="read">learn more</a>
                    </div>

                    <div>
                        <i class="bx bx-crop" style="color: rgb(255, 21, 0);"></i>
                        <h2>Web Design</h2>
                        <p>abcdefg.....</p>
                        <a href="#" class="read">learn more</a>
                    </div>

                    <div>
                        <i class="bx bxl-apple" style="color: rgb(255, 21, 0);"></i>
                        <h2>App Design</h2>
                        <p>abcdefg.....</p>
                        <a href="#" class="read">learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- my skills -->

    <div class="container">
        <h1 class="sub-title" style="font-size: 60px; text-align: center;">My<span> Skills</span></h1>
    </div>

    <!-- technical skills -->

    <section>
        <div class="container1" id="skills">
            <h1 class="heading1">Technical Skills</h1>

            <div class="Technical-bars">
                <div class="bar"><i style="color:rgb(255, 21, 0)" class="bx bxl-html5"></i>
                    <div class="info">
                        <span>HTML</span>
                    </div>
                    <div class="progress-line html">
                        <span></span>
                    </div>
                </div>
            </div>

            <div class="Technical-bars">
                <div class="bar"><i style="color:rgb(0, 13, 255)" class="bx bxl-css3"></i>
                    <div class="info">
                        <span>CSS</span>
                    </div>
                    <div class="progress-line css">
                        <span></span>
                    </div>
                </div>
            </div>

            <div class="Technical-bars">
                <div class="bar"><i style="color:rgb(238, 255, 0)" class="bx bxl-javascript"></i>
                    <div class="info">
                        <span>Javascript</span>
                    </div>
                    <div class="progress-line javascript">
                        <span></span>
                    </div>
                </div>
            </div>

            <div class="Technical-bars">
                <div class="bar"><i style="color:rgb(11, 110, 16)" class="bx bxl-react"></i>
                    <div class="info">
                        <span>react</span>
                    </div>
                    <div class="progress-line react">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>


        <!-- professional skills -->

        <div class="container1">
            <h1 class="heading1">Professional skills</h1>

            <div class="radial-bars">
                <svg x="0px" y="0px" viewBox="0 0 200 200">
                    <circle class="progress-bar" cx="100" cy="100" r="80"></circle>
                    <circle class="path path-1" cx="100" cy="100" r="80"></circle>
                </svg>
                <div class="precentage">90%</div>
                <div class="text">creativity</div>
            </div>

            <div class="radial-bars">
                <svg x="0px" y="0px" viewBox="0 0 200 200">
                    <circle class="progress-bar" cx="100" cy="100" r="80"></circle>
                    <circle class="path path-1" cx="100" cy="100" r="80"></circle>
                </svg>
                <div class="precentage">65%</div>
                <div class="text">Communication</div>
            </div>

            <div class="radial-bars">
                <svg x="0px" y="0px" viewBox="0 0 200 200">
                    <circle class="progress-bar" cx="100" cy="100" r="80"></circle>
                    <circle class="path path-1" cx="100" cy="100" r="80"></circle>
                </svg>
                <div class="precentage">75%</div>
                <div class="text">Problem Solving</div>
            </div>

            <div class="radial-bars">
                <svg x="0px" y="0px" viewBox="0 0 200 200">
                    <circle class="progress-bar" cx="100" cy="100" r="80"></circle>
                    <circle class="path path-1" cx="100" cy="100" r="80"></circle>
                </svg>
                <div class="precentage">85%</div>
                <div class="text">TeamWork</div>
            </div>

        </div>

    </section>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>


    <!-- portfolio -->

    <section>
        <div id="portfolio" id="project">
            <div class="main-text" id="project">
                <h2>Latest<span>Projects</span></h2><br>

                <div class="portfolio-content">
                    <div class="row">
                        <img src="pngtree-ui-ux-development-design-background-concept-image_900165.jpg">
                        <div class="layer">
                            <h5>UI/UX Design</h5>
                            <p>abcdefg.....</p>
                            <a href="#"><i class="bx bx-link-external" style="color: aliceblue;"></i></a>
                        </div>
                    </div>

                    <div class="row">
                        <img src="pngtree-ui-ux-development-design-background-concept-image_900165.jpg">
                        <div class="layer">
                            <h5>UI/UX Design</h5>
                            <p>abcdefg.....</p>
                            <a href="#"><i class="bx bx-link-external" style="color: aliceblue;"></i></a>
                        </div>
                    </div>

                    <div class="row">
                        <img src="pngtree-ui-ux-development-design-background-concept-image_900165.jpg">
                        <div class="layer">
                            <h5>UI/UX Design</h5>
                            <p>abcdefg.....</p>
                            <a href="#"><i class="bx bx-link-external" style="color: aliceblue;"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact -->

    <section class="contact" id="contact">
        <div class="contact-text">
            <h2>Contact <span>Me</span></h2>
            <h4>Let's work Together</h4>
            <p>abcdefg...</p>
            <div class="contact-list">
                <li> <i class="bx bxs-send"></i>ahinsajayasinghe0925@gmail.com</li>
                <li> <i class="bx bxs-phone"></i>0701210660</li>
            </div>
            <div class="contact-icons">
                <a href="https://www.facebook.com/profile.php?id=100069346454256&mibextid=ZbWKwL"><i
                        class="bx bxl-facebook-circle"></i></a>
                <a href=""><i class="bx bxl-twitter"></i></a>
                <a href="https://www.instagram.com/ahinsaja_?igsh=a3ZoeXduYzhtNzgx"><i class="bx bxl-instagram"></i></a>
                <a
                    href="https://www.linkedin.com/in/ahinsa-jayasinghe-70330a308?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BDOHgZyEAQ2avivkkiBrj5Q%3D%3D"><i
                        class="bx bxl-linkedin"></i></a>
            </div>

        </div>

        <div class="contact-form" style="width: 600%;">
            <form action="">
                <input type="text" id="n"
                    style="border: none; outline: none; width: 600%; padding: 10px; background: #55555557; color: #c9c5c5; font-size: 1rem; font-weight: 600; margin-bottom: 0.5rem; border-radius: 0.5rem;"
                    placeholder="Enter Your Name" required>

                <input type="email" id="em"
                    style="border: none; outline: none; width: 600%; padding: 10px; background: #55555557; color: #d6d1d1; font-size: 1rem; font-weight: 600; margin-bottom: 0.5rem; border-radius: 0.5rem;"
                    placeholder="Enter Your Email" required>

                <input type="text" id="sub"
                    style="border: none; outline: none; width: 600%; padding: 10px; background: #55555557; color: #ffffff; font-size: 1rem; font-weight: 600; margin-bottom: 0.5rem; border-radius: 0.5rem;"
                    placeholder="Enter Your Subject">

                <textarea name="" id="msg"
                    style="border: none; outline: none; width: 600%; padding: 10px; background: #55555557; color: #ffffff; font-size: 1rem; font-weight: 600; margin-bottom: 0.5rem; border-radius: 0.5rem;"
                    id="" cols="40" rows="10" placeholder="Enter Your Message" required></textarea>

                <input type="submit" onclick="abc();"
                    style="border: none; outline: none; width: 600%; padding: 10px; background: rgb(255, 21, 0); color: white; font-size: 1rem; font-weight: 600; margin-bottom: 0.5rem; border-radius: 0.5rem;"
                    value="submit" class="send">

                <button onclick="my();">Submit</button>
            </form>
        </div>
    </section>

    <!-- last text -->

    <div class="last-text">
        <p>Developed with love by ahinsaja_ © 2024</p>
    </div>
    <a href="#" class="top"><i class="bx bx-up-arrow-alt"></i></a>




    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="script.js"></script>
</body>

</html>