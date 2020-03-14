<?php include('server.php');
    //if user is not logged in they cannot access this page
    if(empty($_SESSION['username'])){
      header('location:logins.php');
    }

?>
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
            <!-- Signup Modal -->
            
          </div>
        </div>
        <div class="row">
          <div class="span4">
            <div class="logo" style="margin-top: -30px;width: 300px;" >
              <a href="index.php"><img src="img/logo3.png" alt="" class="logo" /></a>
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
    <!-- end header -->

    <div class="extra" style="font-style: italic; text-align: center;">
      <h2 style="color: #dfe6e9 ;">"Don't Worry, We Can Help You Find Your Items."</h2>
      <h4 style="color: #dfe6e9 ;">“You Lose It, They Find It, We Deliver It”</h4>
    </div>

    <section id="featured">
      <!-- start slider -->
      <!-- Slider -->
      <!--nivo-slider bootstrap class for sliding images -->
      <div id="nivo-slider">
        <div class="nivo-slider">
          <!-- Slide #1 image -->
          <img src="img/slides/nivo/1.jpg" alt="" title="#caption-1" />
          <!-- Slide #2 image -->
          <img src="img/slides/nivo/2.jpg" alt="" title="#caption-2" />
          <!-- Slide #3 image -->
          <img src="img/slides/nivo/3.jpg" alt="" title="#caption-3" />
        </div>
        <div class="container">
          <div class="row">
            <div class="span12">
              <!-- Slide #1 caption -->
              <div class="nivo-caption" id="caption-1">
                <div>
                 
                  <p>
                   Easy to use.
                  </p>
                  
                </div>
              </div>
              <!-- Slide #2 caption -->
              <div class="nivo-caption" id="caption-2">
                <div>
                 
                  <p>
                   Sign Up & Search for your Lost Stuff.
                  </p>
                
                </div>
              </div>
              <!-- Slide #3 caption -->
              <div class="nivo-caption" id="caption-3">
                <div>
                  
                  <p>
                  Contact if face any trouble. 
                  </p>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end slider -->
    </section>




<br>
<br>




      <!-- section -->

      <section id="content" style="background-color: #b2bec3;margin-top: -40px;">
        <div class="container" style="margin-left: 200px;">
          <div class="row" >
            <div class="span12">
              <div class="row">
                <div class="span3">
                  <div class="box aligncenter">
                    <div class="aligncenter icon">
                      <i class="icon-briefcase icon-circled icon-64 active"></i>
                    </div>
                    <div class="text">
                      <h6>Why?</h6>
                      <p>
                        Providing assistance to guests saves them the running around and the time it would take to find information and arrange shipping if they were to deal with lost item recovery themselves. As for the establishments, we automate the process for their lost and found department, letting them focus on the primary concerns of their business. We cut down time and cost for both parties.
                      </p>
                    
                    </div>
                  </div>
                </div>
                <div class="span3">
                  <div class="box aligncenter">
                    <div class="aligncenter icon">
                      <i class="icon-desktop icon-circled icon-64 active"></i>
                    </div>
                    <div class="text">
                      <h6>When?</h6>
                      <p>
                        The process begins as soon as a guest loses an item. The establishment logs all retrieved items in our cloud-based system. When the customer makes an inquiry, our software finds the matching item and immediately initiates the process for shipping it back to its owner. We pride ourselves on returning lost items promptly and reliably.
                      </p>
                     
                    </div>
                  </div>
                </div>
                <div class="span3">
                  <div class="box aligncenter">
                    <div class="aligncenter icon">
                      <i class="icon-beaker icon-circled icon-64 active"></i>
                    </div>
                    <div class="text">
                      <h6>How?</h6>
                      <p>
                        The process is very simple. We are the facilitators between the establishments (airlines, car rental agencies, hotels, etc.) and the guest. Once the guest contacts the establishment, the establishment refers him or her to our website and we arrange for the lost item's  return.
                      </p>
                     
                    </div>
                  </div>
                </div>
            
              </div>
            </div>
          </div>
          <!-- divider -->
     
          <!-- end divider -->
        </div>
      </section>
    
      <hr>







    
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













































  </div>
















































  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/jcarousel/jquery.jcarousel.min.js"></script>
  <script src="js/jquery.fancybox.pack.js"></script>
  <script src="js/jquery.fancybox-media.js"></script>
  <script src="js/google-code-prettify/prettify.js"></script>
  <script src="js/portfolio/jquery.quicksand.js"></script>
  <script src="js/portfolio/setting.js"></script>
  <script src="js/jquery.flexslider.js"></script>
  <script src="js/jquery.nivo.slider.js"></script>
  <script src="js/modernizr.custom.js"></script>
  <script src="js/jquery.ba-cond.min.js"></script>
  <script src="js/jquery.slitslider.js"></script>
  <script src="js/animate.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="js/custom.js"></script>
</body>