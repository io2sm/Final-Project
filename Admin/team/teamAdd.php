<?php include '../../connect.php';


if (isset($_POST['submit'])) { 
    $name = $_POST['name'];
    $job = $_POST['job'];
    $details = $_POST['details'];

    $sql = "insert into team (name,job,details) values ('$name','$job','$details')";
    $result = mysqli_query($con, $sql);
    if ($con) {
        header('Location: index.php');
        exit();
    } else {
        mysqli_error($con);
    }
} ?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <style> body { align-items: center; } </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <link href="../../style.css" rel="stylesheet">
</head>
<body>
    <h1>HTU Gym Team Manager</h1>

    <form method="post" class="adminForm">
            <div class="formRow">
                <label>Team Member Name</label>
                <input type="text" name="name">
            </div>
            <div class="formRow">
                <label>Job</label>
                <input type="text" name="job">
            </div>
            <div class="formRow">
                <label>Details</label>
                <input type="text" name="details">
            </div>
            <button name="submit" class="adminSubmit">Add Team Member</button>
        </form>
</body>
</html>