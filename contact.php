<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Lost and Found</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700"
    rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
  <link href="css/jcarousel.css" rel="stylesheet" />
  <link href="css/flexslider.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <!-- Theme skin -->
  <link href="skins/default.css" rel="stylesheet" />
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="ico/favicon.png" />

  <!-- =======================================================
    Theme Name: Flattern
    Theme URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

  <div id="wrapper">
    <!-- start header -->
    <header style="background-color: #130f40;">
      <div class="container">
      <div class="row nomargin">
          <div class="span12">
            <div class="headnav" style="margin-right: 13px;" >
              <ul>
                <li><a href="logins.php?logout='1' " style="color:red; font-size:15px"><i class="icon-user"></i>Logout</a></li>
              </ul>
            </div>   
          </div>
        </div>
        <div class="row">
          <div class="span4">
            <div class="logo" style="margin-top: -30px;width: 300px;" >
              <a href="homepage.php"><img src="img/logo3.png" alt="" class="logo" /></a>
            </div>
          </div>

          
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li class="dropdown active">
                      <a href="homepage.php">Home</a>
                    </li>
                    <li class="dropdown active">
                      <a href="about.php"><strong> About Us</strong></a>
                    </li>
                    <li class="dropdown active">
                      <a href="#"><strong>How it works</strong> </a>
                    </li>
               
                    <li class="dropdown active">
                      <a href="contact.php"><strong>Support</strong> </a>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>
   
    
    <section id="content" style="background-color: #dfe6e9;">
        <div class="container">
          <div class="row">
            <div class="span12">
              <h4>Get in touch with us by filling <strong>contact form below</strong></h4>
  
              <form action="" method="post" role="form" class="contactForm">
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
  
                <div class="row">
                  <div class="span4 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-msg="Please enter at least 4 chars"required />
                    <div class="validation"></div>
                  </div>
                  <div class="span4 form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"  data-msg="Please enter a valid email"required />
                    <div class="validation"></div>
                  </div>
                  <div class="span4 form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-msg="Please enter at least 8 chars of subject" required/>
                    <div class="validation"></div>
                  </div>
                  <div class="span12 margintop10 form-group">
                    <textarea class="form-control" name="message" rows="10" data-msg="Please write something for us" placeholder="Message" required></textarea>
                    <div class="validation"></div>
                    <p class="text-center">
                      <button class="btn btn-large btn-theme margintop10" type="submit">Submit message</button>
                    </p>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="map" style="width: 80%;margin: auto;">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.7884187014934!2d90.3741778144559!3d23.754923294521536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8ada2664e21%3A0x3c872fd17bc11ddb!2sCSE%20Building%2C%20Daffodil%20International%20University!5e0!3m2!1sen!2sbd!4v1582352538262!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
  
        </div>
      </section>
      
      <br>



      <footer>
        <div class="container">
          <div class="row">
            
            <div class="aligncenter span3">
              <div class="widget">
                <h5 class="widgetheading">Get in touch with us</h5>
                <address>
                  <strong>Bidesh Biswas Biki</strong><br>
                   Daffodil International University<br>
                  Dhaka,Bangladesh
                 </address>
                <p>
                  <i class="icon-phone"></i> (+880) 1960961558 <br>
                  <i class="icon-envelope-alt"></i> bidesh15-8550@diu.edu.bd
                </p>
              </div>
            </div>
          </div>
        </div>
        <div id="sub-footer">
          <div class="container">
            <div class="row">
              <div class="span6">
                <div class="copyright">
                  <p>
                    <span>&copy; Bidesh Biswas Biki - All right reserved.</span>
                  </p>
                  <div class="credits">
                    <!--
                      All the links in the footer should remain intact.
                      You can delete the links only if you purchased the pro version.
                      Licensing information: https://bootstrapmade.com/license/
                      Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Flattern
                    -->
                    Designed by <a href="https://sites.google.com/diu.edu.bd/bideshbiswas/home">Bidesh Biswas Biki</a>
                  </div>
                </div>
              </div>
              <div class="span6">
                <ul class="social-network">
                  <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-square"></i></a></li>
                  <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-square"></i></a></li>
                  <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-square"></i></a></li>
                  <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-pinterest icon-square"></i></a></li>
                  <li><a href="#" data-placement="bottom" title="Google plus"><i class="icon-google-plus icon-square"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </footer>
      </body>