<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Photo Gallery</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->

    <link  href="<?php echo base_url(); ?>assets/img/-logo.png" rel="icon">
    <link  href="<?php echo base_url(); ?>assets/img/-logo.png" rel="-logo">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="<?php echo base_url(); ?>assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="<?php echo base_url(); ?>assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

</head>

<body>

<!--==========================
  Header
============================-->
<header id="header">
    <div class="container-fluid">

      <!--  <img height="50" width="100" src="<?php echo base_url(); ?>assets/img/cust_1.jpg" class="img-fluid" alt="">     -->
        <div id="logo" class="pull-left">
            <h1><a href="#intro" class="scrollto">Photo Gallery</a></h1>

        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
<!--                <a style="color: #00CC00" href="--><?php //echo base_url(); ?><!--index.php/portal/" class="btn-get-started scrollto">Portal</a>-->

<!--                <li class="menu-active"><a href="#intro">Home</a></li>-->
<!--                <li><a href="#about">About Us</a></li>-->
<!--                <li><a href="#services">Services</a></li>-->
             <!--   <li><a href="#portfolio">Portfolio</a></li>     -->
<!--                <li><a href="#team">Head Advisors</a></li>-->

<!--                <li><a href="#contact">Contact</a></li>-->
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->

<!--==========================
  Intro Section
============================-->
<section id="intro">
    <div class="intro-container">
        <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <div class="carousel-item active">
                    <div class="carousel-background"><img src="<?php echo base_url(); ?>assets/img/intro-carousel/1.jpg" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2>User Account Management</h2>
<!--                            <p>Adviser will assist the student in effecting a program of study.</p>-->
                            <a href="<?php echo base_url(); ?>index.php/photoController/userlogin" class="btn-get-started scrollto">Get Started</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="carousel-background"><img src="<?php echo base_url(); ?>assets/img/intro-carousel/2.jpg" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2>Storage management</h2>
<!--                            <p>Adviser will assist the student in periodic evaluation of his academic progress.</p>-->
                            <a href="<?php echo base_url(); ?>index.php/photoController/userlogin" class="btn-get-started scrollto">Get Started</a>                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="carousel-background"><img src="<?php echo base_url(); ?>assets/img/intro-carousel/3.jpg" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2>Usage Monitoring</h2>
<!--                            <p>Adviser will assist the student in initial exploration of long range occupational and professional plans, referring him to sources for specialized assistance.</p>-->
                            <a href="<?php echo base_url(); ?>index.php/photoController/userlogin" class="btn-get-started scrollto">Get Started</a>                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="carousel-background"><img src="<?php echo base_url(); ?>assets/img/intro-carousel/4.jpg" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2>Logging</h2>
<!--                            <p> guide from industrial experience and academic experience.</p>-->
                            <a href="<?php echo base_url(); ?>index.php/photoController/userlogin" class="btn-get-started scrollto">Get Started</a>                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="carousel-background"><img src="<?php echo base_url(); ?>assets/img/intro-carousel/5.jpg" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2>Load Test</h2>
<!--                            <p>Adviser listen your problem and advise you as your friend.</p>-->
                            <a href="<?php echo base_url(); ?>index.php/photoController/userlogin" class="btn-get-started scrollto">Get Started</a>                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
</section><!-- #intro -->

<main id="main">

    <!--==========================
      All Users Login Section
    ============================-->
<!--    <section id="featured-services">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!---->
<!--                <div class="col-lg-4 box">-->
<!--                    <i class="ion-ios-bookmarks-outline"></i>-->
<!--                    <h4 class="title"><a href="--><?php //echo base_url(); ?><!--index.php/headadvisorController/headadvisorlogin">Head </a></h4>-->
<!--                    <p class="description">Head  manage all students and advisors of .</p>-->
<!--                </div>-->
<!---->
<!--                <div class="col-lg-4 box box-bg">-->
<!--                    <i class="ion-ios-stopwatch-outline"></i>-->
<!--                    <h4 class="title"><a href="--><?php //echo base_url(); ?><!--index.php/photoController/userlogin"></a></h4>-->
<!--                    <p class="description"> control his/her own students.Guide them in studies</p>-->
<!--                </div>-->
<!---->
<!--                <div class="col-lg-4 box">-->
<!--                    <i class="ion-ios-heart-outline"></i>-->
<!--                    <h4 class="title"><a href="--><?php //echo base_url(); ?><!--index.php/studentController/studentlogin">Student</a></h4>-->
<!--                    <p class="description">Students can contact with their advisor. Feel free to contact with advisor.</p>-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--    </section><!-- #featured-services -->

    <!--==========================
      About Us Section
    ============================-->
