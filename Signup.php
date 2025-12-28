<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Sign Up</title>

  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@500;600;700&display=swap"
    rel="stylesheet"
  />

  <link rel="stylesheet" href="style.css" />
</head>
<body>

<?php include 'navbar.php'; ?>

<form action="Signup.php" method="post">
  <div class="log-container">
    <div class="log-card">

      <h2>CREATE ACCOUNT</h2>

      <label>First Name</label>
      <input type="text" name="first_name" placeholder="Enter first name" required />

      <label>Last Name</label>
      <input type="text" name="last_name" placeholder="Enter last name" required />

      <label>Phone Number</label>
      <input type="tel" name="phone" placeholder="Enter phone number" required />

      <label>Email Address</label>
      <input type="email" name="email" placeholder="Enter email" required />

      <label>Password</label>
      <input type="password" name="password" placeholder="Enter password" required />

      <button type="submit" name="signupSubmit">SIGN UP</button>

      <br>

      <div class="log-tabs">
        Already have an account ? <a href="Login.php">LOGIN</a>
      </div>

      <p>
        Need Help ? <br>
        Contact us at <span>email@email.com</span>
      </p>

    </div>
  </div>
</form>

</body>
</html>
