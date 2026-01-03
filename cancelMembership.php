<?php
include 'connect.php';

if(isset($_GET['id'])) {
  $id = (int) $_GET['id'];
  $sql = "DELETE FROM usermemberships WHERE ID = $id";
  $result = mysqli_query($con, $sql);

    if ($result) {
        header('Location: profile.php');
    } else {
        mysqli_error($con);
    }
}

?>