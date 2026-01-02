<?php 
include '../../connect.php'; 

$id = $_GET['id'];
$sql = "select * from courses where ID = $id";
$details = mysqli_query($con, $sql);
$fetch = mysqli_fetch_assoc($details);

$name = $fetch['name'];
$details = $fetch['details'];
$price = $fetch['price'];

if (isset ($_POST['update'])) {

    $name = $_POST['name'];
    $details = $_POST['details'];
    $price = $_POST['price'];

    $update = "update courses set name = '$name', details = '$details', price = '$price' where ID = $id";

    $result = mysqli_query($con, $update);

    if($result) {
        header('location: index.php');
    } else {
        mysqli_error($con);
    }
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTU Gym Courses Manager</title>
    <link rel="stylesheet" href="../../style.css" />
</head>
<body>
    <form method="post" class="adminForm">
            <div class="formRow">
                <label>Course Name</label>
                <input type="text" class="form-control" name="name" value ="<?php echo $name; ?>">
            </div>
            <div class="formRow">
                <label>Details</label>
                <input type="text" class="form-control" name="details" value ="<?php echo $details; ?>">
            </div>
            <div class="formRow">
                <label>Price</label>
                <input type="text" class="form-control" name="price" value ="<?php echo $price; ?>">
            </div>
            <button name="update" class="adminSubmit">Update Course</button>
        </form>
    
</body>
</html>