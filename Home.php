<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HTU Martial Arts Gym</title>
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@500;600;700&display=swap"
      rel="stylesheet"
    />

  </head>
  <body>
    <!-- Navbar -->
    <?php include 'navbar.php'; ?>
    <!-- Hero -->
    <div class="hero">
      <div class="hero-content">
        <h1>Feel The difference</h1>
        <p>
          Experience heart-pumping cardio, strength-building challenges, and
          inspiring moves, all in one energetic fusion. Elevate your fitness
          journey with the power of unity, as the collective rhythm propels you
          to triumph. Sweat, inspire, and conquer with us now! Embrace the magic
          of group exercise and unleash your ultimate self!
        </p>
        <a href="./classes.php" class="btn">View Classes</a>
      </div>
      <div class="hero-media">
        <img src="Assets/images/guyWorkingOut.webp" alt="A guy working out" />
      </div>
    </div>

    <!-- Why Choose Us -->
    <section class="whyChooseUs">
      <h2>Why Choose Us</h2>
      <div class="cards">
        <div class="card">
          <img src="Assets/images/oldMan.jpg" alt="Old man working out" />
          <h3>All Skill Levels</h3>
          <p>
            All skill levels are welcome! Our experienced trainers will guide
            you through every step of your fitness journey.
          </p>
        </div>
        <div class="card">
          <img src="Assets/images/gymLady.webp" alt="lady with a gym bag" />
          <h3>Flexible Schedule</h3>
          <p>
            Class times are designed to fit your busy lifestyle, with options
            available throughout the day and week.
          </p>
        </div>
        <div class="card">
          <img src="Assets/images/Trainer.jpg" alt="personal trainer" />
          <h3>Expert Instructors</h3>
          <p>
            Our trainers are certified professionals dedicated to helping you
            achieve your fitness goals safely and effectively.
          </p>
        </div>
      </div>
    </section>

    <!-- Popular Classes -->
    <section class="popularClasses">
      <h2>Popular Classes</h2>
      <div class="cards">
        <div class="card">
          <img src="Assets/images/karateClass.avif" alt="Karate class" />
          <h3>Karate</h3>
          <a href="./classes.php" class="btn">Enroll Now</a>
        </div>
        <div class="card">
          <img src="Assets/images/jiuJitsuClass.webp" alt="Jiu Jitsu class" />
          <h3>Jiu Jitsu</h3>
          <a href="./classes.php" class="btn">Enroll Now</a>
        </div>
        <div class="card">
          <img src="Assets/images/muayThaiClass.jpg" alt="Muay Thai class" />
          <h3>Muay Thai</h3>
          <a href="./classes.php" class="btn">Enroll Now</a>
        </div>
      </div>
    </section>
     <?php include 'footer.php'; ?>
  </body>
 
</html>