<?php include 'connect.php'; 
session_start();
$userInfo = mysqli_query($con, "SELECT * FROM users WHERE ID = ".$_SESSION['user_id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile - HTU Martial Arts Gym</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@500;600;700&display=swap" rel="stylesheet"/>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <?php foreach ($userInfo as $row) { ?>
       
     <h1 class="profile-header">Welcome, <?php echo $row['name']; ?></h1>
     <div class="profile-container">
        <div class = "profile-info">     
           <img src="Assets/images/pfp.png" alt="profile picture">  
            <div class="details">
            <p>Name: <span><?php echo $row['name']; ?></span></p>
            <p>Email: <span><?php echo $row['email']; ?></span></p>
            <p>Phone Number: <span><?php echo $row['phone']; ?></span></p>
            </div>
        </div>
        <br>
        <hr>
        <br>
        <?php } ?>
        <section class="course-membership">
        <div class="enrolled-courses">
            <h2 style = "text-align: center;">Your Enrolled Courses</h2><br>
            <?php
            $userCourses = mysqli_query($con, "SELECT * FROM usercourses WHERE userID = ".$_SESSION['user_id']);
            if (mysqli_num_rows($userCourses) > 0) {
                foreach ($userCourses as $course) {
                    echo "<div class='enroll-card'>
                            <h3>" . $course['productName'] . "</h3>
                            <p>" . $course['productDetails'] . "</p>
                            <p class='prices'>" . $course['productPrice'] . "</p>
                            <button class='cancel-btn'><a href='cancelCourse.php?id=" . $course['ID'] . "'>Cancel Course</a></button>
                          </div>";
                }
            } else {
                echo "<p>You have not enrolled in any courses yet.</p>";
            }
            ?>
        </div>
        <div class="enrolled-memberships">
            <h2 style = "text-align: center;">Your Enrolled Memberships</h2><br>
            <?php
            $userMemberships = mysqli_query($con, "SELECT * FROM usermemberships WHERE userID = ".$_SESSION['user_id']);
            if (mysqli_num_rows($userMemberships) > 0) {
                foreach ($userMemberships as $membership) {
                    echo "<div class='enroll-card'>
                            <h3>" . $membership['membershipName'] . "</h3>
                            <p>" . $membership['membershipDetails'] . "</p>
                            <p class='prices'>" . $membership['membershipPrice'] . "</p>
                            <button class='cancel-btn'><a href='cancelMembership.php?id=" . $membership['ID'] . "'>Cancel Membership</a></button>
                          </div>";
                }
            } else {
                echo "<p>You have not enrolled in any memberships yet.</p>";
            }
            ?>
    </div>
    </section>
        </div> 

</body>
    <?php include 'footer.php'; ?>
</html>