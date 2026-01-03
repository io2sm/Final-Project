<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>HTU Martial Arts Gym | Sign Up</title>

  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@500;600;700&display=swap"
    rel="stylesheet"
  />

  <link rel="stylesheet" href="style.css" />
</head>
<body>

<?php include 'navbar.php'; ?>

 <!-- Post to database -->
  <?php
    if (isset($_POST['signupSubmit'])) {
      $name = $_POST['name'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $password = $_POST['password'];

      $checkEmail = mysqli_query($con, "SELECT * FROM users WHERE email = '$email'");
      if (mysqli_num_rows($checkEmail) > 0) {
        echo "<script>alert('Email already exists. Please use a different email.');</script>";
      } else {
        $sql = "INSERT INTO users (name, phone, email, password) VALUES ('$name', '$phone', '$email', '$password')";

        $result = mysqli_query($con, $sql);

        if ($result) {
          header('Location: Login.php');
        } else {
          echo mysqli_error($con);
        }
      }
    }
      
  ?>

<form action="Signup.php" method="post">
  <div class="log-container">
    <div class="log-card">

      <h2>CREATE ACCOUNT</h2>

      <label>Name</label>
      <input type="text" name="name" placeholder="Enter name" required />

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
        Contact us at <span>htugym@gmail.com</span>
      </p>

    </div>
  </div>
</form>
<?php include 'footer.php'; ?>
</body>
</html>
