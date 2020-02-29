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
    <header style="background-color: #130f40;">
        <div class="container">
          <div class="row nomargin">
            <div class="span12">
              <div class="headnav" style="margin-right: 13px;" >
                <ul>
                  <li><a href="#mySignup" data-toggle="modal"><i class="icon-user"></i> Sign up</a></li>
                  <li><a href="#mySignin" data-toggle="modal"><i class="icon-user"></i>Sign in</a></li>
                </ul>
              </div>
              <!-- Signup Modal -->
              <div id="mySignup" class="modal styled hide fade" tabindex="-1" role="dialog"
                aria-labelledby="mySignupModalLabel" aria-hidden="true">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h4 id="mySignupModalLabel">Create an <strong>account</strong></h4>
                </div>
                <div class="modal-body">
                  <form class="form-horizontal">
                    <div class="control-group">
                      <label class="control-label" for="inputEmail">Email</label>
                      <div class="controls">
                        <input type="email" id="inputEmail" placeholder="Email" required>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="inputSignupPassword">Password</label>
                      <div class="controls">
                        <input type="password" id="inputSignupPassword" placeholder="Password" required>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="inputSignupPassword2">Confirm Password</label>
                      <div class="controls">
                        <input type="password" id="inputSignupPassword2" placeholder="Password"required>
                      </div>
                    </div>
                    <div class="control-group">
                      <div class="controls">
                        <button type="submit" class="btn">Sign up</button>
                      </div>
                      <p class="aligncenter margintop20">
                        Already have an account? <a href="#mySignin" data-dismiss="modal" aria-hidden="true"
                          data-toggle="modal">Sign in</a>
                      </p>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end signup modal -->
              <!-- Sign in Modal -->
              <div id="mySignin" class="modal styled hide fade" tabindex="-1" role="dialog"
                aria-labelledby="mySigninModalLabel" aria-hidden="true">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h4 id="mySigninModalLabel">Login to your <strong>account</strong></h4>
                </div>
                <div class="modal-body">
                  <form class="form-horizontal">
                    <div class="control-group">
                      <label class="control-label" for="inputText">Username</label>
                      <div class="controls">
                        <input type="text" id="inputText" placeholder="Username"required>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="inputSigninPassword">Password</label>
                      <div class="controls">
                        <input type="password" id="inputSigninPassword" placeholder="Password"required>
                      </div>
                    </div>
                    <div class="control-group">
                      <div class="controls">
                        <button type="submit" class="btn">Sign in</button>
                      </div>
                      <p class="aligncenter margintop20">
                        Forgot password? <a href="#myReset" data-dismiss="modal" aria-hidden="true"
                          data-toggle="modal">Reset</a>
                      </p>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end signin modal -->
              <!-- Reset Modal -->
              <div id="myReset" class="modal styled hide fade" tabindex="-1" role="dialog"
                aria-labelledby="myResetModalLabel" aria-hidden="true">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h4 id="myResetModalLabel">Reset your <strong>password</strong></h4>
                </div>
                <div class="modal-body">
                  <form class="form-horizontal">
                    <div class="control-group">
                      <label class="control-label" for="inputResetEmail">Email</label>
                      <div class="controls">
                        <input type="text" id="inputResetEmail" placeholder="Email">
                      </div>
                    </div>
                    <div class="control-group">
                      <div class="controls">
                        <button type="submit" class="btn">Reset password</button>
                      </div>
                      
                    </div>
                  </form>
                </div>
              </div>
              <!-- end reset modal -->
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
                        <a href="index.php">Home</a>
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

      <section id="inner-headline" style="margin-top: -20px;">
        <div class="container">
          <div class="row">
            <div class="span4">
              <div class="inner-heading">
                <h2>About us</h2>
              </div>
            </div>
            <div class="span8">
              <ul class="breadcrumb">
                <li><a href="index.php"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                <li class="active">About us</li>
              </ul>
            </div>
          </div>
        </div>
      </section>



      <section id="content" style="margin-top: -20px; background-color: #b2bec3;" >
      <div class="container">
       
        <div class="row">
          <div class="span12">
            <h4>Talented peoples behind Lost and Found System</h4>
          </div>
     
          <div class="span3">
            <img src="img/dummies/team2.jpg" alt="" class="img-polaroid" />
            <div class="roles">
              <p class="lead">
                <strong>Bidesh Biswas Biki</strong>
              </p>
            </div>
          </div>
          <div class="span3">
            <img src="img/dummies/team3.jpg" alt="" class="img-polaroid" style="height: 339px;" />
            <div class="roles">
              <p class="lead">
                <strong>Afsana Akter</strong>
              </p>
            </div>
          </div>
         
     
        </div>
        <!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>
        <!-- end divider -->
        <div class="row">
          
          <div class="span6">
            <h4>Our expertise</h4>
            <label>Web design:</label>
            <div class="progress progress-info progress-striped active">
              <div class="bar" style="width: 90%">
              </div>
            </div>
        
            <label>Photoshop :</label>
            <div class="progress progress-warning progress-striped active">
              <div class="bar" style="width: 80%">
              </div>
            </div>
            <label>Ilustrator :</label>
            <div class="progress progress-danger progress-striped active">
              <div class="bar" style="width: 40%">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
      
      
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









</body>
