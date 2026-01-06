<?php include '../../connect.php';


if (isset($_POST['submit'])) { 
    $name = $_POST['name'];
    $day = $_POST['day'];
    $details = $_POST['details'];
    $startTime = $_POST['startTime'];
    $endTime = $_POST['endTime'];
    $instructor = $_POST['instructor'];

    $sql = "insert into timetable (name,day,details,startTime,endTime,instructor) values ('$name','$day','$details','$startTime','$endTime','$instructor')";
    $result = mysqli_query($con, $sql);
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
    <style> body { align-items: center; } </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <link href="../../style.css" rel="stylesheet">
</head>
<body>
    <h1>HTU Gym Timetable Manager</h1>

    <form method="post" class="adminForm">
            <div class="formRow">
                <label>Class Name</label>
                <input type="text" name="name">
            </div>
            <div class="formRow">
                <label>Day</label>
                <select name="day" required>
                    <option value="" disabled selected>Select a day</option>
                    <option value="Sunday">Sunday</option>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                    <option value="Saturday">Saturday</option>
                </select>
            </div>
            <div class="formRow">
                <label>Details</label>
                <input type="text" name="details">
            </div>
            <div class="formRow">
                <label>Start time</label>
                <input type="time" name="startTime">
            </div>
            <div class="formRow">
                <label>End time</label>
                <input type="time" name="endTime">
            </div>
            <div class="formRow">
                <label>Instructor</label>
                <input type="text" name="instructor">
            </div>
            <button name="submit" class="adminSubmit">Add Class</button>
        </form>
</body>
</html>