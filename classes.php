<?php include 'connect.php'; ?>

<?php 
$selectCourses = mysqli_query($con, "SELECT * FROM courses");
$selectMemberships = mysqli_query($con, "SELECT * FROM membership");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTU Martial Arts Gym | Classes</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>

<?php include 'navbar.php'; ?>

<section class="Courses">
      <h2>Courses</h2>
      <div class="cards">
<?php while ($rowCourses = mysqli_fetch_assoc($selectCourses)) { ?>
      
        <div class="card">
          <div class = 'card-content'>
          <h3><?= $rowCourses['name']; ?></h3>
          <p class = "details"><?= $rowCourses['details']; ?></p>
          <p class="prices"><?= $rowCourses['price']; ?></p>
          </div>
          <button class="btn-enroll" name = "<?= $rowCourses['ID']; ?>">Enroll Now</button>
        </div>
<?php } ?>
</div>
</section>
<hr>
<section class="Memberships">
      <h2>Memberships</h2>
      <div class="cards">
<?php while ($rowMemberships = mysqli_fetch_assoc($selectMemberships)) { ?>
      
        <div class="card">

          <div class = 'card-content'>
          <h3><?= $rowMemberships['name']; ?></h3>
          <p class = "details"><?= $rowMemberships['details']; ?></p>
          <p class="prices"><?= $rowMemberships['price']; ?></p>
          </div>
          <button class="btn-enroll" name = "<?= $rowMemberships['ID']; ?>">Enroll Now</button>
        </div>
<?php } ?>
</div>
</section>

</body>
<?php include 'footer.php'; ?>
</html>