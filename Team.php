<?php include 'connect.php'; ?>

<?php 
$select = mysqli_query($con, "SELECT * FROM team");
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

<section class="ourTeam">
  <h2>Our Team</h2>

  <div class="cards">
    <?php while ($row = mysqli_fetch_assoc($select)) { ?>
      
      <div class="card instructor">
        <h3><?= $row['name']; ?></h3>
        <p class="job"><?= $row['job']; ?></p>
        <p class="details"><?= $row['details']; ?></p>
      </div>

    <?php } ?>
  </div>
</section>



</body>
<?php include 'footer.php'; ?>
</html>
