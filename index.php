<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lost and Found-User Signup</title>
  <link rel="stylesheet"type="text/css" href="css/register.css">
  <link rel="shortcut icon" href="ico/favicon.png" />
</head>
<body>

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
      Already a member? <a href="login.php">Sign In</a>
    </p>
  </form>
</body>
</html>