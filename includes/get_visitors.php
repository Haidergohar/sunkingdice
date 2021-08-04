<?php
include_once("config.php");

$visitor_ip = $_SERVER['REMOTE_ADDR'];
$timestamp = time();

$details = json_decode(file_get_contents("http://ipinfo.io/{$visitor_ip}/json"));
$city = $details->city;
$country =$details->country;
$isp = $details->org;


$http_user_agent = "";
if(isset($_SERVER['HTTP_USER_AGENT'])){
    $http_user_agent = mysqli_real_escape_string($conn, $_SERVER['HTTP_USER_AGENT']);
}

$http_referer = "";
if(isset($_SERVER['REFERER'])){
    $http_referer = mysqli_real_escape_string($conn, $_SERVER['REFERER']);
}

$http_accept = "";
if(isset($_SERVER['HTTP_ACCEPT'])){
    $http_accept = mysqli_real_escape_string($conn, $_SERVER['HTTP_ACCEPT']);
}

$http_accept_encoding = "";
if(isset($_SERVER['HTTP_ACCEPT_ENCODING'])){
    $http_accept_encoding = mysqli_real_escape_string($conn, $_SERVER['HTTP_ACCEPT_ENCODING']);
}

$http_accept_language = "";
if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])){
    $http_accept_language = mysqli_real_escape_string($conn, $_SERVER['HTTP_ACCEPT_LANGUAGE']);
}

$http_sec_fetch_site = "";
if(isset($_SERVER['HTTP_SEC_FETCH_SITE'])){
    $http_sec_fetch_site = mysqli_real_escape_string($conn, $_SERVER['HTTP_SEC_FETCH_SITE']);
}

$http_sec_fetch_mode = "";
if(isset($_SERVER['HTTP_SEC_FETCH_MODE'])){
    $http_sec_fetch_mode = mysqli_real_escape_string($conn, $_SERVER['HTTP_SEC_FETCH_MODE']);
}

$http_sec_fetch_user = "";
if(isset($_SERVER['HTTP_SEC_FETCH_USER'])){
    $http_sec_fetch_user = mysqli_real_escape_string($conn, $_SERVER['HTTP_SEC_FETCH_USER']);
}

$http_sec_fetch_dest = "";
if(isset($_SERVER['HTTP_SEC_FETCH_DEST'])){
    $http_sec_fetch_dest = mysqli_real_escape_string($conn, $_SERVER['HTTP_SEC_FETCH_DEST']);
}

$http_sec_ch_ua = "";
if(isset($_SERVER['HTTP_SEC_CH_UA'])){
    $http_sec_ch_ua = mysqli_real_escape_string($conn, $_SERVER['HTTP_SEC_CH_UA']);
}

$http_sec_ch_ua_mobile = "";
if(isset($_SERVER['HTTP_SEC_CH_UA_MOBILE'])){
    $http_sec_ch_ua_mobile = mysqli_real_escape_string($conn, $_SERVER['HTTP_SEC_CH_UA_MOBILE']);
}



if(!isset($_SESSION['visitor_id'])){
    $sql = "INSERT INTO `visitors_data`(`vistor_ip`, `timestamp`, `http_user_agent`, `http_referer`, `http_accept`, `http_accept_encoding`, `http_accept_language`, `http_sec_fetch_site`, `http_sec_fetch_mode`, `http_sec_fetch_user`, `http_sec_fetch_dest`, `http_sec_ch_ua`, `http_sec_ch_ua_mobile`, `isp`, `city`, `country`) VALUES ('$visitor_ip', '$timestamp', '$http_user_agent', '$http_referer', '$http_accept', '$http_accept_encoding', '$http_accept_language', '$http_sec_fetch_site', '$http_sec_fetch_mode', '$http_sec_fetch_user', '$http_sec_fetch_dest', '$http_sec_ch_ua', '$http_sec_ch_ua_mobile', '$isp', '$city', '$country')";
    if(mysqli_query($conn, $sql)){
        $_SESSION['visitor_id'] = mysqli_insert_id($conn);
    } else{
        echo "Query Failed...".mysqli_error($conn);
    }    
}


?>