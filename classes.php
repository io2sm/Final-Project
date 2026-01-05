<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include 'connect.php'; 

if (isset($_POST['courseEnroll'])) {
  if (isset($_SESSION['user_id'])) {
    $courseId = $_POST['courseId'];
    $courseName = $_POST['courseName'];
    $courseDetails = $_POST['courseDetails'];
    $coursePrice = $_POST['coursePrice'];
    $userID = $_SESSION['user_id'];
    
        $checkEnrollment = mysqli_query($con, "SELECT * FROM usercourses WHERE userID = '$userID' AND productName = '$courseName'");
        if (mysqli_num_rows($checkEnrollment) > 0) {
          echo "<script>alert('You are already enrolled in this course');</script>";
        } else {
          $userCoursesSql = "INSERT INTO `usercourses`(`productName`, `productDetails`, `productPrice`, `userID`) VALUES ( '$courseName', '$courseDetails', '$coursePrice', '$userID')";
          mysqli_query($con, $userCoursesSql);
        }
  } else {
    echo "<script>alert('Please log in to enroll in a course.');</script>";
  }
}
if (isset($_POST['membershipEnroll'])) {
    if (isset($_SESSION['user_id'])) {
    $membershipId = $_POST['membershipId'];
    $membershipName = $_POST['membershipName'];
    $membershipDetails = $_POST['membershipDetails'];
    $membershipPrice = $_POST['membershipPrice'];
    $userID = $_SESSION['user_id'];
    $userMemberships = mysqli_query($con, "SELECT * FROM usermemberships WHERE userID = ".$_SESSION['user_id']);

                  if (mysqli_num_rows($userMemberships) > 0) {
                  echo "<script>alert('You are already enrolled in a membership.');</script>";
                  } else { $userMembershipsSql = "INSERT INTO `usermemberships`(`membershipName`, `membershipDetails`, `membershipPrice`, `userID`) VALUES ( '$membershipName', '$membershipDetails', '$membershipPrice', '$userID')";
                  mysqli_query($con, $userMembershipsSql); 
                  }}
  else {
    echo "<script>alert('Please log in to enroll in a membership.');</script>";
}}
?>


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
         <?php echo " 
          <form method='post'>
          <input type='hidden' name='courseId' value='" . $rowCourses['ID'] . "' />
          <input type='hidden' name='courseName' value='" . $rowCourses['name'] . "' />
          <input type='hidden' name='courseDetails' value='" . $rowCourses['details'] . "' />
          <input type='hidden' name='coursePrice' value='" . $rowCourses['price'] . "' />
          <input type='submit' class='btn-enroll' name='courseEnroll' value='Enroll Now' /> 
          </form>" ?>
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
          <?php echo " 
          <form method='post'>
          <input type='hidden' name='membershipId' value='" . $rowMemberships['ID'] . "' />
          <input type='hidden' name='membershipName' value='" . $rowMemberships['name'] . "' />
          <input type='hidden' name='membershipDetails' value='" . $rowMemberships['details'] . "' />
          <input type='hidden' name='membershipPrice' value='" . $rowMemberships['price'] . "' />
          <input type='submit' class='btn-enroll' name='membershipEnroll' value='Enroll Now' /> 
          </form>" ?>
        </div>
<?php } ?>
</div>
</section>
<?php include 'footer.php'; ?>
</body>

</html>