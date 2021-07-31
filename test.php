<?php

echo "Running Perfect!!!";

$ip_address = $_SERVER['REMOTE_ADDR'];
$timestamp = time();

echo "<br> IP: ".$ip_address;
echo "<br> Timestamp: : ".$timestamp;

function getRequestHeaders() {
    $headers = array();
    foreach($_SERVER as $key => $value) {
        if (substr($key, 0, 5) <> 'HTTP_') {
            continue;
        }
        $header = str_replace(' ', '-', ucwords(str_replace('_', ' ', strtolower(substr($key, 5)))));
        $headers[$header] = $value;
    }
    return $headers;
}

$headers = getRequestHeaders();

foreach ($headers as $header => $value) {
    echo "$header: $value <br />\n";
}

print_r($_SERVER);

?>