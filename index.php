<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lost and Found-User Signup</title>
  <link rel="stylesheet"type="text/css" href="css/register.css">
  <link rel="shortcut icon" href="ico/favicon.png" />
</head>
<body>
<div class="extra" style="font-style: italic; text-align: center;">
      <h1 style="color: #6c5ce7 ;margin-top:20px">"Lost & Found"</h1>
      <h3 style="color: #d63031 ;">“You Lose It, They Find It, We Deliver It”</h3>
    </div>
  <div class="header">
    <h2>Not a member!</h2>
    <h2>Sign Up Here</h2>
  </div>
  
  <form action="index.php" method="post">
    <?php include('errors.php'); ?>
    <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
        <label>Email</label>
        <input type="text" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password_1">
    </div>
    <div class="input-group">
        <label>Confirm Password</label>
        <input type="password" name="password_2">
    </div>
    <div class="input-group">
        <button type="submit" name="register" class="btn">Sign Up</button>
    </div>
    <p>
      Already a member? <a href="logins.php">Sign In</a>
    </p>
  </form>
  
    <br>
    <br>
  <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p>
                  <span>&copy; Lost & Found - All right reserved.</span>
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
</body>
</html>