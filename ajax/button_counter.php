<?php
session_start();
if(isset($_GET['btn'])){
    include_once("../includes/config.php");

    $visitor_id = $_SESSION['visitor_id'];
    $sql_select = "SELECT `button_clicked_count` FROM `visitors_data` WHERE `id` = '$visitor_id'";
    $result = mysqli_query($conn, $sql_select);
    $data = mysqli_fetch_assoc($result);
    $button_count = $data['button_clicked_count'];
    $new_count = intval($button_count) + 1;

    $sql = "UPDATE `visitors_data` SET `button_clicked_count` = '$new_count' WHERE `id` = '$visitor_id'";
    mysqli_query($conn, $sql);
}

?>