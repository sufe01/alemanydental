<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Vertical double slider</title>
</head>

<body>
    <div class="indexBody">




        <div class="slider-contain">
            <!-- ______________Right_Slide_________________ -->
            <div class="left-slide">
                <div style="background: url(assets/images/split-slider-image-6.jpg);">
                    <form action="">
                        <h2>OUR OFFICE</h2>
                        <p><i class="fas fa-map-marked-alt"></i> 1655 Southgate Ave. Suite 100</p>
                        <p><i class="fas fa-home"></i> Daly City, CA, 94015</p>
                        <div>
                            <div class="d-flex gap-2" style="justify-content: space-between;">
                                <input type="text" name="name" placeholder="Your name">
                                <input type="email" name="email" placeholder="Email"><br>
                            </div>
                            <textarea name="msg" cols="30" rows="10" placeholder="Message"></textarea>
                            <a href="" class="bttn btn-blue">CONTACT US</a>
                        </div>
                    </form>
                </div>
                <div style="background: url(assets/images/eduardo-dutra-614571-unsplash-scaled.jpg);"> </div>
                <div style="background: #fff; color: #252e33;">
                    <h2>EXPERIENCE THE DIFFERENCE</h2>
                    <p>With over 15 years of dental experience and hundreds of cases completed, Alemany Dental provides
                        exceptional care to every patient. Read our online <a href="" style="color: #25ABD1;">Yelp!</a> and
                        <a href="" style="color: #25ABD1;">Google</a>
                        reviews!
                    </p>
                    <a href="" class="bttn btn-blue">BECOME A PATIENT <i class="fas fa-arrow-right"></i></a>
                </div>
                <div style="background: url(assets/images/Dr.-Lyew-Edit.png);"></div>

                <div style="background: #fff;">
                    <h2>OUR ADVANTAGES</h2>
                    <div class="skillsBox">
                        <div class="box">
                            <small>15 YEARS EXPERIENCE</small>
                            <span class="countNum" data-target="100"></span>
                        </div>
                        <div class="bar">
                            <div class="barUp"></div>
                        </div>
                    </div>
                    <div class="skillsBox">
                        <div class="box">
                            <small>100+ 5-STAR YELP! REVIEWS</small>
                            <span class="countNum" data-target="100"></span>
                        </div>
                        <div class="bar">
                            <div class="barUp"></div>
                        </div>
                    </div>
                    <div class="skillsBox">
                        <div class="box">
                            <small>10,000+ SMILING CLIENTS</small>
                            <span class="countNum" data-target="100"></span>
                        </div>
                        <div class="bar">
                            <div class="barUp"></div>
                        </div>
                    </div>
                    <div class="skillsBox">
                        <div class="box">
                            <small>10 MASTER CERTIFICATIONS</small>
                            <span class="countNum" data-target="100"></span>
                        </div>
                        <div class="bar">
                            <div class="barUp"></div>
                        </div>
                    </div>
                </div>

                <div style="background: url(assets/images/DRCHADLYEW_20200305_115811_2852.jpg);"></div>
            </div>
            <!-- ______________Left_Slide_________________ -->
            <div class="right-slide">
                <div style="background: #fff;">
                    <h2>ALEMANY DENTAL</h2>
                    <p>Welcome to Alemany Dental, the dental office of Dr. Chad Lyew. It is our goal to provide you with the
                        highest quality dental care in the most welcoming and comfortable environment. Dr. Chad Lyew and our
                        dental team offer a complete list of dental services that will improve your health and smile.
                    </p>
                    <a href="" class="bttn">OUR SERVICES</a>
                </div>
                <div style="background: url(assets/images/DRCHADLYEW_20200305_103215_2770.jpg);"> </div>
                <div class="mission" style="background:#363636;color: #808285; text-align: center;">
                    <p>A Leader in High-Quality Dentistry</p>
                    <h2 style="color: #fff;">OUR MISSION</h2>
                    <p>Our goal at Alemany Dental is to provide exceptional comprehensive dental care in a warm and friendly
                        environment. We provide different forms of entertainment to make every dental experience fun and
                        relaxing. Our well-trained doctor and staff provide our patients with the highest quality dental
                        care. We have integrated a number of wonderful options to optimize the dental experience.
                    </p>
                </div>
                <div style="background: url(assets/images/DRCHADLYEW_20200305_104329_2774.jpg);"></div>



                <div style="background: #fff;">
                    <h2>Carousal</h2>
                </div>




                <div style="background: transparent; padding: 0;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3157.8745467131357!2d-122.47301678492444!3d37.67565552562933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808f7b8b67655e89%3A0x77df4619edabb467!2s1655+Southgate+Ave%2C+Daly+City%2C+CA+94015%2C+USA!5e0!3m2!1sen!2sca!4v1543252667724" width="100%" height="731" frameborder="0" style="border: 0px; pointer-events: none;" allowfullscreen=""></iframe>
                </div>
            </div>
            <!-- ----- -->
            <div class="action-buttons">
                <button class="down-button"></button>
                <button class="up-button"></button>
                <div class="dots-container">
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
            </div>

        </div>
        <div style="position: absolute; top:0;">
            <nav>
                <div class="logo">
                    <img src="assets/images/AD_250_Light.png" alt="">
                </div>
                <div class="toggle"></div>
                <ul class="navlink">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="meet-dr.php">MEET OUR DOCTOR</a></li>
                    <li><a href="office-tour.php">OFFICE TOUR</a></li>
                    <li><a href="our-services.php">SERVICES</a></li>
                    <li><a href="contact-us.php">CONTACT US</a></li>
                    <li><a href="be-a-patient.php">BECOME A PATIENT</a></li>
                    <li><a href="online-pay.php">ONLINE PAYMENT</a></li>
                    <li><a href="blog.php">BLOG</a></li>
                </ul>
            </nav>

        </div>
    </div>


    <div class="responsive">
        <div class="firstNav" style="position: absolute; top: 0; width: 100%; z-index: 100;">
            <nav class="navbar">
                <div class="container-fluid px-5">

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                            <div class="hamburger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </span>
                    </button>
                    <div class="logo">
                        <a href=""><img src="assets/images/AD_250_Light.png" alt="Logo-img"></a>
                    </div>
                </div>
            </nav>
            <div class="collapse w-100 position-absolute" id="navbarToggleExternalContent" style="top: 0;">
                <div class="p-4 navBg">
                    <ul class="navLinks">
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="meet-dr.php">MEET OUR DOCTOR</a></li>
                        <li><a href="office-tour.php">OFFICE TOUR</a></li>
                        <li><a href="our-services.php">SERVICES</a></li>
                        <li><a href="contact-us.php">CONTACT US</a></li>
                        <li><a href="be-a-patient.php">BECOME A PATIENT</a></li>
                        <li><a href="online-pay.php">ONLINE PAYMENT</a></li>
                        <li><a href="blog.php">BLOG</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container-2">
            <div class="row">
                <div class="col-6">
                    <section style="background: url(assets/images/DRCHADLYEW_20200305_115811_2852.jpg) center; background-size: cover;z-index: -1; ">
                    </section>
                </div>
                <div class="col-6">
                    <section class="ad-con">
                        <div style="width: 70%; margin: auto;">
                            <h3><span> ALEMANY DENTAL</span></h3>
                            <p class="my-5">Welcome to Alemany Dental, the dental office of Dr. Chad Lyew. It is our
                                goal to
                                provide you with the highest quality dental care in the most welcoming and comfortable
                                environment. Dr. Chad Lyew and our dental team offer a complete list of dental services
                                that
                                will improve your health and smile.
                            </p>
                            <a href="" class="bttn">OUR SERVICES <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </section>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <section class="d-flex flex-column justify-content-center align-items-center">
                        <h2 style="font-size: 24px; line-height: 36px; letter-spacing: 1px; width: 80%;">OUR ADVANTAGES
                        </h2>

                        <div class="skillsBox">
                            <div class="box">
                                <small>15 YEARS EXPERIENCE</small>
                                <span class="countNum" data-target="100"></span>
                            </div>
                            <div class="bar">
                                <div class="barUp"></div>
                            </div>
                        </div>
                        <div class="skillsBox">
                            <div class="box">
                                <small>100+ 5-STAR YELP! REVIEWS</small>
                                <span class="countNum" data-target="100"></span>
                            </div>
                            <div class="bar">
                                <div class="barUp"></div>
                            </div>
                        </div>
                        <div class="skillsBox">
                            <div class="box">
                                <small>10,000+ SMILING CLIENTS</small>
                                <span class="countNum" data-target="100"></span>
                            </div>
                            <div class="bar">
                                <div class="barUp"></div>
                            </div>
                        </div>
                        <div class="skillsBox">
                            <div class="box">
                                <small>10 MASTER CERTIFICATIONS</small>
                                <span class="countNum" data-target="100"></span>
                            </div>
                            <div class="bar">
                                <div class="barUp"></div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-6">

                    <section style="background: url(assets/images/DRCHADLYEW_20200305_103215_2770.jpg) center; background-size: cover;">
                    </section>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <section style="background: url(assets/images/Dr.-Lyew-Edit.png) center; background-size: cover;">
                    </section>
                </div>
                <div class="col-6">
                    <section class="ad-con" style="text-align: center; background: #363636;color: #808285; padding-top: 6em;">
                        <div style="width: 75%; margin: auto;">
                            <h6>A Leader in High-Quality Dentistry</h6>
                            <h3 class="my-4"><span class="text-white">OUR MISSION</span></h3>
                            <h6>
                                Our goal at Alemany Dental is to provide exceptional comprehensive dental care in a warm
                                and
                                friendly environment. We provide different forms of entertainment to make every dental
                                experience fun and relaxing. Our well-trained doctor and staff provide our patients with
                                the
                                highest quality dental care. We have integrated a number of wonderful options to
                                optimize
                                the dental experience.
                            </h6>
                        </div>
                    </section>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <section class="ad-con">
                        <div style="width: 75%; margin: auto;">
                            <h3><span>EXPERIENCE THE DIFFERENCE</span></h3>
                            <p class="my-4">With over 15 years of dental experience and hundreds of cases completed,
                                Alemany
                                Dental provides exceptional care to every patient. Read our online <a href="">Yelp!</a>
                                and
                                <a href="">Google</a> reviews!
                            </p>
                            <a href="" class="bttn btn-blue">BECOME A PATIENT <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </section>
                </div>
                <div class="col-6">
                    <section style="background: url(assets/images/DRCHADLYEW_20200305_104329_2774.jpg) center; background-size: cover;">
                    </section>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <section style="background: url(assets/images/eduardo-dutra-614571-unsplash-scaled.jpg) center; background-size: cover;">
                    </section>
                </div>
                <div class="col-6">
                    <section class="ad-con">
                        <div class="single-item">
                            <div>
                                <h2><span>5-STAR</span></h2>
                                <p>From the moment I opened up the live chat on their website, to the text appointment
                                    reminder, walking in, the staff, and Dr. Lyew, it was a great experience. Let me
                                    also
                                    tell you that I HATE going to the dentist. This was probably one of the most
                                    pleasant
                                    experiences I’ve ever had.
                                </p>
                                <h6>Melissa G. <span>/ Yelp!</span></h6>
                            </div>
                            <div>
                                <h2><span>PROFESSIONAL</span></h2>
                                <p>Extremely professional staff and amazing service. I always feel at ease when coming
                                    here.
                                    Alemany dental pay great attention to the details, from having overhead screens s
                                    patients can watch movies during procedures, to following up the next day after
                                    procedures, I am continuously impressed with the service and professionalism here.
                                    Definitely recommend anyone to come here!
                                </p>
                                <h6>Terry W. <span>/ Yelp!</span></h6>
                            </div>
                            <div>
                                <h2><span>PHEONOMENAL</span></h2>
                                <p>Phenomenal. Their staff is top notch and very pleasant. They send confirmation texts
                                    for
                                    appointments, which as you can imagine is extremely convenient. I sent Dr. Lyew an
                                    email
                                    with questions about tooth pain at 10pm on a Friday, and I received an answer from
                                    him
                                    in less than an hour. They make an effort to make you extremely comfortable during
                                    your
                                    visit.
                                </p>
                                <h6>Matt F. <span>/ Yelp!</span></h6>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <section style="background: url(assets/images/split-slider-image-6.jpg) center; background-size: cover;">
                        <div style="height: 80%; width: 80%; margin: auto; padding: 25px 0;" class="form">
                            <h3><span>OUR OFFICE</span></h3>
                            <p><i class="fas fa-map-marked-alt"></i> 1655 Southgate Ave. Suite 100</p>
                            <p><i class="fas fa-home"></i> Daly City, CA, 94015</p>
                            <form action="">
                                <input type="text" name="name" placeholder="Your name"><br>
                                <input type="email" name="email" placeholder="Email"><br>
                                <textarea rows="10" name="msg" placeholder="Message"></textarea><br>
                                <a href="" class="bttn btn-blue">CONTACT US</a>
                            </form>
                        </div>
                    </section>
                </div>
                <div class="col-6">
                    <section> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3157.8745467131357!2d-122.47301678492444!3d37.67565552562933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808f7b8b67655e89%3A0x77df4619edabb467!2s1655+Southgate+Ave%2C+Daly+City%2C+CA+94015%2C+USA!5e0!3m2!1sen!2sca!4v1543252667724" width="100%" height="731" frameborder="0" style="border: 0px; pointer-events: none;" allowfullscreen=""></iframe>
                    </section>
                </div>
            </div>

        </div>
    </div>

    <script src="assets/js/script.js"></script>
    <script src="assets/js/index_script.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script>

    </script>
</body>

</html>