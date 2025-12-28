<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Login</title>

  <link rel="stylesheet" href="style.css" />
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="log-container">
  <div class="log-card">

    <div class="log-tabs">
      <a href="Login.php" class="active">LOGIN</a>
      <a href="Signup.php">SIGN UP</a>
    </div>

    <h2>WELCOME BACK</h2>

    <label>Email Address</label>
    <input type="email" placeholder="Enter email" />

    <label>Password</label>
    <input type="password" placeholder="Enter password" />

    <button>LOGIN</button>
  </div>
</div>

<div class="log-help">
  <strong>NEED HELP?</strong><br />
  Contact us at <u>email@email.com</u>
</div>

</body>
</html>