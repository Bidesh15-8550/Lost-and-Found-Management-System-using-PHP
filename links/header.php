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
                <h5><b> Welcome <?php echo $_SESSION['user'];  ?></b></h5>
                <li><a href="logout.php" style="color:red; font-size:15px"><i class="icon-user"></i>Logout</a></li>
              </ul>
            </div>   
          </div>
        </div>
        <div class="row">
          <div class="span4">
            <div class="logo" style="margin-top: -100px;width: 300px;" >
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
                      <a href="products.php"><strong>Search Your Products</strong> </a>
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