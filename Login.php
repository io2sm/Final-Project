<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Login</title>
  <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@500;600;700&display=swap"
      rel="stylesheet"
    />
  <link rel="stylesheet" href="style.css" />
</head>
<body>

<?php include 'navbar.php'; ?>
<form action="Home.php" method="post">  
<div class="log-container">
  <div class="log-card">

    <h2>WELCOME BACK</h2>

    <label>Email Address</label>
    <input type="email" name="email" placeholder="Enter email" />

    <label>Password</label>
    <input type="password" name="password" placeholder="Enter password" />

    <button type="submit" name="loginSubmit">LOGIN</button>
    <br>
  <div class="log-tabs">
      Don't have an account ? <a href="Signup.php">SIGN UP</a>
  </div>
  <p>Need Help ? <br> Contact us at <span>email@email.com</span></p>
  </div>

</div>
</form>

</body>
</html>