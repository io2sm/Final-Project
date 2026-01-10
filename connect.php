<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$con = mysqli_connect("sql305.infinityfree.com","if0_40873143","Kayed2006","if0_40873143_htu_gym"); 
?>