<!--    <section id="about">-->
<!--        <div class="container">-->
<!---->
<!--            <header class="section-header">-->
<!--                <h3>About Us</h3>-->
<!--                <p>What makes our university stand out is a clear vision to offer a good value education.</p>-->
<!--            </header>-->
<!---->
<!--            <div class="row about-cols">-->
<!---->
<!--                <div class="col-md-4 wow fadeInUp">-->
<!--                    <div class="about-col">-->
<!--                        <div class="img">-->
<!--                            <img height="200" width="300" src="--><?php //echo base_url(); ?><!--assets/img/cust1.jpeg" alt="" class="img-fluid">-->
<!--                            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>-->
<!--                        </div>-->
<!--                        <h2 class="title"><a href="#">Our Mission</a></h2>-->
<!--                        <p>-->
<!--                            , through the pursuit of excellence in an ethical environment, is committed to providing to a diverse student population the intellectual and technological tools necessary to meet the challenges of the future.-->
<!--                        </p>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">-->
<!--                    <div class="about-col">-->
<!--                        <div class="img">-->
<!--                            <img height="200" width="300" src="--><?php //echo base_url(); ?><!--assets/img/chancellor.jpg" alt="" class="img-fluid">-->
<!--                            <div class="icon"><i class="ion-ios-list-outline"></i></div>-->
<!--                        </div>-->
<!--                        <h2 class="title"><a href="#">Mian Amer,Chancellor, </a></h2>-->
<!--                        <p>-->
<!--                            “Our world today is in a state of flux. Information technology has changed, virtually, in every facet of our lives, and an ever-evolving business environment affects each and every one of us.”-->
<!--                        </p>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">-->
<!--                    <div class="about-col">-->
<!--                        <div class="img">-->
<!--                            <img height="200" width="300" src="--><?php //echo base_url(); ?><!--assets/img/cust2.jpg" alt="" class="img-fluid">-->
<!--                            <div class="icon"><i class="ion-ios-eye-outline"></i></div>-->
<!--                        </div>-->
<!--                        <h2 class="title"><a href="#">Our Vision</a></h2>-->
<!--                        <p>-->
<!--                            To be recognized as a leading institution for producing competent professionals who are instrumental in development of a prosperous society.-->
<!--                        </p>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
<!--    <section id="services">-->
<!--        <div class="container">-->
<!---->
<!--            <header class="section-header wow fadeInUp">-->
<!--                <h3>Services</h3>-->
<!--                <p>Photo Gallery services:</p>-->
<!--            </header>-->
<!---->
<!--            <div class="row">-->
<!---->
<!--                <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">-->
<!--                    <div class="icon"><i class="ion-ios-analytics-outline"></i></div>-->
<!--                    <h4 class="title"><a href="">OUTSTANDING FACULTY</a></h4>-->
<!--                    <p class="description"> has highly qualified and experienced faculty with a vision to train its students to meet the future challenges.</p>-->
<!--                </div>-->
<!--                <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">-->
<!--                    <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>-->
<!--                    <h4 class="title"><a href="">STATE OF ART FACILITIES</a></h4>-->
<!--                    <p class="description"> has state-of-the-art lab facilities and its all engineering programs are accredited Level-II (Washington Accord)</p>-->
<!--                </div>-->
<!--                <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">-->
<!--                    <div class="icon"><i class="ion-ios-paper-outline"></i></div>-->
<!--                    <h4 class="title"><a href="">DIVERSED STUDENTS COMMUNITY</a></h4>-->
<!--                    <p class="description"> enrolls between 60-70 international students every year from many countries around the world.</p>-->
<!--                </div>-->
<!--                <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">-->
<!--                    <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>-->
<!--                    <h4 class="title"><a href="">INDUSTRIAL EXPOSURE</a></h4>-->
<!--                    <p class="description"> provides ample opportunities to work and interact with relevant industry through its industrial internship programs, regular visits and final year design projects.</p>-->
<!--                </div>-->
<!--                <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">-->
<!--                    <div class="icon"><i class="ion-ios-barcode-outline"></i></div>-->
<!--                    <h4 class="title"><a href="">WELL-EQUIPPED LABS</a></h4>-->
<!--                    <p class="description">Labs at  are well-equipped with the latest equipment. Students are encouraged to push the boundaries of possibilities in these world class labs</p>-->
<!--                </div>-->
<!--                <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">-->
<!--                    <div class="icon"><i class="ion-ios-people-outline"></i></div>-->
<!--                    <h4 class="title"><a href="">ENTREPRENEURIAL TRAINING</a></h4>-->
<!--                    <p class="description"> provides vibrant entrepreneurial environment and trains its students to transform their ideas into realities by exploiting indigenous resources.</p>-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--    </section><!-- #services -->

    <!--==========================
      Go To Portal Section
    ============================-->
