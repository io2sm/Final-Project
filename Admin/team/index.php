<?php 
include '../../connect.php'; 

 
if (!isset($_SESSION['isAdmin']) || $_SESSION['isAdmin'] != 1) {
    header('Location: ../../Home.php');
    exit();
}
include '../adminNav.php';
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
    <title>Document</title>

</head>
<body>
    <h1>HTU Gym Team Manager</h1>
    <button class="AddBtn"> <a href="teamAdd.php" class="text-light">Add Team Member</a> </button>

<div class="AdminContainer">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Job</th>
                    <th scope="col">Details</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "select * from team";
                $result = mysqli_query($con, $sql);
               
                if ($result) {
 
                    
                    $allTeam = mysqli_fetch_all($result, MYSQLI_ASSOC);        
               
                    
                    foreach ($allTeam as $row) {
               
                        $id = $row['ID'];
                        $name = $row['name'];
                        $job = $row['job'];
                        $details = $row['details'];
          
                        echo ' <tr>
                            <th scope="row">' . $id . '</th>
                            <td>' . $name . '</td>
                            <td>' . $job . '</td>
                            <td>' . $details . '</td>
                            <td class="Btns">
                            <button class="UpdateBtn"><a href="teamUpdate.php?id=' . $id . '" class="text-light">Update</a></button>
                            <button class="DeleteBtn"><a href="teamDelete.php?ID=' . $id . '" class="text-light">Delete</a></button>
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