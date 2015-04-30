<?php
require_once('php/properties.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

    <head>

        <title><?= strtoupper(MY_NAME); ?> || Website</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
                <link rel="stylesheet" type="text/css" href="css/reset.css"/> 
                <link rel="stylesheet" type="text/css" href="css/style.css"/>
                <link rel="stylesheet" type="text/css" href="css/fancybox.css"/>
                <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,800,700,400italic|PT+Serif:400,400italic"/>

                <script type="text/javascript" src="js/jquery.min.js"></script>
                <script type="text/javascript" src="js/jquery.easytabs.min.js"></script>
                <script type="text/javascript" src="js/respond.min.js"></script>
                <script type="text/javascript" src="js/jquery.easytabs.min.js"></script>   
                <script type="text/javascript" src="js/jquery.adipoli.min.js"></script>
                <script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>
                <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
                <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
                <script type="text/javascript" src="js/jquery.gmap.min.js"></script>
                <script type="text/javascript" src="js/custom.js"></script>

                <!-- Shared on MafiaShare.net  --><!-- Shared on MafiaShare.net  --></head>
                <body>
                    <!-- Container -->
                    <div id="container">

                        <!-- Top -->
                        <div class="top"> 
                            <!-- Logo -->
                            <div id="logo">
                                <h2><?= strtoupper(MY_NAME); ?></h2>
                                <h4><?= strtoupper(MY_JOB); ?></h4>
                            </div>
                            <!-- /Logo -->

                            <!-- Social Icons -->
                            <ul class="socialicons">
                                <li><a href="#" class="social-text">SOCIAL PROFILES</a></li>
                                <li><a href="http://www.facebook.com/sfandrianah" class="social-facebook"></a></li>
                                <li><a href="http://www.twitter.com/sfandrianah" class="social-twitter"></a></li>
                                <li><a href="http://www.linkedin.com/sfandrianah" class="social-in"></a></li>
                                <li><a href="http://www.google.com/sfandrianah" class="social-googleplus"></a></li>
                            </ul>
                            <!-- /Social Icons -->
                        </div>
                        <!-- /Top -->

                        <!-- Content -->
                        <div id="content" >

                            <!-- Profile -->
                            <div id="profile"> 
                                <!-- About section -->
                                <div class="about">
                                    <div class="photo-inner"><img src="images/photsso.jpg" height="186" width="153" /></div>
                                    <h1><?= strtoupper(MY_NAME); ?></h1>
                                    <h3><?= strtoupper(MY_JOB); ?></h3>
                                    <p>I like to make cool and creative designs. My design stash is always full of refreshing ideas. Feel free to take a look around my Vcard.</p>
                                </div>
                                <!-- /About section -->

                                <!-- Personal info section -->
                                <ul class="personal-info">
                                    <li><label>Name</label><span><?= MY_NAME; ?></span></li>
                                    <li><label>Date of birth</label><span><?= MY_DATE; ?></span></li>
                                    <li><label>Address</label><span><?= MY_ADDRESS; ?></span></li>
                                    <li><label>Email</label><span><?= MY_EMAIL2; ?></span></li>
                                    <li><label>Phone</label><span><?= MY_PHONE; ?></span></li>
                                    <li><label>Website</label><span><?= MY_WEBSITE; ?></span></li>
                                </ul>
                                <!-- /Personal info section -->
                            </div>        
                            <!-- /Profile --> 

                            <!-- Menu -->
                            <div class="menu">
                                <ul class="tabs">
                                    <li><a href="#profile" class="tab-profile">Profile</a></li>
                                    <li><a href="#resume" class="tab-resume">Resume</a></li>
                                    <li><a href="#portfolio" class="tab-portfolio">Portfolio</a></li>
                                    <li><a href="#contact" class="tab-contact">Contact</a></li>
                                </ul>
                            </div>
                            <!-- /Menu --> 

                            <!-- Resume -->
                            <div id="resume">
                                <?php include 'php/resume.php'; ?>
                            </div>
                            <!-- /Resume --> 

                            <!-- Portfolio -->
                            <div id="portfolio">

                                <ul id="portfolio-filter">
                                    <li><a href="" class="current" data-filter="*">All</a></li>
                                    <li><a href="" data-filter=".application">Application Development</a></li>
                                    <li><a href="" data-filter=".webdesign">WebDesign</a></li>
                                    <li><a href="" data-filter=".photoghraphy">Photoghraphy</a></li>
                                    <li><a href="" data-filter=".illustration">Illustration</a></li>
                                    <li><a href="" data-filter=".print">Print</a></li>
                                    <li><a href="" data-filter=".clothprod">Clothing & Production</a></li>
                                </ul>
                                <div class="extra-text">Some of the projects i'm proud with</div>
                                <ul id="portfolio-list">
                                    <?php include 'php/porto/application.php'; ?>

                                    <li class="webdesign">
                                        <a href="http://www.youtube.com/embed/c9MnSeYYtYY?autoplay=1" rel="portfolio" class="folio iframe">
                                            <img src="portfolio/3-thumb.jpg" alt="" >
                                                <h2 class="title">Snow time</h2>
                                                <span class="categorie">Webdesign</span> 
                                        </a>
                                    </li>                        
                                    <li class="photoghraphy">
                                        <a href="http://www.google.com" rel="portfolio" target="_new">
                                            <img src="portfolio/2-thumb.jpg" alt="" >                            
                                                <h2 class="title">Help us</h2>
                                                <span class="categorie">Photography</span> 
                                        </a>
                                    </li>
                                    <li class="animation print">
                                        <a href="portfolio/4.jpg" rel="portfolio" class="folio">
                                            <img src="portfolio/4-thumb.jpg" alt="" >
                                                <h2 class="title">Sunshine</h2>
                                                <span class="categorie">Print / Animation</span> 
                                        </a>
                                    </li>
                                    <?php include 'php/porto/cloth.php'; ?>
                                    
                                    <li class="webdesign print">
                                        <a href="portfolio/6.jpg" rel="portfolio" class="folio">
                                            <img src="portfolio/6-thumb.jpg" alt="" >
                                                <h2 class="title">The yellow</h2>
                                                <span class="categorie">Webdesign / Print</span> 
                                        </a>
                                    </li>
                                    <li class="photoghraphy">
                                        <a href="portfolio/7.jpg" rel="portfolio" class="folio">
                                            <img src="portfolio/7-thumb.jpg" alt="" >
                                                <h2 class="title">Black bird</h2>
                                                <span class="categorie">Photoghraphy</span> 
                                        </a>
                                    </li>
                                    <li class="illustration">
                                        <a href="portfolio/8.jpg" rel="portfolio" class="folio">
                                            <img src="portfolio/8-thumb.jpg" alt="" >
                                                <h2 class="title">Revolution</h2>
                                                <span class="categorie">Illustration</span> 
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /Portfolio -->   

                            <!-- Contact -->
                            <div id="contact">
                                <div id="map"></div>
                                <!-- Contact Info -->
                                <div class="contact-info">
                                    <h3 class="main-heading"><span>Contact info</span></h3>
                                    <ul>
                                        <li>Level 13, 2 Elizabeth St, Melbourne Victoria 3000 Australia<br /><br /></li>
                                        <li>Email: John.smith@gmail.com</li>
                                        <li>Phone: +123 456 789 111</li>
                                        <li>Website: www.johnsmith.com</li>
                                    </ul>
                                </div>
                                <!-- /Contact Info -->

                                <!-- Contact Form -->
                                <div class="contact-form">
                                    <h3 class="main-heading"><span>Let's keep in touch</span></h3>
                                    <div id="contact-status"></div>
                                    <form action="" id="contactform">
                                        <p>
                                            <label for="name">Your Name</label>
                                            <input type="text" name="name" class="input" >
                                        </p>
                                        <p>
                                            <label for="email">Your Email</label>
                                            <input type="text" name="email" class="input">
                                        </p>
                                        <p>
                                            <label for="message">Your Message</label>
                                            <textarea name="message" cols="88" rows="6" class="textarea" ></textarea>
                                        </p>
                                        <input type="submit" name="submit" value="Send your message" class="submit">
                                    </form>
                                </div>
                                <!-- /Contact Form -->
                            </div>
                            <!-- /contact -->  

                        </div>
                        <!-- /Content -->

                        <!-- Footer -->
                        <div class="footer">
                            <div class="copyright">Copyright © 2012 John smith</div>
                        </div>
                        <!-- /Footer --> 

                    </div>
                    <!-- /Container -->

                </body>
                </html>