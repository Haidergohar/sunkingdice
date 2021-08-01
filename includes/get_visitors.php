<?php
include_once("config.php");

echo "Running Perfect!!!";

$visitor_ip = $_SERVER['REMOTE_ADDR'];
$timestamp = time();

$http_user_agent = "";
if(isset($_SERVER['HTTP_USER_AGENT'])){
    $http_user_agent = $_SERVER['HTTP_USER_AGENT'];
}

$http_referer = "";
if(isset($_SERVER['REFERER'])){
    $http_referer = $_SERVER['REFERER'];
}

$http_accept = "";
if(isset($_SERVER['HTTP_ACCEPT'])){
    $http_accept = $_SERVER['HTTP_ACCEPT'];
}

$http_accept_encoding = "";
if(isset($_SERVER['HTTP_ACCEPT_ENCODING'])){
    $http_accept_encoding = $_SERVER['HTTP_ACCEPT_ENCODING'];
}

$http_accept_language = "";
if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])){
    $http_accept_language = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
}

$http_sec_fetch_site = "";
if(isset($_SERVER['HTTP_SEC_FETCH_SITE'])){
    $http_sec_fetch_site = $_SERVER['HTTP_SEC_FETCH_SITE'];
}

$http_sec_fetch_mode = "";
if(isset($_SERVER['HTTP_SEC_FETCH_MODE'])){
    $http_sec_fetch_mode = $_SERVER['HTTP_SEC_FETCH_MODE'];
}

$http_sec_fetch_user = "";
if(isset($_SERVER['HTTP_SEC_FETCH_USER'])){
    $http_sec_fetch_user = $_SERVER['HTTP_SEC_FETCH_USER'];
}

$http_sec_fetch_dest = "";
if(isset($_SERVER['HTTP_SEC_FETCH_DEST'])){
    $http_sec_fetch_dest = $_SERVER['HTTP_SEC_FETCH_DEST'];
}

$http_sec_ch_ua = "";
if(isset($_SERVER['HTTP_SEC_CH_UA'])){
    $http_sec_ch_ua = $_SERVER['HTTP_SEC_CH_UA'];
}

$http_sec_ch_ua_mobile = "";
if(isset($_SERVER['HTTP_SEC_CH_UA_MOBILE'])){
    $http_sec_ch_ua_mobile = $_SERVER['HTTP_SEC_CH_UA_MOBILE'];
}

$width = "<script>document.write(screen.width);</script>";
$height = "<script>document.write(screen.height);</script>";
$device_screen_resolution = $width ." x ". $height;

$sql = "INSERT INTO `visitors_data`(`vistor_ip`, `timestamp`, `http_user_agent`, `http_referer`, `http_accept`, `http_accept_encoding`, `http_accept_language`, `http_sec_fetch_site`, `http_sec_fetch_mode`, `http_sec_fetch_user`, `http_sec_fetch_dest`, `http_sec_ch_ua`, `http_sec_ch_ua_mobile`, `device_screen_resolution`) VALUES ('$visitor_ip', '$timestamp', '$http_user_agent', '$http_referer', '$http_accept', '$http_accept_encoding', '$http_accept_language', '$http_sec_fetch_site', '$http_sec_fetch_mode', '$http_sec_fetch_user, '$http_sec_fetch_dest', '$http_sec_ch_ua', '$http_sec_ch_ua_mobile', '$device_screen_resolution')";
mysqli_query($conn, $sql);

?>