<!--    <section id="call-to-action" class="wow fadeIn">-->
<!--        <div class="container text-center">-->
<!--            <h3>Go To Portal</h3>-->
<!--            <p> Photo Gallery provide functionality for Head ,  and Students</p>-->
<!--            <a class="cta-btn"  href="--><?php //echo base_url(); ?><!--index.php/portal/" class="btn-get-started scrollto">Portal</a>-->
<!--        </div>-->
<!--    </section><!-- #call-to-action -->


    <!--==========================
      Departments Section
    ============================-->
<!--    <section id="clients" class="wow fadeInUp">-->
<!--        <div class="container">-->
<!---->
<!--            <header class="section-header">-->
<!--                <h3>Departments</h3>-->
<!--            </header>-->
<!---->
<!--            <div class="row">-->
<!--                <div class="col-3">-->
<!--                    <h5> Engineering </h5>-->
<!--                    <img height="50" width="50" src="--><?php //echo base_url(); ?><!--assets/img/logoE.png" class="img-fluid" alt="">-->
<!--                </div>-->
<!--                <div class="col-3">-->
<!--                    <h5> Computing </h5>-->
<!--                    <img height="50" width="50" src="--><?php //echo base_url(); ?><!--assets/img/logoC.png" class="img-fluid" alt="">-->
<!--                </div>-->
<!--                <div class="col-3">-->
<!--                    <h5> Management and Social Sciences </h5>-->
<!--                    <img height="100" width="100" src="--><?php //echo base_url(); ?><!--assets/img/logoB.jpg" class="img-fluid" alt="">-->
<!--                </div>-->
<!--                <div class="col-3">-->
<!--                    <h5> Health and Life Cycle </h5>-->
<!--                    <img height="100" width="100" src="--><?php //echo base_url(); ?><!--assets/img/logoH.jpg" class="img-fluid" alt="">-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!---->
<!--        </div>-->
<!--    </section><!-- #clients -->

    <!--==========================
      Deans Section
    ============================-->
