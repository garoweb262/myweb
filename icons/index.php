<?php
include ('admin/db.php');

   if (isset($_POST['submitbtn'])) {
    $uname = filter_input(INPUT_POST, 'name');
    $email = filter_input(INPUT_POST, 'email');
    $phoneN = filter_input(INPUT_POST, 'phone');
    $mess = filter_input(INPUT_POST, 'message');
    $query = 'INSERT INTO webgaro VALUES(DEFAULT,:name, :email, :phone, :message)';
    $stmt= $con->prepare($query);
      $stmt -> bindValue(':name',$uname);    
      $stmt -> bindValue (':email', $email); 
      $stmt -> bindValue (':phone',$phoneN);
      $stmt -> bindValue (':message',$mess);

     $status = $stmt -> execute();
       
     $stmt ->closeCursor();
        if ($status) {
           Header('location:index.php');
        }
            }


?>




<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <title>myweb</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.min.css" rel="stylesheet">
    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">
  
    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
    <!-- Libraries CSS Files -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Home</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#updates">Updates</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#more-features">More Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#team">Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">Welcome To  </div>
        <div class="intro-heading text-uppercase">GARO WEB DESIGN</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
      </div>
    </div>
  </header>

  <!-- Services -->
  <section class="page-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Services</h2>
          <h3 class="section-subheading text-muted">We offers the following services.<br>Solution to your problem is our corncern.</h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
             <img src="img/icon.png">
          </span>
          <h4 class="service-heading">Application </h4>
          <p class="text-muted">We design Applications of Android & IOS in very easy steps and we deliver our apps within a short time.</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <img src="icons/laptop.svg" width="100%" height="100%">
          </span>
          <h4 class="service-heading">Responsive web Design</h4>
          <p class="text-muted">We create Responsive and well secure website design for companies and business.and we also engage in teaching web development to our young upcoming programmers. </p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
              <img src="icons/camera.svg" width="100%" height="100%">
          </span>
          <h4 class="service-heading"> Graphic Design</h4>
          <p class="text-muted">We offer Graphics design of different form.<br>flyers,posters,invitation cards of different event,birthday & business cards,banners photo editors and lots more.</p>
        </div>
      </div>
    </div>
  </section>

  <!--==========================
      Call To Action Section
    ============================-->
    <section id="updates">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Check our updates</h3>
            <p class="cta-text"> You can keep our update through our Youtube channel for you to have more experience and building you carrier in web programming, Android programming, Graphics and lots more.<br>Kindly click the link below to see from the channel.s</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="https://www.youtube.com/garo web design">Youtube</a>
     </div>
        </div>

      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      More Features Section
    ============================-->
    <section id="more-features" class="section-bg">
      <div class="container">

        <div class="section-header">
          <h3 class="section-title">More Features</h3>
          <span class="section-divider"></span>
          <p class="section-description">Mores of our Features for the young ones and for the society and world wide.</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="ion-ios-stopwatch-outline"></i></div>
              <h4 class="title"><a href="">Work in time</a></h4>
              <p class="description">We work in time,and we deliver our project on time.</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="box wow fadeInRight">
              <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
              <h4 class="title"><a href="">Full Solution Required</a></h4>
              <p class="description">We make sure we get the full solution required of your project and use it.</p>
          </div>
</div>
          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="ion-ios-heart-outline"></i></div>
              <h4 class="title"><a href="">Creating carriers in the young ones</a></h4>
              <p class="description">We teach and support the young ones in the community and worldworld.</p>
            </div>
          </div>
      
          <div class="col-lg-6">
            <div class="box wow fadeInRight">
              <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
              <h4 class="title"><a href="">Analysing Problem</a></h4>
              <p class="description">We analyse the problem and all steps of the solutions.</p>
            </div>
          </div>
        </div>
      </div>

    </section><!-- #more-features -->

  <!-- About -->
  <section class="page-section" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">About</h2>
          <h3 class="section-subheading text-muted">Story of our strugles.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="timeline">
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4></h4>
                  <h4 class="subheading">Our Humble Beginnings</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">From the beginning it was not easy learning web develpoment as we think it was, we pass through many steps and process before becoming a full web development company, but at long last everything was succesfully learn from front end, back end, and becoming a full stack developer.</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/port/7.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4></h4>
                  <h4 class="subheading">Becoming a team</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">After all the experience and the strugle we pass through then we decided to create a web development company, so that we can earn from our strugles and teach the upcoming programmers the experience we have in web development, Android Development & Graphics Designing.and we succesfully created the company.</p>
                </div>
              </div>
            </li>
            <li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <h4>Be Part
                  <br>Of Our
                  <br>Story!</h4>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Team -->
  <section class="bg-light page-section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
          <h3 class="section-subheading text-muted">Here are our amazing team members</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/CEO.jpg" alt="">
            <h4>Gazzali Ahmad Garo</h4>
            <p class="text-muted">CEO/Web Developer</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://www.twitter.com/muhammadgazzal3">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/Muhammad Muhreem Gazzali">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://api.whatsapp.com/?phone=2347066492821">
                  <i class="fab fa-whatsapp"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/abdallah01.jpg" alt="">
            <h4>Abdallah Mukhtar</h4>
            <p class="text-muted">Web Developer/Graphics Designer</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://www.twitter.com/itz_walead">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/Abdullahi Mukhtar">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://api.whatsapp.com/?phone=2348137371721">
                  <i class="fab fa-whatsapp"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/oga.jpg" alt="">
            <h4>Muhammad Haruna</h4>
            <p class="text-muted">Web Developer</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://api.whatsapp.com/?phone=2349036605225">
                  <i class="fab fa-whatsapp"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/Muhammad Haruna">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.twitter.com/web_garo">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <p class="large text-muted">We work in team and with intergrity.</p>
        </div>
      </div>
    </div>
  </section>


      <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container">
        <div class="row wow fadeInUp">

          <div class="col-lg-4 col-md-4">
            <div class="contact-about">
              <h3>Garo Web Design</h3>
              <p>You can contact us through the following details or send you message to us.</p>
              <div class="social-links">
                <a href="https://www.facebook.com/web_garo" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="https://www.facebook.com/Muhammad Muhreem Gazzali" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="https://www.facebook.com/garo_web_design" class="instagram"><i class="fa fa-instagram"></i></a>
                <a href="https://www.gmail.com/garowebdesign24" class="google-plus"><i class="fa fa-google-plus"></i></a>
                <a href="https://www.youtube.com/garo web design" class="linkedin"><i class="fa fa-youtube"></i></a>
                 <li class="list-inline-item">
                <a href="https://api.whatsapp.com/?phone=2347066492821">
                  <i class="fab fa-whatsapp"></i>
                </a>
              </li>

              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="info">
              <div>
                <i class="ion-ios-location-outline"></i>
                <p>Federal University<br>Dutse Jigawa State</p>
              </div>

              <div>
                <i class="ion-ios-email-outline"></i>
                <p>garowebdesign24@gmail.com</p>
              </div>

              <div>
                <i class="ion-ios-telephone-outline"></i>
                <p>+2347066492821</p>
              </div>

            </div>
          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              
              
              <form action= "index.php" method="POST">
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="phone" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit" name= "submitbtn" title="Send Message">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->


  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>
    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  
    <!-- Contact Form JavaScript File -->
   <!-- Contact Form JavaScript File -->
 

<!-- Template Main Javascript File -->
<script src="js/main.js"></script>
  
    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>

</body>

</html>
