<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lost and Found-User Signin</title>
  <link rel="stylesheet"type="text/css" href="css/register.css">
  <link rel="shortcut icon" href="ico/favicon.png" />
</head>
<body>

  <div class="header">
    <h2>Not a member!</h2>
    <h2>Sign Up Here</h2>
  </div>
  
  <form action="login.php" method="post">
    <div class="input-group">
        <label>Username</label>
        <input type="text" name="username">
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password_1">
    </div>
    <div class="input-group">
        <button type="submit" name="login" class="btn">Login</button>
    </div>
    <p>
      Not a member? <a href="index.php">Sign Up</a>
    </p>
  </form>
</body>
</html>