<!--    <section id="testimonials" class="section-bg wow fadeInUp">-->
<!--        <div class="container">-->
<!---->
<!--            <header class="section-header">-->
<!--                <h3>Deans Messages</h3>-->
<!--            </header>-->
<!---->
<!--            <div class="owl-carousel testimonials-carousel">-->
<!---->
<!--                <div class="testimonial-item">-->
<!--                    <img src="--><?php //echo base_url(); ?><!--assets/img/DeanCS.jpg" class="testimonial-img" alt="">-->
<!--                    <h3>Dr M Abdul Qadir</h3>-->
<!--                    <h4>Faculty of Computing</h4>-->
<!--                    <p>-->
<!--                        <img src="--><?php //echo base_url(); ?><!--assets/img/quote-sign-left.png" class="quote-sign-left" alt="">-->
<!--                        I am honored to be leading the Faculty of Computing at such a technologically advanced time, when the application of latest technology is crucial in surviving and competing in the knowledge economy. The faculty is steadily growing, adding new disciplines and specializations.-->
<!---->
<!--                        The faculty aims at producing quality graduates in the applied sciences like computing & mathematics, who can meet the challenges of the time, and transform their knowledge into real value for the benefit of the society. The focus is on extensive training in solving the real life problems by applying the knowledge shared in the class rooms. To achieve this objective, we have a team of highly qualified, competent and dedicated faculty members. We believe that academic excellence is not possible without a quality research & development (R&D) environment. There are a number of R&D groups and laboratories which are involved in different research projects. The R&D facilities are available to train our students on applied aspects of the disciplines. The faculty has also established a strong liaison with R&D organizations and the industry.-->
<!---->
<!--                        The faculty comprises of two departments; namely, Department of Computer Sciences (CS) and Department of Mathematics. CS offers BS, MS and PhD programs, whereas, Mathematics department offers MS and PhD programs with different specializations. There are over 1000 alumni of the faculty, who are contributing effectively in the industry & academia, and thus paying their due share towards national growth.                        <img src="--><?php //echo base_url(); ?><!--assets/img/quote-sign-right.png" class="quote-sign-right" alt="">-->
<!--                    </p>-->
<!--                </div>-->
<!---->
<!--                <div class="testimonial-item">-->
<!--                    <img src="--><?php //echo base_url(); ?><!--assets/img/DeanE.jpg" class="testimonial-img" alt="">-->
<!--                    <h3>Dr. Imtiaz Ahmad Taj</h3>-->
<!--                    <h4>Faculty of Engineering</h4>-->
<!--                    <p>-->
<!--                        <img src="--><?php //echo base_url(); ?><!--assets/img/quote-sign-left.png" class="quote-sign-left" alt="">-->
<!--                        The Faculty of Engineering aims at producing engineers and researchers, who are equipped with knowledge and expertise to meet the challenges of dynamic and evolving engineering domains. To achieve this objective, a team of highly qualified and dedicated faculty members are training students who are keen to try out engineering as a profession. The academic program is supported by well-equipped labs that strengthen the applied aspect of the discipline, and provides hand-on skills to future engineers and researchers. A numbers of well reputed research groups exist in the Faculty of Engineering, which are doing extensive applied research on novel ideas and industrial problems. These researches are done in close collaboration with R&D organizations and industry, and supported by the national & international funding agencies.-->
<!---->
<!--                        The Faculty of Engineering currently offers programs in Electrical Engineering, Civil Engineering, Mechanical Engineering and Engineering Management. It aims to embark on further disciplines very soon. The students are being prepared for a career in industry or research, by providing them with a thorough foundation of the fundamental concepts and analytical tools of contemporary engineering domains. The Faculty envisions to contribute towards a knowledge – based economy of the country, with skilled professionals having curious minds, learning attitude and ethical behaviors, who are ready to undertake engineering challenges of our society.-->
<!--                        <img src="--><?php //echo base_url(); ?><!--assets/img/quote-sign-right.png" class="quote-sign-right" alt="">-->
<!--                    </p>-->
<!--                </div>-->
<!---->
<!--                <div class="testimonial-item">-->
<!--                    <img src="--><?php //echo base_url(); ?><!--assets/img/DeanB.jpg" class="testimonial-img" alt="">-->
<!--                    <h3>Dr Arshad Hassan</h3>-->
<!--                    <h4>Faculty of Management and Social Sciences</h4>-->
<!--                    <p>-->
<!--                        <img src="--><?php //echo base_url(); ?><!--assets/img/quote-sign-left.png" class="quote-sign-left" alt="">-->
<!--                        Welcome to the Faculty of Management and Social Sciences. I am pleased that you have selected Capital University of Science and Technology as the place to study for a career in business.-->
<!---->
<!--                        The Faculty of management and Social Sciences is committed to deliver competent, creative, responsible business leaders and productive citizens. Faculty of management and social sciences offers a comprehensive suite of programs. These programs equip emerging leaders with the knowledge, research insights and personal effectiveness skills to make an impact on business and society.-->
<!---->
<!--                        A special emphasis has been given on business curriculum to create business leaders with high competence and ethical values. The curriculum is augmented to focus on student’s ability to frame, analyze and communicate efficiently and effectively in solving unstructured business problem through industry driven research. A unique combination of classroom experience and corporate training has been adopted in business studies to augment managerial skills, self-confidence and decision making.-->
<!---->
<!--                        We are proud to claim that the alumni of the faculty are serving in different national and multi-national organizations with professional zeal and competence. The Faculty aims to continuously strengthen its position as the leading institution in the fields of business and management sciences. We encourage you to visit our distinctive learning community in person to see what sets us apart.-->
<!--                        <img src="--><?php //echo base_url(); ?><!--assets/img/quote-sign-right.png" class="quote-sign-right" alt="">-->
<!--                    </p>-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--    </section><!-- #testimonials -->

    <!--==========================
      Head Advisors Section
    ============================-->
