<?php
session_start();
if(isset($_GET['screen'])){
    include_once("../includes/config.php");
    $screen = $_GET['screen'];
    $visitor_id = $_SESSION['visitor_id'];
    $sql = "UPDATE `visitors_data` SET `device_screen_resolution` = '$screen' WHERE `id` = '$visitor_id'";
    mysqli_query($conn, $sql);
}

?>