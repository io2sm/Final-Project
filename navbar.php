<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    
    <nav class="regular-nav">
      <div class="logo">
        <img src="Assets/images/Logo.jpg" alt="Logo" />
        <h2>HTU Martial Arts Gym</h2>
      </div>
      <div>
        <ul class="nav-links">
          <li><a href="index.php">Home</a></li>
          <li><a href="classes.php">Classes</a></li>
          <li><a href="timetable.php">Timetable</a></li>
          <li><a href="Team.php">Team</a></li>
          <!-- Show Profile Tab If Logged In -->
           <?php if (isset($_SESSION['user_id'])) { ?>
        <li>
          <a href="profile.php">
            👤 <?= $_SESSION['user_name']; ?>
          </a>
        </li>
        <li>
          <a href="logout.php">Logout</a>
        </li>
    <?php } else { ?>
        <li>
          <a href="Login.php">Login / Signup</a>
        </li>
    <?php } ?>
     <?php if (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == 1) { ?>
        <li>
          <a href="Admin/courses/index.php">
            Admin Dashboard
          </a>
        </li>
        <?php } ?>
        </ul>
      </div>
    </nav>