<!--    <section id="team">-->
<!--        <div class="container">-->
<!--            <div class="section-header wow fadeInUp">-->
<!--                <h3>Head Advisors</h3>-->
<!--                <p>There is Head  in each Department of .</p>-->
<!--            </div>-->
<!---->
<!--            <div class="row">-->
<!---->
<!--                <div class="col-lg-3 col-md-6 wow fadeInUp">-->
<!--                    <div class="member">-->
<!--                        <img height="200" width="260" src="--><?php //echo base_url(); ?><!--assets/img/azhariqbal.png" class="img-fluid" alt="">-->
<!--                        <div class="member-info">-->
<!--                            <div class="member-info-content">-->
<!--                                <h4>Dr M Azhar Iqbal</h4>-->
<!--                                <span>ASSISTANT PROFESSOR</span>-->
<!--                                <div class="social">-->
<!--                                    <a href="mailto:azhar@cust.edu.pk"><i class="ion-ios-email-outline"></i></a>-->
<!---->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">-->
<!--                    <div class="member">-->
<!--                        <img height="260" width="260" src="--><?php //echo base_url(); ?><!--assets/img/sagheer.png" class="img-fluid" alt="">-->
<!--                        <div class="member-info">-->
<!--                            <div class="member-info-content">-->
<!--                                <h4>Dr M Sagheer</h4>-->
<!--                                <span>HOD</span>-->
<!--                                <div class="social">-->
<!--                                    <a href="mailto:sagheer@cust.edu.pk"><i class="ion-ios-email-outline"></i></a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">-->
<!--                    <div class="member">-->
<!--                        <img height="260" width="260" src="--><?php //echo base_url(); ?><!--assets/img/ishtiaq.jpg" class="img-fluid" alt="">-->
<!--                        <div class="member-info">-->
<!--                            <div class="member-info-content">-->
<!--                                <h4>Dr Ishtiaq Hassan</h4>-->
<!--                                <span>HOD</span>-->
<!--                                <div class="social">-->
<!--                                    <a href="mailto:eishtiaq@cust.edu.pk"><i class="ion-ios-email-outline"></i></a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!---->
<!---->
<!---->
<!--                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">-->
<!--                    <div class="member">-->
<!--                        <img height="260" width="260" src="--><?php //echo base_url(); ?><!--assets/img/saqib.jpg" class="img-fluid" alt="">-->
<!--                        <div class="member-info">-->
<!--                            <div class="member-info-content">-->
<!--                                <h4>Mr. Saqib Naveed</h4>-->
<!--                                <span>ASSISTANT PROFESSOR</span>-->
<!--                                <div class="social">-->
<!--                                    <a href="mailto:saqib@cust.edu.pk"><i class="ion-ios-email-outline"></i></a>-->
<!---->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--    </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
<!--    <section id="contact" class="section-bg wow fadeInUp">-->
<!--        <div class="container">-->
<!---->
<!--            <div class="section-header">-->
<!--                <h3>Contact Us</h3>-->
<!--                <p>Welcome to Photo Gallery. We are glad to have you around.</p>-->
<!--            </div>-->
<!---->
<!--            <div class="row contact-info">-->
<!---->
<!--                <div class="col-md-4">-->
<!--                    <div class="contact-address">-->
<!--                        <i class="ion-ios-location-outline"></i>-->
<!--                        <h3>Address</h3>-->
<!--                        <address>Capital University of Science & Technology , Islamabad Expressway, Kahuta Road, Zone-V Islamabad.</address>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="col-md-4">-->
<!--                    <div class="contact-phone">-->
<!--                        <i class="ion-ios-telephone-outline"></i>-->
<!--                        <h3>Phone Number</h3>-->
<!--                        <p><a href="tel:+9251111555666">+92-51-111555666</a></p>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="col-md-4">-->
<!--                    <div class="contact-email">-->
<!--                        <i class="ion-ios-email-outline"></i>-->
<!--                        <h3>Email</h3>-->
<!--                        <p><a href="mailto:info@cust.edu.pk">info@cust.edu.pk</a></p>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!---->
<!--            <div class="form">-->
<!--                <form name="loginForm" role="form" class="login-form input" action="--><?php //echo base_url(); ?><!--index.php/website/sendMessage" method="post" onsubmit="return chkUsrPass()">-->
<!--                    <div class="row">-->
<!--                        <div class="form-group col-md-6">-->
<!--                            <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" required="true" placeholder="Your Name" name="name">-->
<!--                        </div>-->
<!--                        <div class="form-group col-md-6">-->
<!--                            <input class="form-control form-control-solid placeholder-no-fix" type="email" autocomplete="off" required="true" placeholder="Your Email" name="email">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" required="true" placeholder="Subject" name="subject">-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <textarea class="form-control form-control-solid placeholder-no-fix" rows="5" type="text" autocomplete="off" required="true" placeholder="Message" name="message"></textarea>-->
<!--                    </div>-->
<!---->
<!--                    <div class="form-actions align-middle text-center">-->
<!--                        <button type="submit" value="login" class="btn btn-success uppercase">Send Message</button>-->
<!--                    </div>-->
<!--                </form>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--    </section><!-- #contact -->

