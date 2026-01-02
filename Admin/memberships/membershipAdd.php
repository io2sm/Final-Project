<?php include '../../connect.php';


if (isset($_POST['submit'])) { 
    $name = $_POST['name'];
    $details = $_POST['details'];
    $price = $_POST['price'];

    $sql = "insert into membership (name,details,price) values ('$name','$details','$price')";
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
    <h1>HTU Gym Membership Manager</h1>

    <form method="post" class="adminForm">
            <div class="formRow">
                <label>Membership Name</label>
                <input type="text" name="name">
            </div>
            <div class="formRow">
                <label>Details</label>
                <input type="text" name="details">
            </div>
            <div class="formRow">
                <label>Price</label>
                <input type="text" name="price">
            </div>
            <button name="submit" class="adminSubmit">Add Membership</button>
        </form>
</body>
</html>