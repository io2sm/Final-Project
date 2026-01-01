    <?php
session_start();
?>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    
    <nav>
      <div class="logo">
        <img src="Assets/images/Logo.jpg" alt="Logo" />
        <h2>HTU Martial Arts Gym</h2>
      </div>
      <div>
        <ul class="nav-links">
          <li><a href="Home.php">Home</a></li>
          <li><a href="classes.php">Classes</a></li>
          <li><a href="#">Timetable</a></li>
          <li><a href="Team.php">Team</a></li>
           <?php if (isset($_SESSION['user_id'])) { ?>
        <!-- User is logged in -->
        <li>
          <a href="profile.php">
            👤 <?= htmlspecialchars($_SESSION['user_name']); ?>
          </a>
        </li>
    <?php } else { ?>
        <li>
          <a href="Login.php">Login / Signup</a>
        </li>
    <?php } ?>
        </ul>
      </div>
    </nav>
