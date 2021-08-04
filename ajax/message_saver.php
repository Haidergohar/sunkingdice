<?php
session_start();
if(isset($_GET['msg'])){

    include_once("../includes/config.php");
    $visitor_id = $_SESSION['visitor_id'];



    $msg = mysqli_real_escape_string($conn, urldecode($_GET['msg']));
    if(trim($msg) != ""){
        $sql = "UPDATE `visitors_data` SET `message` = '$msg' WHERE `id` = '$visitor_id'";
        mysqli_query($conn, $sql);
    }

}

?>