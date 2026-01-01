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
<?php foreach ($selectCourses as $rowCourses) { ?>
      
        <div class="card">
          <div class = 'card-content'>
          <h3><?php echo $rowCourses['name']; ?></h3>
          <p class = "details"><?php echo $rowCourses['details']; ?></p>
          <p class="prices"><?php echo $rowCourses['price']; ?></p>
          </div>
          <button class="btn-enroll" name = "<?php echo $rowCourses['ID']; ?>">Enroll Now</button>
        </div>
<?php } ?>
</div>
</section>
<hr>
<section class="Memberships">
      <h2>Memberships</h2>
      <div class="cards">
<?php foreach ($selectMemberships as $rowMemberships) { ?>
      
        <div class="card">

          <div class = 'card-content'>
          <h3><?php echo $rowMemberships['name']; ?></h3>
          <p class = "details"><?php echo $rowMemberships['details']; ?></p>
          <p class="prices"><?php echo $rowMemberships['price']; ?></p>
          </div>
          <button class="btn-enroll" name = "<?php echo $rowMemberships['ID']; ?>">Enroll Now</button>
        </div>
<?php } ?>
</div>
</section>

</body>
<?php include 'footer.php'; ?>
</html>