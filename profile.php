<?php include 'connect.php'; 
session_start();?>
<?php 
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

            <?php } ?>
        </div>
    </div>
        

</body>
    <?php include 'footer.php'; ?>
</html>