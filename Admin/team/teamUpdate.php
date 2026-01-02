<?php 
include '../../connect.php'; 

$id = $_GET['id'];
$sql = "select * from team where ID = $id";
$details = mysqli_query($con, $sql);
$fetch = mysqli_fetch_assoc($details);

$name = $fetch['name'];
$job = $fetch['job'];
$details = $fetch['details'];

if (isset ($_POST['update'])) {

    $name = $_POST['name'];
    $job = $_POST['job'];
    $details = $_POST['details'];

    $update = "update team set name = '$name', job = '$job', details = '$details' where ID = $id";

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
    <title>Document</title>
    <link rel="stylesheet" href="../../style.css" />
</head>
<body>
    <form method="post" class="adminForm">
            <div class="formRow">
                <label>Team Member Name</label>
                <input type="text" class="form-control" name="name" value ="<?php echo $name; ?>">
            </div>
            <div class="formRow">
                <label>Job</label>
                <input type="text" class="form-control" name="job" value ="<?php echo $job; ?>">
            </div>
            <div class="formRow">
                <label>Details</label>
                <input type="text" class="form-control" name="details" value ="<?php echo $details; ?>">
            </div>
            <button name="update" class="adminSubmit">Update Team Member</button>
        </form>
    
</body>
</html>