<?php include 'connect.php'; ?>

<?php 
$selectTeam = mysqli_query($con, "SELECT * FROM team");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>HTU Martial Arts Gym | Our Team</title>
  <link rel="stylesheet" href="style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@500;600;700&display=swap" rel="stylesheet"/>
</head>

<body>

<?php include 'navbar.php'; ?>

<main>
  <section class="ourTeam">
    <h2>Our Team</h2>

    <div class="cards">
      <?php foreach ($selectTeam as $row) { ?>
        
        <div class="card instructor">
          <h3><?php echo $row['name']; ?></h3>
          <p class="job"><?php echo $row['job']; ?></p>
          <p class="details"><?php echo $row['details']; ?></p>
        </div>

      <?php } ?>
    </div>
  </section>
</main>

<?php include 'footer.php'; ?>
</body>

</html>
