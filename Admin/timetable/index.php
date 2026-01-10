<?php 
include '../../connect.php'; 

 
if (!isset($_SESSION['isAdmin']) || $_SESSION['isAdmin'] != 1) {
    header('Location: ../../index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="../../style.css" />
      <style>
        body { align-items: center; }
      </style>
    <title>HTU Gym Timetable Manager</title>

</head>
<body>
    <?php include '../adminNav.php'; ?>
    <h1>HTU Gym Timetable Manager</h1>
    <button class="AddBtn"> <a href="timetableAdd.php" class="text-light">Add Class</a> </button>

<div class="AdminContainer">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Day</th>
                    <th scope="col">Name</th>
                    <th scope="col">Details</th>
                    <th scope="col">Start Time</th>
                    <th scope="col">End Time</th>
                    <th scope="col">Instructor</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "select * from timetable ORDER BY FIELD(day, 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'), startTime";
                $result = mysqli_query($con, $sql);
               
                if ($result) {
 
                    
                    $allClasses = mysqli_fetch_all($result, MYSQLI_ASSOC);        
               
                    
                    foreach ($allClasses as $row) {
               
                        $id = $row['ID'];
                        $day = $row['day'];
                        $name = $row['name'];
                        $details = $row['details'];
                        $startTime = $row['startTime'];
                        $endTime = $row['endTime'];
                        $instructor = $row['instructor'];
          
                        echo ' <tr>
                            <th scope="row">' . $id . '</th>
                            <td>' . $day . '</td>
                            <td>' . $name . '</td>
                            <td>' . $details . '</td>
                            <td>' . $startTime . '</td>
                            <td>' . $endTime . '</td>
                            <td>' . $instructor . '</td>
                            <td class="Btns">
                            <button class="UpdateBtn"><a href="timetableUpdate.php?id=' . $id . '" class="text-light">Update</a></button>
                            <button class="DeleteBtn"><a href="timetableDelete.php?ID=' . $id . '" class="text-light">Delete</a></button>
                            </td>
                            </tr>';
 
                    }
 
                }
                ?>
 
            </tbody>
        </table>
    </div>
</body>
</html>
