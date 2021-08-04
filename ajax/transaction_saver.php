<?php
session_start();
if(isset($_GET['trans'])){

    include_once("../includes/config.php");
    $visitor_id = $_SESSION['visitor_id'];
    $trans = mysqli_real_escape_string($conn, urldecode($_GET['trans']));
    $sql = "UPDATE `visitors_data` SET `transaction_number` = '$trans' WHERE `id` = '$visitor_id'";
    mysqli_query($conn, $sql);
}

?>