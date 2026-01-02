<?php
include 'connect.php';
?>

  <!-- Database -->
  <?php 
   session_start();
    if (isset($_POST['loginSubmit'])) {
      $email = $_POST['email'];
      $password = $_POST['password'];

      $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
      $result = mysqli_query($con, $sql);

      if (mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $user['ID'];
        $_SESSION['user_name'] = $user['name'];
        header('Location: Home.php');
        exit();
      } else 
        header("Location: Login.php?error=1");
        exit();
      }
    
  ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <title>HTU Martial Arts Gym | Login</title>
      <link
          href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@500;600;700&display=swap"
          rel="stylesheet"
        />
      <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <?php include 'navbar.php'; ?>

    <form action="Login.php" method="post">  
    <div class="log-container">
      <div class="log-card">

        <h2>WELCOME BACK</h2>

        <label>Email Address</label>
        <input type="email" name="email" placeholder="Enter email" required />

        <label>Password</label>
        <input type="password" name="password" placeholder="Enter password" required/>

        <button type="submit" name="loginSubmit">LOGIN</button>
        <br>
      <div class="log-tabs">
          Don't have an account ? <a href="Signup.php">SIGN UP</a>
      </div>
      <p>Need Help ? <br> Contact us at <span>htugym@gmail.com</span></p>
      </div>

    </div>
    </form>
    <?php include 'footer.php'; ?>
    <script src="script.js"></script>
    </body>
    </html>