</main>

<!--==========================
  Footer
============================-->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-info">
                    <h3>Photo Gallery</h3>
<!--                    <p> Advisors of  can guide their students online.</p>-->
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
<!--                        <li><i class="ion-ios-arrow-right"></i> <a href="#about">About us</a></li>-->
<!--                        <li><i class="ion-ios-arrow-right"></i> <a href="#services">Services</a></li>-->
                        <li><i class="ion-ios-arrow-right"></i> <a href="<?php echo base_url(); ?>index.php/portal/">Portal</a></li>


                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>Contact Us</h4>
                    <p>
                        National University of Science & Technology, H-12, Islamabad,
                        Pakistan. <br>
<!--                        <strong>Phone:</strong> +92-51-111555666<br>-->
<!--                        <strong>Email:</strong> info@cust.edu.pk<br>-->
                        <strong>Website:</strong><a href="https://www.nust.edu.pk"> NUST</a> <br>
                    </p>

<!--                    <div class="social-links">-->
<!--                        <a href="https://twitter.com/CUSTislamabad?s=08" class="twitter"><i class="fa fa-twitter"></i></a>-->
<!--                        <a href="https://www.facebook.com/capitaluniversityislamabad/?_rdc=1&_rdr" class="facebook"><i class="fa fa-facebook"></i></a>-->
<!--                        <a href="https://www.instagram.com/capital_university/" class="instagram"><i class="fa fa-instagram"></i></a>-->
<!---->
<!--                    </div>-->

                </div>

                <div class="col-lg-3 col-md-6 footer-newsletter">
                    <h4> Team</h4>
                    <p>
                        Students of MS-IT batch 2k20 made this application. <br> Group students are:  <br> Muhammad Talha <br> Waqas Mustafa <br> Aruba Kousar <br> Moazzam
                    </p>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
           2021 &copy; Copyright <strong>Photo Gallery</strong>. All Rights Reserved
        </div>
        <div class="credits">

<!--            Designed by  Team</a>-->
        </div>
    </div>
</footer><!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="<?php echo base_url(); ?>assets/lib/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/lib/jquery/jquery-migrate.min.js"></script>
<script src="<?php echo base_url(); ?>assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/lib/easing/easing.min.js"></script>
<script src="<?php echo base_url(); ?>assets/lib/superfish/hoverIntent.js"></script>
<script src="<?php echo base_url(); ?>assets/lib/superfish/superfish.min.js"></script>
<script src="<?php echo base_url(); ?>assets/lib/wow/wow.min.js"></script>
<script src="<?php echo base_url(); ?>assets/lib/waypoints/waypoints.min.js"></script>
<script src="<?php echo base_url(); ?>assets/lib/counterup/counterup.min.js"></script>
<script src="<?php echo base_url(); ?>assets/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>assets/lib/isotope/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url(); ?>assets/lib/lightbox/js/lightbox.min.js"></script>
<script src="<?php echo base_url(); ?>assets/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
<!-- Contact Form JavaScript File -->
<script src="<?php echo base_url(); ?>assets/contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>

</body>
</html>












<!--
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/Welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>
-->

<?php
$this->session->unset_userdata('email');
?>