<?php
include '../../connect.php';

if(isset($_GET['ID'])) {
  $id = $_GET['ID'];
  $sql = "DELETE FROM courses WHERE ID = $id";
  $result = mysqli_query($con, $sql);

    if ($result) {
        header('Location: index.php');
    } else {
        mysqli_error($con);
    }
}

?>