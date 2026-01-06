<?php 
include 'connect.php';

$sun = mysqli_query($con, "SELECT * FROM timetable WHERE day='Sunday' ORDER BY startTime");
$sunday = mysqli_fetch_all($sun, MYSQLI_ASSOC);
$mon = mysqli_query($con, "SELECT * FROM timetable WHERE day='Monday' ORDER BY startTime");
$monday = mysqli_fetch_all($mon, MYSQLI_ASSOC);
$tue = mysqli_query($con, "SELECT * FROM timetable WHERE day='Tuesday' ORDER BY startTime");
$tuesday = mysqli_fetch_all($tue, MYSQLI_ASSOC);
$wed = mysqli_query($con, "SELECT * FROM timetable WHERE day='Wednesday' ORDER BY startTime");
$wednesday = mysqli_fetch_all($wed, MYSQLI_ASSOC);
$thu = mysqli_query($con, "SELECT * FROM timetable WHERE day='Thursday' ORDER BY startTime");
$thursday = mysqli_fetch_all($thu, MYSQLI_ASSOC);
$fri = mysqli_query($con, "SELECT * FROM timetable WHERE day='Friday' ORDER BY startTime");
$friday = mysqli_fetch_all($fri, MYSQLI_ASSOC);
$sat = mysqli_query($con, "SELECT * FROM timetable WHERE day='Saturday' ORDER BY startTime");
$saturday = mysqli_fetch_all($sat, MYSQLI_ASSOC);

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
                <th id = "dayTh">Day</th>
                <th id = "classTh">Classes</th> 
            </tr>
        </thead>
    </table>
    <table>
        
        <tbody>
            <!-- Sunday -->
             <tr> <td> Sunday </td>
            <?php foreach ($sunday as $row) { ?>
                <td>
            <div class="card">
          <div class = 'card-content'>
          <h3><?php echo $row['name']; ?></h3>
          <p class = "details"><?php echo $row['details']; ?></p>
          <p class="time"><?php echo date("H:i", strtotime($row['startTime'])); ?> - <?php echo date("H:i", strtotime($row['endTime'])); ?></p>
            <p class="instructor">By : <?php echo $row['instructor']; ?></p>
          </div>
            </div>
            </td>
            <?php } ?>
            </tr>
            <!-- Monday -->
           <tr> <td> Monday </td>
            <?php foreach ($monday as $row) { ?>
            <td>
            <div class="card">
          <div class = 'card-content'>
          <h3><?php echo $row['name']; ?></h3>
          <p class = "details"><?php echo $row['details']; ?></p>
          <p class="time"><?php echo date("H:i", strtotime($row['startTime'])); ?> - <?php echo date("H:i", strtotime($row['endTime'])); ?></p>
            <p class="instructor">By : <?php echo $row['instructor']; ?></p>
          </div>
            </div>
            </td>
            <?php } ?>
            </tr>
            
            <!-- Tuesday -->
            <tr> <td> Tuesday </td>
            <?php foreach ($tuesday as $row) { ?>
                <td>
            <div class="card">
          <div class = 'card-content'>
          <h3><?php echo $row['name']; ?></h3>
          <p class = "details"><?php echo $row['details']; ?></p>
          <p class="time"><?php echo date("H:i", strtotime($row['startTime'])); ?> - <?php echo date("H:i", strtotime($row['endTime'])); ?></p>
            <p class="instructor">By : <?php echo $row['instructor']; ?></p>
          </div>
            </div>
            </td>
            <?php } ?>
            </tr>
            
            <!-- Wednesday -->
            <tr> <td> Wednesday </td>
            <?php foreach ($wednesday as $row) { ?>
                <td>
            <div class="card">
          <div class = 'card-content'>
          <h3><?php echo $row['name']; ?></h3>
          <p class = "details"><?php echo $row['details']; ?></p>
          <p class="time"><?php echo date("H:i", strtotime($row['startTime'])); ?> - <?php echo date("H:i", strtotime($row['endTime'])); ?></p>
            <p class="instructor">By : <?php echo $row['instructor']; ?></p>
          </div>
            </div>
            </td>
            <?php } ?>
            </tr>
            
            <!-- Thursday -->
                         <tr> <td> Thursday </td>
            <?php foreach ($thursday as $row) { ?>
                <td>
            <div class="card">
          <div class = 'card-content'>
          <h3><?php echo $row['name']; ?></h3>
          <p class = "details"><?php echo $row['details']; ?></p>
          <p class="time"><?php echo date("H:i", strtotime($row['startTime'])); ?> - <?php echo date("H:i", strtotime($row['endTime'])); ?></p>
            <p class="instructor">By : <?php echo $row['instructor']; ?></p>
          </div>
            </div>
            </td>
            <?php } ?>
            </tr>
            
            <!-- Friday -->
                        <tr> <td> Friday </td>
            <?php foreach ($friday as $row) { ?>
                <td>
            <div class="card">
          <div class = 'card-content'>
          <h3><?php echo $row['name']; ?></h3>
          <p class = "details"><?php echo $row['details']; ?></p>
          <p class="time"><?php echo date("H:i", strtotime($row['startTime'])); ?> - <?php echo date("H:i", strtotime($row['endTime'])); ?></p>
            <p class="instructor">By : <?php echo $row['instructor']; ?></p>
          </div>
            </div>
            </td>
            <?php } ?>
            </tr>
            
            <!-- Saturday -->
            <tr> <td> Saturday </td>
            <?php foreach ($saturday as $row) { ?>
                <td>
            <div class="card">
          <div class = 'card-content'>
          <h3><?php echo $row['name']; ?></h3>
          <p class = "details"><?php echo $row['details']; ?></p>
          <p class="time"><?php echo date("H:i", strtotime($row['startTime'])); ?> - <?php echo date("H:i", strtotime($row['endTime'])); ?></p>
            <p class="instructor">By : <?php echo $row['instructor']; ?></p>
          </div>
            </div>
            </td>
            <?php } ?>
            </tr>
        </tbody>
    </table>
            </main>
    <?php include 'footer.php'; ?>
</body>
</html>