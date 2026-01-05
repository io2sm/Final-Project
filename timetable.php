<?php 
include 'connect.php';

$sql = "SELECT * FROM timetable";
$result = mysqli_query($con, $sql);
$timetable = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTU Martial Arts Gym | Timetable</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'navbar.php'; ?>    
<main>

<section class="timetable">
    <h2>Class Timetable</h2>
    <table>
        <thead>
            <tr>
                <th>Day</th> 
                <th>Name</th>
                <th>Details</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Instructor</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($timetable as $row) { ?>
            <tr>
                <td><?php echo $row['day']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['details']; ?></td>
                <td><?php echo $row['startTime']; ?></td>
                <td><?php echo $row['endTime']; ?></td>
                <td><?php echo $row['instructor']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
            </main>
    <?php include 'footer.php'; ?>
</body>
</html>