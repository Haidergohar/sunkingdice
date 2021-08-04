<?php
session_start();
if(isset($_GET['btn'])){

    include_once("../includes/config.php");
    $clicked_btn = trim($_GET['btn']);
    $visitor_id = $_SESSION['visitor_id'];


    $sql = "";
    $yes = "YES";
    if($clicked_btn == "video_btn"){
        $sql = "UPDATE `visitors_data` SET `watch_surveillance_video_btn_clicked` = '$yes' WHERE `id` = '$visitor_id'";
    } else if($clicked_btn == "video"){
        $sql = "UPDATE `visitors_data` SET `video_clicked` = '$yes' WHERE `id` = '$visitor_id'";
    } else if($clicked_btn == "stolen"){
        $sql = "UPDATE `visitors_data` SET `list_of_stolen_valuables_btn_clicked` = '$yes' WHERE `id` = '$visitor_id'";
    }
    mysqli_query($conn, $sql);
}

?>