<?php 
include '../../connect.php'; 

$id = $_GET['id'];
$sql = "select * from timetable where ID = $id";
$timetableQuery = mysqli_query($con, $sql);
$fetch = mysqli_fetch_assoc($timetableQuery);

$name = $fetch['name'];
$day = $fetch['day'];
$details = $fetch['details'];
$startTime = $fetch['startTime'];
$endTime = $fetch['endTime'];
$instructor = $fetch['instructor'];

if (isset($_POST['update'])) { 
    $name = $_POST['name'];
    $day = $_POST['day'];
    $details = $_POST['details'];
    $startTime = $_POST['startTime'];
    $endTime = $_POST['endTime'];
    $instructor = $_POST['instructor'];

    $update = "update timetable set name = '$name', day = '$day', details = '$details', startTime = '$startTime', endTime = '$endTime', instructor = '$instructor' where ID = $id";
    $result = mysqli_query($con, $update);
    if ($result) {
        header('Location: index.php');
        exit();
    } else {
        mysqli_error($con);
    }
} ?> 
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
                <label>Class Name</label>
                <input type="text" name="name" value ="<?php echo $name; ?>">
            </div>
            <div class="formRow">
                <label>Day</label>
                <select name="day" required> 
                    <option value="" disabled>Select a day</option>
                    <option value="Sunday" <?php echo ($day == 'Sunday') ? 'selected' : ''; ?>>Sunday</option>
                    <option value="Monday" <?php echo ($day == 'Monday') ? 'selected' : ''; ?>>Monday</option>
                    <option value="Tuesday" <?php echo ($day == 'Tuesday') ? 'selected' : ''; ?>>Tuesday</option>
                    <option value="Wednesday" <?php echo ($day == 'Wednesday') ? 'selected' : ''; ?>>Wednesday</option>
                    <option value="Thursday" <?php echo ($day == 'Thursday') ? 'selected' : ''; ?>>Thursday</option>
                    <option value="Friday" <?php echo ($day == 'Friday') ? 'selected' : ''; ?>>Friday</option>
                    <option value="Saturday" <?php echo ($day == 'Saturday') ? 'selected' : ''; ?>>Saturday</option>
                </select>
            </div>
            <div class="formRow" >
                <label>Details</label>
                <input type="text" name="details" value ="<?php echo $details; ?>">
            </div>
            <div class="formRow">
                <label>Start time</label>
                <input type="time" name="startTime" value ="<?php echo $startTime; ?>">
            </div>
            <div class="formRow">
                <label>End time</label>
                <input type="time" name="endTime" value ="<?php echo $endTime; ?>">
            </div>
            <div class="formRow">
                <label>Instructor</label>
                <input type="text" name="instructor" value ="<?php echo $instructor; ?>">
            </div>
            <button name="update" class="adminSubmit">Update Class</button>
        </form>
</body>
</html>

